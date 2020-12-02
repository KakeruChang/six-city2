<template>
  <article class="fb-comment-block article">
    <div
      class="fb-comments"
      :data-href="href"
      data-numposts="5"
      data-width="100%"
      @click="clickHandler"
      data-order-by="reverse_time"
    />
  </article>
</template>

<script>
import { sendFbPixel } from '@/mixins/fbPixel'

export default {
  props: {
    href: {
      type: String,
      default: document.querySelector('meta[property="og:url"]').content
    }
  },
  name: 'FooterFbComment',
  methods: {
    clickHandler() {
      sendFbPixel('頁尾留言互動')
    }
  }
}
</script>

<style lang="scss" scoped>
.fb-comment-block {
  position: relative;
  margin: 104px auto 72px auto;
}
</style>
