<template>
  <div class="container" ref="featureContainer">
    <Progress
      v-if="!isInside"
      :active="active"
      :length="features.length"
      :displayAreaFromTop="displayAreaFromTop"
      @progressClicked="progressBeClicked"
    />
    <!-- data-area -->
    <div v-for="(feature, i) in features" :key="feature.id">
      <div v-if="!isInside" class="target outside" :data-target="i">
        <div class="side-title" style="opacity:0">
          <img :src="features[active].sideTitleImg" alt />
        </div>
        <div class="outside-area" style="opacity:0">
          <div class="title-outside">{{ feature.titleOut }}</div>
          <p
            class="text-outside"
            v-for="(text, i) in feature.textOut"
            :key="`${feature.id}${i}`"
          >
            {{ text }}
          </p>
          <router-link
            :to="feature.url"
            style="text-decoration: none"
            v-if="feature.titleOut"
          >
            <span
              class="btn-arrow"
              @click="goToPage(feature)"
              v-if="feature.titleOut"
            >
              <span :class="{ jump: !isInside }">
                <img :src="arrowImg" alt="" />
              </span>
            </span>
          </router-link>
        </div>
      </div>
      <div
        v-if="isInside"
        class="target inside"
        :ref="`target${i}`"
        :data-target="i"
        style="background: rgb(23, 23, 23)"
      >
        <!-- <div style="height: 54.4vh" /> -->
        <div :style="{ height: `${0.544 * innerHeight}px` }" />
        <FeatureContent
          :active="i"
          :isHide="false"
          :opacity="0"
          :innerHeight="innerHeight"
          :features="features"
        />
      </div>
    </div>

    <!-- display-area -->
    <div class="display-area" style="opacity: 1" :style="displayAreaStyle">
      <img
        class="display-area-bg"
        v-if="features[active].img"
        :class="{
          active: areaActive,
          inside: isInside
        }"
        :src="features[active].img.bg[deviceType === 'pc' ? 'web' : deviceType]"
        alt
      />
      <!-- display-area-outside -->
      <div class="side-title">
        <img
          class="side-title-img"
          :class="{
            active: areaActive || !isSideTitleChanged,
            inside: isInside
          }"
          :src="features[active].sideTitleImg"
          alt
        />
      </div>
      <div
        class="display-content"
        :class="{
          active: areaActive,
          'no-img': areaActive && !features[active].titleOut
        }"
      >
        <div class="display-outside" :class="{ inactive: isInside }">
          <template v-if="!isInside">
            <div class="title-outside">{{ features[active].titleOut }}</div>
            <p
              class="text-outside"
              v-for="(text, i) in features[active].textOut"
              :key="`${features[active].id}${i}`"
            >
              {{ text }}
            </p>
          </template>
          <router-link
            :to="`${rootUrl}/${features[active].url}`"
            style="text-decoration: none"
            v-if="features[active].titleOut"
          >
            <span
              class="btn-arrow"
              :class="{ inside: isInside }"
              :style="{
                color: mainColor,
                transform: isInside
                  ? `translate(-${arrowBaseDisplacement.x}%,calc( ${
                      arrowBaseDisplacement.y
                    }% + ${displacementInside *
                      this.innerHeight}px)) rotate(180deg)`
                  : 'translate(0, 0) rotate(0deg)'
              }"
              @click="goToPage(features[active])"
              v-if="features[active].titleOut"
            >
              <span :class="{ jump: !isInside }">
                <img :src="arrowImg" alt="" />
              </span>
            </span>
          </router-link>
        </div>
        <div class="display-inside" :class="{ active: isInside }">
          <template v-if="isInside">
            <FeatureContent
              :isHide="isHide"
              :active="active"
              :features="features"
              :mainColor="mainColor"
              :innerHeight="innerHeight"
              @scrollToNext="scrollToNext"
              :progressToNextPage="progressToNextPage"
            />
          </template>
        </div>
      </div>
    </div>
    <TimeLimitAlert v-if="isInside && !$store.state.timeLimitTrigger" />
  </div>
</template>

<script>
import FeatureContent from './FeatureContent'
import Progress from './Progress.vue'
import TimeLimitAlert from './TimeLimitAlert'
import { rwdMethods, sendGaMethods } from '@/mixins/masterBuilder.js'
import { fbBrowserResize } from '@/mixins/fbBrowserResize.js'
import { sendFbPixel } from '@/mixins/fbPixel'

