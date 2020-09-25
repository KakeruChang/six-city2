<template>
  <div class="voice-story-wave">
    <div
      class="voice-story-wave__bar"
      v-for="item in 20"
      :key="`wave-${item}`"
      :class="{
        'voice-story-wave__bar--default': !isPlay,
        'voice-story-wave__bar--play': isPlay,
        'voice-story-wave__bar--active': !isPlay || +progress >= +item
      }"
    />
  </div>
</template>

<script>
export default {
  name: 'VoiceStoryWave',
  props: {
    isPlay: {
      type: Boolean,
      default: false
    },
    progress: {
      type: Number,
      default: 0
    }
  }
}
</script>

<style lang="scss" scoped>
.voice-story-wave {
  width: 250px;
  height: 100px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  @include smob {
    width: 200px;
  }
}
.voice-story-wave__bar {
  width: 2px;
  margin-right: 1px;
  height: 90px;
  background-color: #818181;
  transition: height 0.8s;
  &.voice-story-wave__bar--default {
    animation: wave 0ms -800ms linear infinite alternate;
    &:nth-child(1) {
      height: 2px;
      animation-duration: 974ms;
    }
    &:nth-child(2) {
      height: 10px;
      animation-duration: 933ms;
    }
    &:nth-child(3) {
      height: 18px;
      animation-duration: 907ms;
    }
    &:nth-child(4) {
      height: 26px;
      animation-duration: 958ms;
    }
    &:nth-child(5) {
      height: 30px;
      animation-duration: 900ms;
    }
    &:nth-child(6) {
      height: 32px;
      animation-duration: 927ms;
    }
    &:nth-child(7) {
      height: 34px;
      animation-duration: 941ms;
    }
    &:nth-child(8) {
      height: 36px;
      animation-duration: 919ms;
    }
    &:nth-child(9) {
      height: 40px;
      animation-duration: 987ms;
    }
    &:nth-child(10) {
      height: 46px;
      animation-duration: 942ms;
    }
    &:nth-child(11) {
      height: 2px;
      animation-duration: 974ms;
    }
    &:nth-child(12) {
      height: 10px;
      animation-duration: 933ms;
    }
    &:nth-child(13) {
      height: 18px;
      animation-duration: 907ms;
    }
    &:nth-child(14) {
      height: 26px;
      animation-duration: 958ms;
    }
    &:nth-child(15) {
      height: 30px;
      animation-duration: 900ms;
    }
    &:nth-child(16) {
      height: 32px;
      animation-duration: 927ms;
    }
    &:nth-child(17) {
      height: 34px;
      animation-duration: 941ms;
    }
    &:nth-child(18) {
      height: 36px;
      animation-duration: 919ms;
    }
    &:nth-child(19) {
      height: 40px;
      animation-duration: 987ms;
    }
    &:nth-child(20) {
      height: 46px;
      animation-duration: 942ms;
    }
  }
  &.voice-story-wave__bar--play {
    animation: wave-play 0ms -800ms linear infinite alternate;
    &:nth-child(1) {
      height: 2px;
      animation-duration: 474ms;
    }
    &:nth-child(2) {
      height: 10px;
      animation-duration: 433ms;
    }
    &:nth-child(3) {
      height: 18px;
      animation-duration: 407ms;
    }
    &:nth-child(4) {
      height: 26px;
      animation-duration: 458ms;
    }
    &:nth-child(5) {
      height: 30px;
      animation-duration: 400ms;
    }
    &:nth-child(6) {
      height: 32px;
      animation-duration: 427ms;
    }
    &:nth-child(7) {
      height: 34px;
      animation-duration: 441ms;
    }
    &:nth-child(8) {
      height: 36px;
      animation-duration: 419ms;
    }
    &:nth-child(9) {
      height: 40px;
      animation-duration: 487ms;
    }
    &:nth-child(10) {
      height: 46px;
      animation-duration: 442ms;
    }
    &:nth-child(11) {
      height: 2px;
      animation-duration: 474ms;
    }
    &:nth-child(12) {
      height: 10px;
      animation-duration: 433ms;
    }
    &:nth-child(13) {
      height: 18px;
      animation-duration: 407ms;
    }
    &:nth-child(14) {
      height: 26px;
      animation-duration: 458ms;
    }
    &:nth-child(15) {
      height: 30px;
      animation-duration: 400ms;
    }
    &:nth-child(16) {
      height: 32px;
      animation-duration: 427ms;
    }
    &:nth-child(17) {
      height: 34px;
      animation-duration: 441ms;
    }
    &:nth-child(18) {
      height: 36px;
      animation-duration: 419ms;
    }
    &:nth-child(19) {
      height: 40px;
      animation-duration: 487ms;
    }
    &:nth-child(20) {
      height: 46px;
      animation-duration: 442ms;
    }
  }
  &.voice-story-wave__bar--active {
    background-color: #ffffff;
  }
}
@keyframes wave {
  0% {
    height: 8px;
  }
  80% {
    height: 8px;
  }
  100% {
    height: 24px;
  }
}
@keyframes wave-play {
  0% {
    height: 6px;
  }
  100% {
    height: 46px;
  }
}
</style>
