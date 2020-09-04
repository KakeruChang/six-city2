<template>
  <section class="voice-story">
    <div
      class="voice-story__bg"
      :style="{ backgroundImage }"
      :class="{
        'voice-story__bg--fixed': shouldBgFixed,
        'voice-story__bg--bottom': shouldBgAtBottom,
        'voice-story__bg--hide': shouldBgHide
      }"
    ></div>
    <div class="voice-story__content article">
      <VoiceStoryPlay
        :voiceIndex="voiceIndex"
        :voiceSrc="voiceSrc"
        :shouldSoundStop="shouldSoundStop"
      />
      <VoiceStoryText />
      <slot />
    </div>
  </section>
</template>

<script>
import { autoResize_3, selectSrcMethod_3 } from '@/mixins/masterBuilder.js'
import VoiceStoryPlay from './VoiceStoryPlay.vue'
import VoiceStoryText from './VoiceStoryText.vue'
export default {
  name: 'VoiceStory',
  mixins: [autoResize_3, selectSrcMethod_3],
  components: {
    VoiceStoryPlay,
    VoiceStoryText
  },
  props: {
    voiceIndex: {
      type: Number
    },
    bgMob: {
      type: String
    },
    bgPad: {
      type: String
    },
    bgPc: {
      type: String
    },
    voiceSrc: {
      type: String
    }
  },
  data() {
    return {
      ticking: false,
      theSound: null,
      shouldBgFixed: false,
      shouldBgAtBottom: false,
      shouldBgHide: false,
      shouldSoundStop: false
    }
  },
  computed: {
    backgroundImage() {
      return `url(${this.selectSrc_3(this.bgMob, this.bgPad, this.bgPc)})`
    }
  },
  methods: {
    handleBgFixed() {
      const pos = this.$el.getBoundingClientRect()
      const top = pos.top
      const bottom = pos.bottom
      // handle bg fixed
      if (top < 0 && bottom > window.innerHeight) this.shouldBgFixed = true
      else this.shouldBgFixed = false
      // change bg position bottom to 0
      if (bottom <= window.innerHeight) this.shouldBgAtBottom = true
      else this.shouldBgAtBottom = false
      // if far from bg, hide it
      if (top > window.innerHeight * 1.5 || bottom < -window.innerHeight * 1.5)
        this.shouldBgHide = true
      else this.shouldBgHide = false
      // sound off
      if (top > window.innerHeight || bottom < 0) this.shouldSoundStop = true
      else this.shouldSoundStop = false
    },
    handleScroll() {
      if (!this.ticking) {
        window.requestAnimationFrame(() => {
          this.handleBgFixed()
          this.ticking = false
        })
      }
      this.ticking = true
    }
  },
  mounted() {
    document.addEventListener('scroll', this.handleScroll, true)
  },
  destroyed() {
    document.removeEventListener('scroll', this.handleScroll, true)
  }
}
</script>

<style lang="scss" scoped>
.voice-story {
  overflow: hidden;
  position: relative;
  width: 100%;
  margin-top: 96px;
}
.voice-story__bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
  background-size: cover;
  &.voice-story__bg--fixed {
    position: fixed;
  }
  &.voice-story__bg--bottom {
    top: auto;
    bottom: 0;
  }
  &.voice-story__bg--hide {
    opacity: 0;
  }
}
.voice-story__content {
  height: 200vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
}
</style>