export default {
  name: 'FeaturesPage',
  mixins: [rwdMethods, sendGaMethods, fbBrowserResize],
  props: {
    active: { type: Number, default: 0 },
    features: { type: Array },
    mainColor: { type: String },
    rootUrl: { type: String },
    arrowImg: { type: String }
  },
  components: {
    Progress,
    FeatureContent,
    TimeLimitAlert
  },
  data() {
    return {
      isInside: false,
      muted: false,
      observer: {},
      contentInView: false,
      direction: '',
      areaActive: true,
      isHide: true,
      progressInside: 0,
      progressInsideIndex: null,
      progressToNextPage: 0,
      displacementInside: 0,
      displayAreaFromTop: 0,
      nextTrigger: false,
      oldScrollingPosition: 0,
      isSideTitleChanged: false,
      innerHeight: window.innerHeight
    }
  },
  methods: {
    goToPage(feature) {
      if (!this.isInside) {
        // check position
        if (this.displayAreaFromTop !== 0) {
          if (this.displayAreaFromTop > 0) {
            window.scrollTo({
              top: this.$refs.featureContainer.offsetTop
            })
          } else {
            window.scrollTo({
              top:
                this.$refs.featureContainer.offsetTop +
                this.$refs.featureContainer.offsetHeight -
                this.innerHeight
            })
          }
          this.displayAreaFromTop = 0
        }

        this.constructObserver()
        window.addEventListener('scroll', this.countProgressInside, false)
        window.removeEventListener('scroll', this.countActiveByHeight, false)
        this.direction = ''
        this.isInside = true
        setTimeout(() => {
          this.isHide = false
        }, 500)
        this.$emit('emitIsInside', true)

        this.sendGA({
          category: 'related',
          action: 'click',
          label: `article_${this.features[this.active].titleOut}`
        })
        sendFbPixel('閱讀下一頁')
      } else {
        this.destroyObserver()
        window.removeEventListener('scroll', this.countProgressInside, false)

        this.isInside = false
        this.isHide = true
        this.$emit('emitIsInside', false)
        this.$router.back()
        this.displayAreaFromTop = 0

        this.sendGA({
          category: 'back',
          action: 'click',
          label: 'back'
        })

        const top =
          this.$refs.featureContainer.offsetTop + this.innerHeight * this.active
        setTimeout(() => {
          this.displacementInside = 0
          window.scrollTo({
            top
          })
        }, 0)
        window.addEventListener('scroll', this.countActiveByHeight, false)
      }
    },
    countProgressInside() {
      this.$nextTick(() => {
        const { pageYOffset } = window
        const targetTop = this.$refs[`target${this.active}`][0].offsetTop
        const targetHeight = this.$refs[`target${this.active}`][0].offsetHeight
        this.progressInside =
          (pageYOffset - targetTop) / (targetHeight - this.innerHeight)

        // count the replacement of inside part
        if (this.progressInside < 0) {
          this.displacementInside =
            0 *
            (1 - this.innerHeight / targetHeight) *
            (targetHeight / this.innerHeight)

          if (this.features[this.active].url) {
            window.scrollTo({
              top: this.$refs[`target${this.active}`][0].offsetTop
            })
          }
        } else if (this.progressInside > 1) {
          this.displacementInside =
            1 *
            (1 - this.innerHeight / targetHeight) *
            (targetHeight / this.innerHeight)
        } else {
          this.displacementInside =
            this.progressInside *
            (1 - this.innerHeight / targetHeight) *
            (targetHeight / this.innerHeight)
        }

        // count : progressToNextPage
        if (
          this.$refs[`target${this.active}`] &&
          this.$refs[`target${this.active + 1}`]
        ) {
          const result =
            -(
              pageYOffset +
              0.5 * this.innerHeight -
              (this.$refs[`target${this.active}`][0].offsetTop +
                this.$refs[`target${this.active}`][0].offsetHeight)
            ) /
            (this.$refs[`target${this.active + 1}`][0].offsetTop -
              (this.$refs[`target${this.active}`][0].offsetTop +
                this.$refs[`target${this.active}`][0].offsetHeight))
          if (result > 1 || result < 0) {
            this.progressToNextPage = 1
          } else {
            this.progressToNextPage = result
          }
        }

        //send ga
        if (this.progressInside > 0 && this.progressInside < 1) {
          for (let i = 0; i < 10; i += 1) {
            if (
              this.progressInside > i * 0.1 &&
              this.progressInside < (i + 1) * 0.1
            ) {
              if (this.progressInsideIndex !== i) {
                this.sendGA({
                  category: 'read',
                  action: 'scroll',
                  label: `${this.features[this.active].titleOut}:${i + 1}0%`
                })

                this.progressInsideIndex = i
              }
            }
          }
        }

        // prevent escaping from area
        const containerTop = this.$refs.featureContainer.offsetTop
        const containerHeight = this.$refs.featureContainer.offsetHeight
        // up
        if (pageYOffset < containerTop) {
          window.scrollTo({ top: containerTop })
        }
        // down
        if (pageYOffset + this.innerHeight > containerTop + containerHeight) {
          window.scrollTo({
            top: containerTop + containerHeight - this.innerHeight
          })
        }
      })
    },
    checkPath() {
      if (Object.keys(this.$route.params).length !== 0) {
        const urlId = this.$route.params.id
        let trigger = false
        for (let i = 0; i < this.features.length; i += 1) {
          if (
            this.features[i].url &&
            this.features[i].url?.indexOf(urlId) !== -1
          ) {
            trigger = true
            this.isInside = true
            setTimeout(() => {
              this.isHide = false
            }, 500)
            this.$emit('emitIsInside', true)

            this.constructObserver()
            window.addEventListener('scroll', this.countProgressInside, false)
            window.removeEventListener(
              'scroll',
              this.countActiveByHeight,
              false
            )

            this.$emit('emitActive', i)
            this.$nextTick(() => {
              this.$refs[`target${i}`][0].scrollIntoView()
              this.displayAreaFromTop = 0
            })
            break
          }
        }
        if (!trigger) {
          this.$router.push({ path: '/' })
        }
      }
    },
    countActiveByHeight() {
      const { pageYOffset } = window
      const containerTop = this.$refs.featureContainer.offsetTop
      const containerHeight = this.$refs.featureContainer.offsetHeight

      if (pageYOffset > this.oldScrollingPosition) {
        this.direction = 'down'
      }
      if (pageYOffset < this.oldScrollingPosition) {
        this.direction = 'up'
      }

      if (pageYOffset < containerTop) {
        this.displayAreaFromTop = containerTop - pageYOffset
      } else if (
        pageYOffset + this.innerHeight >
        containerTop + containerHeight
      ) {
        this.displayAreaFromTop = -(
          pageYOffset +
          this.innerHeight -
          (containerTop + containerHeight)
        )
        this.$emit('emitActive', this.features.length - 1)
      } else {
        this.displayAreaFromTop = 0

        const activeIndex = Math.round(
          (pageYOffset - containerTop) / this.innerHeight
        )
        if (activeIndex < this.features.length) {
          this.$emit('emitActive', activeIndex)
        }

        // onload
        this.$emit('emitOnloadGA', this.features[activeIndex].GATitle)
      }
      this.oldScrollingPosition = pageYOffset
    },
    handlePopState(e) {
      if (this.isInside) {
        this.isInside = false
        this.isHide = true
        this.$emit('emitIsInside', false)
        // this.insideContent = {}

        this.destroyObserver()
        window.removeEventListener('scroll', this.countProgressInside, false)
        window.addEventListener('scroll', this.countActiveByHeight, false)
      }
    },
    intersectionObserver() {
      const options = {
        // root: document.querySelector('#scrollArea'),
        root: null,
        rootMargin: '0px',
        threshold: [0]
      }

      const callback = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            if (parseInt(entry.target.dataset.target) > this.active) {
              this.direction = 'down'
            } else if (parseInt(entry.target.dataset.target) < this.active) {
              this.direction = 'up'
            } else {
              this.direction = 'stay'
            }

            if (this.direction === 'down') {
              this.$emit(
                'emitActive',
                parseInt(entry.target.dataset.target, 10)
              )

              // send GA
              if (
                parseInt(entry.target.dataset.target) !== 0 &&
                this.features[entry.target.dataset.target].titleOut
              ) {
                const action = this.nextTrigger ? 'click' : 'scroll'
                this.displacementInside = 0
                if (this.nextTrigger) {
                  this.nextTrigger = false
                }

                this.sendGA({
                  category: 'next',
                  action,
                  label: `next_${action}_${
                    this.features[entry.target.dataset.target].titleOut
                  }`
                })
                sendFbPixel('閱讀下一頁')
              }
            }
            if (this.direction === 'up') {
              window.scrollTo({
                top: this.$refs[`target${this.active}`][0].offsetTop
              })
            }
          }
        })
      }

      const observer = new IntersectionObserver(callback, options)
      return observer
    },
    constructObserver() {
      const targets = document.querySelectorAll('.target')
      this.observer = this.intersectionObserver()

      targets.forEach((target, i) => {
        this.observer.observe(target)
      })
    },
    destroyObserver() {
      const targets = document.querySelectorAll('.target')

      targets.forEach((target, i) => {
        this.observer.unobserve(target)
      })
      this.observer = {}
    },
    scrollToNext() {
      window.scrollTo({
        top: this.$refs[`target${this.active + 1}`][0].offsetTop
      })
      this.nextTrigger = true
    },
    progressBeClicked(i) {
      window.scrollTo({
        top: this.$refs.featureContainer.offsetTop + this.innerHeight * i
      })
      this.$emit('emitActive', i)
    },
    handleResize() {
      const innerHeight = require('ios-inner-height')

      this.innerHeight = innerHeight()
    }
  },
  computed: {
    displayAreaStyle() {
      let areaStyle = {
        top: `${this.displayAreaFromTop}px`,
        height: !this.isInside && `${this.innerHeight}px`,
        transform: `translateY(-${this.displacementInside *
          this.innerHeight}px)`
      }
      if (!this.isInside) {
        areaStyle = { ...areaStyle, overflow: 'hidden' }
      }

      return { ...areaStyle }
    },
    arrowBaseDisplacement() {
      const { innerWidth } = window

      if (innerWidth > 768) return { x: 300, y: 300 }
      else if (innerWidth < 375) return { x: 100, y: 350 }
      else if (innerWidth >= 375 && innerWidth < 576) return { x: 150, y: 400 }
      // 576~768
      return { x: 200, y: 200 }
    }
  },
  watch: {
    active: function() {
      if (this.isInside) {
        this.areaActive = true

        // onload
        this.$emit('emitOnloadGA', this.features[this.active].GATitle)

        if (!this.features[this.active].url) {
          this.$router.push({ path: this.rootUrl })
          this.$router.push({
            path: `${this.rootUrl}/${this.features[this.active + 1].url}`
          })
          // this.$refs[`target${this.active + 1}`][0].scrollIntoView()
          window.scrollTo({
            top: this.$refs[`target${this.active + 1}`][0].offsetTop
          })
        } else {
          // only down will be renewed
          this.$router.push({ path: this.rootUrl })
          this.$router.push({
            path: `${this.rootUrl}/${this.features[this.active].url}`
          })
        }
      } else {
        if (this.direction === 'up') {
          this.isSideTitleChanged =
            this.features[this.active].sideTitleImg !==
            this.features[this.active + 1].sideTitleImg
        }
        if (this.direction === 'down') {
          this.isSideTitleChanged =
            this.features[this.active].sideTitleImg !==
            this.features[this.active - 1].sideTitleImg
        }

        this.areaActive = false
        setTimeout(() => {
          this.areaActive = true
        }, 250)
      }
    }
  },
  mounted() {
    this.handleResize()
    this.countActiveByHeight()
    window.addEventListener('scroll', this.countActiveByHeight, false)
    window.addEventListener('popstate', this.handlePopState, false)
    window.addEventListener('resize', this.handleResize, false)
    this.checkPath()
  },
  destroyed() {
    window.removeEventListener('scroll', this.countActiveByHeight, false)
    window.removeEventListener('popstate', this.handlePopState, false)
    if (Object.keys(this.observer).length > 0) {
      this.destroyObserver()
    }
  }
}
</script>
<style lang="scss" scoped>
.outside {
  height: 100vh;
  width: 100vw;
  max-width: 100%;
  background-color: rgb(23, 23, 23);
  display: flex;
  position: relative;
}
.side-title {
  overflow: hidden;
  height: 100vh;
  margin-left: 11px;
  display: flex;
  flex-direction: column;
  justify-content: center;

  @media screen and (max-width: 1024.98px) {
    margin-top: 10.55%;
    height: 33vh;
  }
}
.side-title-img {
  max-width: 95px;
  @media screen and (max-width: 1024.98px) {
    max-width: 52px;
  }
  @media screen and (max-width: 414px) {
    max-width: 31px;
  }
  min-height: 100%;
  opacity: 0;
  transform: translateY(50vh);
  transition: transform 0.25s ease-in;
  &.active {
    opacity: 1;
    transform: translateY(0);
  }
  &.inside {
    @media screen and (max-width: 1025px) {
      display: none;
    }
  }
}

