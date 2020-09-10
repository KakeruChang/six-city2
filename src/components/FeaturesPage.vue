<template>
  <div class="container" ref="featureContainer">
    <Progress
      v-if="!isInside"
      :active="active"
      :length="features.length"
      :displayAreaFromTop="displayAreaFromTop"
    />
    <!-- data-area -->
    <div v-for="(feature, i) in features" :key="feature.id">
      <div v-if="!isInside" class="target outside" :data-target="i">
        <div class="side-title">
          <img :src="features[active].sideTitleImg" alt />
        </div>
        <div class="outside-area">
          <div class="title-outside">{{ feature.titleOut }}</div>
          <p
            class="text-outside"
            v-for="(text, i) in feature.textOut"
            :key="`${feature.id}${i}`"
          >{{ text }}</p>
          <router-link :to="feature.url" style="text-decoration:none;" v-if="feature.titleOut">
            <span class="btn-arrow" @click="goToPage(feature)" v-if="feature.titleOut">
              <span :class="{ jump: !isInside }">{{ !isInside ? '￫' : '￩' }}</span>
            </span>
          </router-link>
        </div>
      </div>
      <div
        v-if="isInside"
        class="target inside"
        :ref="`target${i}`"
        :data-target="i"
        style="background:rgb(23,23,23);"
      >
        <div style="height:54.4vh" />
        <FeatureContent :active="i" :isHide="false" :opacity="0" />
      </div>
    </div>

    <!-- display-area -->
    <div class="display-area" style="opacity:1;" :style="displayAreaStyle">
      <!-- <img
        class="display-area-bg"
        v-if="features[active].img"
        :class="{ active: areaActive, inside: isInside }"
        :src="features[active].img.bg[deviceType === 'pc' ? 'web' : deviceType]"
        alt
      />-->
      <div
        class="display-area-bg"
        v-if="features[active].img"
        :class="{ active: areaActive, inside: isInside }"
        :style="{backgroundImage:`url(${features[active].img.bg[deviceType === 'pc' ? 'web' : deviceType]})`}"
      />
      <!-- display-area-outside -->
      <div class="side-title">
        <img
          class="side-title-img"
          :class="{ active: areaActive }"
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
            >{{ text }}</p>
          </template>
          <router-link
            :to="features[active].url"
            style="text-decoration:none"
            v-if="features[active].titleOut"
          >
            <span
              class="btn-arrow"
              :class="{ inside: isInside }"
              :style="{
                transform: isInside
                  ? `translate(-${arrowBaseDisplacement}%,calc( ${arrowBaseDisplacement}% + ${displacementInside *
                      100}vh))`
                  : 'translate(0, 0)'
              }"
              @click="goToPage(features[active])"
              v-if="features[active].titleOut"
            >
              <!-- transform: translate(-300%, 300%); -->
              <span :class="{ jump: !isInside }">{{ !isInside ? '￫' : '￩' }}</span>
            </span>
          </router-link>
        </div>
        <div class="display-inside" :class="{ active: isInside }">
          <template v-if="isInside">
            <FeatureContent :isHide="isHide" :active="active" @scrollToNext="scrollToNext" />
          </template>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import FeatureContent from './FeatureContent'
