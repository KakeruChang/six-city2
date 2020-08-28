<template>
  <section class="article-container" :style="{
      backgroundColor
    }">
    <article class="article" :style="{ color: textColor }">
      <slot />
    </article>
  </section>
</template>

<script>
export default {
  name: 'ArticleContainer',
  props: {
    backgroundColor: {
      type: String,
      default: '#ffffff'
    },
    textColor: {
      type: String,
      default: 'initial'
    }
  }
}
</script>

<style lang="scss" scoped>
.article-container {
  position: relative;
  width: 100%;
}
</style>