.outside-area {
  position: absolute;
  left: 14.2%;
  bottom: 42.2%;
}
.title-outside {
  font-family: source-han-serif-tc, sans-serif;
  font-size: 36px;
  font-weight: bold;
  line-height: 1.5;
  color: #eeeeee;
  @media screen and (max-width: 1024.98px) {
    font-size: 28px;
    // width: 280px;
  }
  @media screen and (max-width: 413.98px) {
    font-size: 25px;
    // width: 250px;
  }
  @media screen and (max-width: 374.98px) {
    font-size: 22px;
  }
}
.text-outside {
  width: 95%;
  @media screen and (min-width: 1025px) {
    width: 400px;
  }
  @media screen and (min-width: 768px) {
    width: 600px;
  }
  @media screen and (max-width: 1024.98px) {
    font-size: 20px;
  }
  @media screen and (max-width: 413.98px) {
    font-size: 18px;
  }
  @media screen and (max-width: 374.98px) {
    font-size: 14px;
  }
  font-size: 20px;
  line-height: 1.7;
  color: #eeeeee;
  margin: 15px 0 19px;
}
.display-area {
  position: fixed;
  left: 0;
  z-index: 10;
  width: 100vw;
  height: 100%;
  max-width: 100%;
  background-color: rgb(23, 23, 23);
  display: flex;
}
.display-area-bg {
  position: absolute;
  top: 0;
  right: 0;
  width: 100vw;
  max-width: 100%;
  transition: all 0.5s ease-out;
  opacity: 0;
  &.inside {
    width: 80vw;
    max-width: 80%;
    transition: all 0.25s ease-out;
    @media screen and (max-width: 1025px) {
      width: 90vw;
      max-width: 90%;
    }
  }
  &.active {
    opacity: 1;
  }
}
.btn-arrow {
  text-decoration: none;
  display: flex;
  justify-content: center;
  line-height: 80%;
  width: 48px;
  height: 48px;
  padding: 10px;
  border: 1px solid #fff;
  padding: 15.5px;
  background-color: rgb(23, 23, 23);
  border-radius: 50%;
  &:focus {
    outline-style: none;
  }
  transition: all 0.25s ease-out;
  &.inside {
    transform: translate(-300%, 300%);
    transition: none;
  }
}
.display-content {
  transform: translateY(100vh);
  opacity: 0;
  transition: transform 0.25s ease-in;
  &.active {
    opacity: 1;
    transform: translateY(0);
    @media screen and (max-aspect-ratio: 3/4) and (min-width: 576px) {
      transform: translateY(-100px);
    }
  }
  &.no-img {
    @media screen and (max-width: 1024.98px) {
      transform: translateY(-45vh);
    }
    @media screen and (max-width: 767.98px) {
      transform: translateY(-35vh);
    }
    @media screen and (max-width: 414px) {
      transform: translateY(-25vh);
    }
    @media screen and (max-width: 374.98px) {
      transform: translateY(-34vh);
    }
  }
  z-index: 11;
  position: absolute;
  left: 0;
  width: 100%;
  top: 35%;
  @media screen and (max-width: 1024.98px) {
    top: 65%;
  }
  @media screen and (max-width: 767.98px) {
    top: 50%;
  }
}

.display-outside {
  z-index: 13;
  position: relative;
  padding-left: 14.2%;
  padding-top: 0;
  transition: all 0.25s ease-out;
  &.inactive {
    padding-top: 10%;
    padding-left: 20%;
    @media screen and (max-width: 1025px) {
      padding-top: 0;
    }
  }
}
.display-inside {
  z-index: 12;
  position: relative;
  transform: translate(-10%, -10%);
  opacity: 0;
  transition: all 0.25s ease-out;
  &.active {
    transform: translate(0, 0);
    opacity: 1;
  }
  @media screen and (max-width: 768px) {
    transform: translate(5%, -5%);
  }
}

@keyframes jump {
  0% {
    transform: translateX(0%);
  }
  50% {
    transform: translateX(50%);
  }
  100% {
    transform: translateX(0%);
  }
}
.jump {
  animation: jump 1s linear alternate infinite;
}

.wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  transition: all 0.5s;
  background-color: rgb(23, 23, 23);
}
.inside-area {
  position: absolute;
  left: 20%;
  top: 100px;
  font-size: 16px;
  font-weight: 300;
  transition: all 0.5s;
  color: white;
  &.active {
    left: 0;
    top: 0;
    font-size: 100px;
    font-weight: 900;
  }
}
</style>
