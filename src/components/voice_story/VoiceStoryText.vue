<template>
  <article class="voice-story-text">
    <p class="enlarge.black-bg.white">
      <slot />
    </p>
  </article>
</template>

<script>
export default {
  name: 'VoiceStoryText'
}
</script>

<style lang="scss" scoped>
p.enlarge.white.black-bg {
  display: inline;
  background-color: #181818bb;
  color: #ffffff;
  br {
    display: none;
    @include pad {
      display: block;
    }
    @include pc {
      display: block;
    }
  }
}
</style>
