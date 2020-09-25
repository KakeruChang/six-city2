<template>
  <section class="article-container" :style="{
      backgroundColor
    }">
    <article class="article" :style="{ color: textColor,...cssProperty }">
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
    },
    cssProperty: {
      type: Object,
      default: () => {
        return {}
      }
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