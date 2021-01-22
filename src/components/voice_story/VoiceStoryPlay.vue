<template>
  <div class="voice-story-play" ref="VoiceStoryPlay">
    <button
      class="button voice-story-play__play-button"
      aria-label="play-button"
      name="play-button"
      @click="handleButtonClick"
    >
      <img
        class="voice-story-play__play-button__icon"
        :class="{ light: mode === 'light' }"
        v-if="isPlay"
        :src="imgStop"
        alt
      />
      <img
        class="voice-story-play__play-button__icon"
        :class="{ light: mode === 'light' }"
        v-else
        :src="imgPlay"
        alt
      />
    </button>
    <VoiceStoryWave :isPlay="isPlay" :progress="soundProgress" :mode="mode" />
  </div>
</template>

<script>
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import VoiceStoryWave from './VoiceStoryWave.vue'
import { sendFbPixel } from '@/mixins/fbPixel'

export default {
  name: 'VoiceStoryPlay',
  mixins: [sendGaMethods],
  components: {
    VoiceStoryWave
  },
  props: {
    voiceIndex: {
      type: Number
    },
    voiceSrc: {
      type: String
    },
    shouldSoundStop: {
      type: Boolean,
      default: false
    },
    titleGA: {
      type: String,
      default: ''
    },
    imgPlay: {
      type: String
    },
    imgStop: {
      type: String
    },
    mode: {
      type: String,
      default: 'dark'
    }
  },
  data() {
    return {
      isPlay: false,
      soundProgress: 0,
      stopGATrigger: false,
      currentIndex: 0
    }
  },
  watch: {
    shouldSoundStop: {
      handler(value) {
        if (value) {
          this.isPlay = false
          this.theSound.pause()
          this.theSound.currentTime = 0
        }
      }
    }
  },
  methods: {
    handleButtonClick() {
      this.isPlay = !this.isPlay
      if (this.isPlay) this.theSound.play()
      else this.theSound.pause()
      this.handleSendClickingGA()
    },
    handleSendClickingGA() {
      if (this.isPlay) {
        this.sendGA({
          category: 'sound',
          action: 'click',
          label: `sound_click_${this.titleGA}`
        })

        sendFbPixel('聲音播放')
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
          if (!entry.isIntersecting) {
            if (this.isPlay) {
              this.theSound.pause()
              this.isPlay = false
            }
          }
        })
      }

      const observer = new IntersectionObserver(callback, options)
      return observer
    }
  },
  mounted() {
    this.theSound = new Audio(this.voiceSrc)
    this.theSound.ontimeupdate = e => {
      // send GA
      if (!this.stopGATrigger && this.isPlay) {
        const baseNumber = 3
        const target = Math.floor(e.target.currentTime / baseNumber)

        if (target !== this.currentIndex) {
          const result = target !== 0 ? target * baseNumber : e.target.duration

          this.sendGA({
            category: 'sound',
            action: 'play',
            label: `${this.titleGA}${result}秒`
          })
          this.currentIndex = target

          if (result === e.target.duration) {
            this.stopGATrigger = true
          }
        }
      }

      // update sound progress
      this.soundProgress =
        ((((e.target.currentTime / e.target.duration) * 100) / 5) | 0) + 1
      // reset
      if (this.soundProgress > 20) {
        this.isPlay = false
        this.soundProgress = 0
      }
    }

    this.intersectionObserver().observe(this.$refs['VoiceStoryPlay'])
  }
}
</script>

<style lang="scss" scoped>
.voice-story-play {
  position: relative;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  button.voice-story-play__play-button {
    height: 56px;
    width: 56px;
    margin-right: 16px;
    cursor: pointer;
    @include pad {
      height: 67px;
      width: 67px;
    }
    @include pc {
      height: 67px;
      width: 67px;
    }
    @include clean-btn;
    img.voice-story-play__play-button__icon {
      width: 100%;
      height: 100%;
      background-color: rgb(23, 23, 23);
      &.light {
        background-color: #ffffff;
      }
    }
  }
}
</style>
