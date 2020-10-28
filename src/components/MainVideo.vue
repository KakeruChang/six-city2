<template>
  <div class="video-wrapper">
    <div class="video-text" :class="{ hide: titleIsHide }">
      <div class="city" :style="{ color: mainColor }">
        {{ cityName[0] }}
      </div>
      <div class="description">
        <span>
          {{ description }}
          <span class="arrow-wrapper">
            <NmdArrow />
          </span>
        </span>
      </div>
      <div class="city" :style="{ color: mainColor }">
        {{ cityName[1] }}
      </div>
    </div>
    <div class="video">
      <video
        @timeupdate="handlePlaying"
        id="main-video"
        ref="mainVideo"
        preload
        loop
        autoplay
        muted
        playsinline
      >
        <source :src="videoSource" type="video/mp4" />
      </video>
    </div>
  </div>
</template>

<script>
import { rwdMethods, sendGaMethods } from '@/mixins/masterBuilder.js'
import NmdArrow from '../components/common/accessories/NmdArrow'

export default {
  name: 'MainVideo',
  components: { NmdArrow },
  props: {
    city: {
      type: String
    },
    description: {
      type: String
    },
    videoPC: {
      type: String
    },
    videoMob: {
      type: String
    },
    mainColor: {
      type: String
    }
  },
  mixins: [rwdMethods, sendGaMethods],
  computed: {
    cityName() {
      const result = []
      for (let i = 0; i < this.city.length; i += 1) {
        result.push(this.city[i])
      }
      return result
    },
    player() {
      return this.$refs.mainVideo
    },
    videoSource() {
      const { innerWidth } = window
      if (this.videoMob && innerWidth < 768) {
        return this.videoMob
      }
      return this.videoPC
    }
  },
  data() {
    return {
      titleIsHide: false,
      startingTime: 0,
      currentIndex: 0,
      timeTrigger: false,
      stopGATrigger: false,
      isPaused: false
    }
  },
  methods: {
    pauseVideo() {
      this.isPaused = true
      this.player.pause()
    },
    continueVideo() {
      this.isPaused = false
      this.player.play()
    },
    handleScroll() {
      const { pageYOffset } = window

      if (pageYOffset && !this.titleIsHide) {
        this.titleIsHide = true
      }
      if (!pageYOffset && this.titleIsHide) {
        this.titleIsHide = false
      }
    },
    handlePlaying() {
      if (!this.stopGATrigger && !this.isPaused) {
        const baseNumber = 3
        const videoLength = 30
        const target = Math.floor(this.player.currentTime / baseNumber)

        if (target !== this.currentIndex) {
          const result = target !== 0 ? target * baseNumber : videoLength

          this.sendGA({
            category: 'video',
            action: 'play',
            label: `觀看${result}秒`
          })
          this.currentIndex = target

          if (result === videoLength) {
            this.stopGATrigger = true
          }
        }
      }
    },
    intersectionObserver() {
      const options = {
        root: null,
        rootMargin: '0px',
        threshold: [0]
      }

      const callback = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            this.continueVideo()
          } else {
            this.pauseVideo()
          }
        })
      }

      const observer = new IntersectionObserver(callback, options)
      return observer
    }
  },

  mounted() {
    window.addEventListener('scroll', this.handleScroll, false)

    this.intersectionObserver().observe(this.$el)
  },
  destroyed() {
    window.removeEventListener('scroll', this.handleScroll, false)
  }
}
</script>
<style lang="scss" scoped>
.video-wrapper {
  background-color: rgb(23, 23, 23);
  height: calc(100vh + 372px);
  position: relative;
  @media screen and (max-width: 768px) {
    height: calc(100vh + 244px);
  }
  @media screen and (max-width: 413.98px) {
    height: calc(100vh + 195px);
  }
}
.video-text {
  position: relative;
  z-index: 1;
  display: flex;
  justify-content: space-around;
  transition: all 0.5s linear;
  opacity: 1;
  transform: translateY(0);
  &.hide {
    opacity: 0;
    transform: translateY(-10%);
  }
  .city {
    width: 512px;
    // height: 662px;
    font-family: source-han-serif-tc, serif;
    font-size: 520px;
    font-weight: 900;
    line-height: 1.15;
    @media screen and (max-width: 1150px) {
      margin-top: 50px;
      width: 371px;
      font-size: 380px;
    }
    @media screen and (max-width: 800px) {
      // margin-top: 50px;
      width: 300px;
      font-size: 300px;
    }
    @media screen and (max-width: 650px) {
      width: 188px;
      font-size: 188px;
    }
    @media screen and (max-width: 413.98px) {
      width: 142px;
      font-size: 142px;
    }
  }
  .description {
    display: flex;
    // align-items: center;
    & > span {
      padding-top: 50px;
      width: 45px;
      font-family: source-han-serif-tc, serif;
      font-size: 40px;
      font-weight: bold;
      line-height: 1.13;
      color: #eeeeee;
      text-align: center;
      @media screen and (max-width: 650px) {
        padding-top: 0;
        width: 35px;
        font-size: 32px;
      }
    }
    @media screen and (max-width: 1150px) {
      margin-top: 65px;
    }
    // @media screen and (max-width: 800px) {
    //   margin-top: 50px;
    // }
  }
}
.arrow-wrapper {
  width: 100%;
  margin-top: 100px;
  display: flex;
  justify-content: center;
}
.video {
  z-index: 0;
  position: absolute;
  bottom: 0;
  width: 100vw;
  height: 100vh;
  video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}
</style>