import Progress from '@/components/Progress.vue'
import { rwdMethods, sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'FeaturesPage',
  mixins: [rwdMethods, sendGaMethods],
  props: { active: { type: Number, default: 0 }, features: { type: Array } },
  components: {
    Progress,
    FeatureContent
  },
  data() {
    return {
      isInside: false,
      muted: false,
      // insideContent: {},
      // oldActive: 0,
      observer: {},
      contentInView: false,
      direction: '',
      areaActive: true,
      isHide: true,
      progressInside: 0,
      progressInsideIndex: null,
      displacementInside: 0,
      displayAreaFromTop: 0,
      nextTrigger: false
    }
  },
  methods: {
    goToPage(feature) {
      if (!this.isInside) {
        this.isInside = true
        setTimeout(() => {
          this.isHide = false
        }, 500)
        this.$emit('emitIsInside', true)
        // this.insideContent = { ...feature }

        this.constructObserver()
        window.addEventListener('scroll', this.countProgressInside, false)
        window.removeEventListener('scroll', this.countActiveByHeight, false)

        this.sendGA({
          category: 'related',
          action: 'click',
          label: `article_${this.features[this.active].titleOut}`
        })
      } else {
        this.isInside = false
        this.isHide = true
        this.$emit('emitIsInside', false)
        // this.insideContent = {}
        this.$router.back()
        this.displayAreaFromTop = 0

        this.destroyObserver()
        window.removeEventListener('scroll', this.countProgressInside, false)
        window.addEventListener('scroll', this.countActiveByHeight, false)

        this.sendGA({
          category: 'back',
          action: 'click',
          label: 'back'
        })
      }
    },
    countProgressInside() {
      this.$nextTick(() => {
        const { pageYOffset, innerHeight } = window
        const targetTop = this.$refs[`target${this.active}`][0].offsetTop
        const targetHeight = this.$refs[`target${this.active}`][0].offsetHeight
        this.progressInside =
          (pageYOffset - targetTop) / (targetHeight - innerHeight)

        // count the replacement of inside part
        if (this.progressInside < 0) {
          this.displacementInside =
            0 * (1 - innerHeight / targetHeight) * (targetHeight / innerHeight)
          window.scrollTo({
            top: this.$refs[`target${this.active}`][0].offsetTop
          })
        } else if (this.progressInside > 1) {
          this.displacementInside =
            1 * (1 - innerHeight / targetHeight) * (targetHeight / innerHeight)
        } else {
          this.displacementInside =
            this.progressInside *
            (1 - innerHeight / targetHeight) *
            (targetHeight / innerHeight)
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
        if (pageYOffset + innerHeight > containerTop + containerHeight) {
          window.scrollTo({ top: containerTop + containerHeight - innerHeight })
        }
      })
    },
    checkPath() {
      if (Object.keys(this.$route.params).length !== 0) {
        this.isInside = true
        setTimeout(() => {
          this.isHide = false
        }, 500)
        this.$emit('emitIsInside', true)

        const urlId = this.$route.params.id
        for (let i = 0; i < this.features.length; i += 1) {
          if (this.features[i].url === urlId) {
            this.$nextTick(() => {
              window.scrollTo({
                top: this.$refs[`target${i}`][0].offsetTop
              })
              this.displayAreaFromTop = 0
            })
            break
          }
        }

        this.constructObserver()
        window.addEventListener('scroll', this.countProgressInside, false)
        window.removeEventListener('scroll', this.countActiveByHeight, false)
      }
    },
    countActiveByHeight() {
      const { innerHeight, pageYOffset } = window
      const containerTop = this.$refs.featureContainer.offsetTop
      const containerHeight = this.$refs.featureContainer.offsetHeight

      if (pageYOffset < containerTop) {
        this.displayAreaFromTop = containerTop - pageYOffset
      } else if (pageYOffset + innerHeight > containerTop + containerHeight) {
        this.displayAreaFromTop = -(
          pageYOffset +
          innerHeight -
          (containerTop + containerHeight)
        )
      } else {
        this.displayAreaFromTop = 0

        const activeIndex = Math.round(
          (pageYOffset - containerTop) / innerHeight
        )
        if (activeIndex < this.features.length) {
          this.$emit('emitActive', activeIndex)
        }
      }
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
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            if (parseInt(entry.target.dataset.target) > this.active) {
              this.direction = 'down'
            } else if (parseInt(entry.target.dataset.target) < this.active) {
              this.direction = 'up'
            } else {
              this.direction = ''
            }
            if (this.direction !== 'up') {
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

                console.log(
                  `next_${action}_${
                    this.features[entry.target.dataset.target].titleOut
                  }`
                )
                this.sendGA({
                  category: 'next',
                  action: 'scroll',
                  label: `next_${action}_${
                    this.features[entry.target.dataset.target].titleOut
                  }`
                })
              }
            } else {
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
    }
    // handleReload(event) {
    //   alert('jump')
    //   // Cancel the event as stated by the standard.
    //   event.preventDefault()
    //   // Chrome requires returnValue to be set.
    //   event.returnValue = ''
    // }
  },
  computed: {
    displayAreaStyle() {
      let areaStyle = {
        top: `${this.displayAreaFromTop}px`,
        height: !this.isInside && '100vh',
        transform: `translateY(-${this.displacementInside * 100}vh)`
      }
      if (!this.isInside) {
        areaStyle = { ...areaStyle, overflow: 'hidden' }
      }

      return { ...areaStyle }
    },
    arrowBaseDisplacement() {
      const { innerWidth } = window

      if (innerWidth > 768) return 300
      else if (innerWidth < 375) return 100
      else if (innerWidth >= 375 && innerWidth < 576) return 150
      return 200
    }
  },
  watch: {
    active: function () {
      if (this.isInside) {
        this.areaActive = true
      } else {
        this.areaActive = false
        setTimeout(() => {
          this.areaActive = true
        }, 500)
      }

      if (this.isInside) {
        if (!this.features[this.active].url) {
          console.log('if:page not exist')
          this.$router.push({ path: '/' })
          this.$router.push({
            path: `/${this.features[this.active + 1].url}`
          })
          this.$refs[`target${this.active + 1}`][0].scrollIntoView()
        } else {
          // only down will be renewed
          this.$router.push({ path: '/' })
          this.$router.push({ path: `/${this.features[this.active].url}` })
        }
      }
    },
    isInside: function () {
      if (!this.isInside) {
        setTimeout(() => {
          this.displacementInside = 0
          window.scrollTo({ top: this.$refs.featureContainer.offsetTop })
        }, 0)
      }
    }
  },
  mounted() {
    this.countActiveByHeight()
    window.addEventListener('scroll', this.countActiveByHeight, false)
    window.addEventListener('popstate', this.handlePopState, false)
    this.checkPath()

    // window.addEventListener('beforeunload', function (event) {

    // })
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
<style lang="scss" scope>
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
  @media screen and (max-width: 413.98px) {
    max-width: 33px;
  }
  min-height: 100%;
  transform: translateY(100vh);
  transition: all 0.25s ease-in;
  &.active {
    transform: translateY(0);
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
  line-height: 1;
  color: #eeeeee;
  @media screen and (max-width: 1024.98px) {
    font-size: 28px;
  }
  @media screen and (max-width: 413.98px) {
    font-size: 25px;
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
  // transition: all 0.1s linear;
}
.display-area-bg {
  position: absolute;
  top: 0;
  right: 0;
  height: 100vh;
  width: 100vw;
  max-width: 100%;
  transition: all 0.25s ease-out;
  transform: translateX(100%);
  background-size: cover;
  background-position: 75% 25%;
  &.inside {
    height: 80vh;
    width: 80vw;
    max-width: 80%;
    // @media screen and (max-width: 1025px) {
    //   height: 80vw;
    // }
  }
  &.active {
    transform: translateX(0);
  }
}
.btn-arrow {
  text-decoration: none;
  display: flex;
  justify-content: center;
  font-size: 30px;
  line-height: 80%;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  padding: 10px;
  background-color: #000;
  border: 1px solid #fff;
  color: red;
  &:focus {
    outline-style: none;
  }
  transform: translate(0, 0);
  transition: all 0.25s ease-out;
  &.inside {
    transform: translate(-300%, 300%);
    transition: none;
  }
}
.display-content {
  transform: translateY(100vh);
  transition: all 0.25s ease-in;
  &.active {
    transform: translateY(0);
  }
  // &.no-img {
  // transform: translateY(-25vh);
  // }
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
    @media screen and (max-width: 768px) {
      padding-top: 0;
    }
  }
}
.display-inside {
  z-index: 12;
  position: relative;
  transform: translate(-25%, -25%);
  transition: all 0.25s ease-out;
  &.active {
    transform: translate(0, 0);
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
  // height: 100vh;
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
