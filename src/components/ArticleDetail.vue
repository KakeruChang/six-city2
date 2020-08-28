<template>
  <div class="ArticleDetail">
    <h1>detail:{{ article.titleOut }}</h1>
  </div>
</template>

<script>
import articleContent from '../data'

export default {
  name: 'ArticleDetail',
  data() {
    return { articleAll: articleContent, article: {} }
  },
  mounted() {
    for (let i = 0; i < this.articleAll.length; i++) {
      if (this.articleAll[i].id === this.$route.params.id) {
        this.article = { ...this.articleAll[i] }
        console.log(`ArticleDetail:就是這個${i}`)
        break
      }
    }
  },
  updated() {
    console.log('update')
  }
}
</script>
<style lang="scss" scope></style>
