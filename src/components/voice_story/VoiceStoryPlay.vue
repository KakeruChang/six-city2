<template>
  <div class="voice-story-play">
    <button
      class="button voice-story-play__play-button"
      aria-label="play-button"
      name="play-button"
      @click="handleButtonClick"
    >
      <img
        class="voice-story-play__play-button__icon"
        v-if="isPlay"
        src="../../assets/six-city/play.svg"
        alt=""
      />
      <img
        class="voice-story-play__play-button__icon"
        v-else
        src="../../assets/six-city/stop.svg"
        alt=""
      />
    </button>
    <VoiceStoryWave :isPlay="isPlay" :progress="soundProgress" />
  </div>
</template>

<script>
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import VoiceStoryWave from './VoiceStoryWave.vue'
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
    }
  },
  data() {
    return {
      isPlay: false,
      soundProgress: 0
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
      this.handleSendGA()
    },
    handleSendGA() {
      this.sendGA({
        category: 'sound',
        action: 'click',
        label: `${this.isPlay ? 'play' : 'pause'}${this.voiceIndex}`
      })
    }
  },
  mounted() {
    this.theSound = new Audio(this.voiceSrc)
    this.theSound.ontimeupdate = e => {
      // update sound progress
      this.soundProgress =
        ((((e.target.currentTime / e.target.duration) * 100) / 5) | 0) + 1
      // reset
      if (this.soundProgress > 20) {
        this.isPlay = false
        this.soundProgress = 0
      }
    }
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
    }
  }
}
</style>
