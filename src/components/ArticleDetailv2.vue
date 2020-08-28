<template>
  <div class="article-detail" ref="articleDetail">
    <h1>detail:{{ article.titleOut }}</h1>
  </div>
</template>

<script>
import articleContent from '../data'

export default {
  name: 'ArticleDetailv2',
  props: { active: { type: Number, default: 0 } },
  data() {
    return { articleAll: articleContent, article: {} }
  },
  mounted() {
    this.article = { ...this.articleAll[this.active] }
  },
  watch: {
    active: function () {
      this.article = { ...this.articleAll[this.active] }
    }
  }
}
</script>
<style lang="scss" scope>
.article-detail {
  // height: 200vh;
}
</style>
