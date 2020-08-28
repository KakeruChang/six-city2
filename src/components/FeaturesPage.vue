<template>
  <div class="container" ref="featureContainer">
    <Progress v-if="!isInside" :active="active" :length="features.length" />
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
        <div style="color:#fff;fontSize:50px;height:54.4vh">{{ i }}</div>
        <FeatureContent :active="i" />
      </div>
    </div>

    <!-- display-area -->
    <div class="display-area" style="opacity:0.5;" :style="{ height: !isInside && '100vh' }">
      <img
        class="display-area-bg"
        v-if="features[active].img"
        :class="{ active: areaActive, inside: isInside }"
        :src="features[active].img.bg[deviceType === 'pc' ? 'web' : deviceType]"
        alt
      />
      <!-- display-area-outside -->
      <div class="side-title">
        <img
          class="side-title-img"
          :class="{ active: areaActive }"
          :src="features[active].sideTitleImg"
          alt
        />
        <!-- <span
          class="side-title-text"
          :style="{ color: title.color }"
          v-for="title in features[active].sideTitle"
          :key="title.text"
        >{{ title.text }}</span>-->
      </div>
      <div class="display-content" :class="{ active: areaActive }">
        <div class="display-outside" :class="{inactive:isInside}">
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
              @click="goToPage(features[active])"
              v-if="features[active].titleOut"
            >
              <span :class="{ jump: !isInside }">{{ !isInside ? '￫' : '￩' }}</span>
            </span>
          </router-link>
        </div>
        <div class="display-inside" :class="{active:isInside}">
          <template v-if="isInside">
            <FeatureContent :active="active" />
          </template>
        </div>
      </div>

      <!-- <div class="outside-area">
        <div class="title-outside">{{ features[active].titleOut }}</div>
        <p
          class="text-outside"
          v-for="(text, i) in features[active].textOut"
          :key="`display${features[active].id}${i}`"
        >{{ text }}</p>
        <router-link
          :to="features[active].url"
          style="text-decoration:none;"
          v-if="features[active].titleOut"
        >
          <span
            class="btn-arrow"
            @click="goToPage(features[active])"
            v-if="features[active].titleOut"
          >
            <span :class="{ jump: !isInside }">
              {{
              !isInside ? '￫' : '￩'
              }}
            </span>
          </span>
        </router-link>
      </div>-->
    </div>
  </div>
</template>

<script>
import ArticleDetailv2 from './ArticleDetailv2'
import FeatureContent from './FeatureContent'
import Progress from '@/components/Progress.vue'
import { rwdMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'FeaturesPage',
  mixins: [rwdMethods],
  props: { active: { type: Number, default: 0 }, features: { type: Array } },
  components: {
    Progress,
    FeatureContent
    // ArticleDetailv2
  },
  data() {
    return {
      isInside: false,
      muted: false,
      insideContent: {},
      // oldActive: 0,
      observer: {},
      contentInView: false,
      direction: '',
      areaActive: true
    }
  },
  methods: {
    goToPage(feature) {
      if (!this.isInside) {
        this.isInside = true
        this.$emit('emitIsInside', true)
        this.insideContent = { ...feature }

        this.constructObserver()
        window.removeEventListener('scroll', this.countActiveByHeight, false)
      } else {
        this.isInside = false
        this.$emit('emitIsInside', false)
        this.insideContent = {}
        this.$router.back()

        this.destroyObserver()
        window.addEventListener('scroll', this.countActiveByHeight, false)
      }
    },
    checkPath() {
      if (Object.keys(this.$route.params).length !== 0) {
        this.isInside = true
        this.$emit('emitIsInside', true)

        this.constructObserver()
        window.removeEventListener('scroll', this.countActiveByHeight, false)
      }
    },
    countActiveByHeight() {
      const { innerHeight, pageYOffset } = window

      this.$emit('emitActive', Math.round(pageYOffset / innerHeight))
    },
    handlePopState(e) {
      if (this.isInside) {
        this.isInside = false
        this.$emit('emitIsInside', false)
        this.insideContent = {}

        this.destroyObserver()
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
            // console.log(parseInt(entry.target.dataset.target, 10))

            // set active
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
            } else {
              window.scrollTo({
                top: this.$refs[`target${this.active}`][0].offsetTop
              })
              // this.$emit(
              //   'emitActive',
              //   parseInt(entry.target.dataset.target, 10)
              // )
              // this.$emit(
              //   'emitActive',
              //   parseInt(entry.target.dataset.target, 10) + 1
              // )
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
    }
  },
  watch: {
    active: function () {
      this.areaActive = false
      setTimeout(() => {
        this.areaActive = true
      }, 500)

      if (this.isInside) {
        if (!this.features[this.active].url) {
          console.log('if:page not exist')
          this.$router.push({ path: '/' })
          this.$router.push({
            path: `/${this.features[this.active + 1].url}`
          })
          this.$refs[`target${this.active + 1}`][0].scrollIntoView()

          // if (this.direction === 'down') {
          //   console.log('direction:down')
          //   this.$router.push({ path: '/' })
          //   this.$router.push({
          //     path: `/${this.features[this.active + 1].url}`
          //   })
          //   this.$refs[`target${this.active + 1}`][0].scrollIntoView()
          // }
          // if (this.direction === 'up') {
          //   this.$router.push({ path: '/' })
          //   this.$router.push({
          //     path: `/${this.features[this.active - 1].url}`
          //   })
          //   this.$refs[`target${this.active - 1}`][0].scrollIntoView({
          //     block: 'end'
          //   })
          // }
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
          window.scrollTo({ top: 0 })
        }, 0)
      }
    }
  },
  mounted() {
    window.addEventListener('scroll', this.countActiveByHeight, false)
    window.addEventListener('popstate', this.handlePopState, false)

    this.checkPath()
  },
  destroyed() {
    window.removeEventListener('scroll', this.countActiveByHeight, false)
    window.addEventListener('popstate', this.handlePopState, false)
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
// .side-title-text {
//   display: inline-block;
//   opacity: 0.3;
//   font-family: SourceHanSerifTC-Heavy, source-han-serif-tc, sans-serif;
//   font-size: 90px;
//   font-weight: 900;
//   line-height: 1.22;
// }
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
  @media screen and (min-width: 1025px) {
    width: 400px;
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
  }
}
.display-area {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10;
  width: 100vw;
  max-width: 100%;
  background-color: rgb(23, 23, 23);
  display: flex;
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
  &.inside {
    height: 80vh;
    width: 80vw;
    max-width: 80%;
  }
  &.active {
    transform: translateX(0);
  }
}

.display-content {
  transform: translateY(100vh);
  transition: all 0.25s ease-in;
  &.active {
    transform: translateY(0);
  }
  z-index: 11;
  position: absolute;
  left: 0;
  // padding-left: 14.2%;
  width: 100%;
  top: 35%;
  @media screen and (max-width: 1024.98px) {
    top: 50%;
  }
  @media screen and (max-width: 413.98px) {
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

// video {
//   width: 100vw;
//   height: 100vh;
// }
</style>
