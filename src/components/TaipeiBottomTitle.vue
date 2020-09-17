<template>
  <ArticleContainer :cssProperty="{paddingBottom:0}">
    <h1>這20年來</h1>
    <h1>
      <span style="color: #ff2300">台北</span> 還有哪些變與不變？
    </h1>
  </ArticleContainer>
</template>

<script>
import ArticleContainer from './common/ui/ArticleContainer'

export default {
  name: 'TaipeiBottomTitle',
  components: { ArticleContainer }
}
</script>

<style lang="scss" scoped>
h1 {
  font-family: source-han-serif-tc, serif;
  font-size: 60px;
  font-weight: 900;
  line-height: 1.83;
  color: #afafaf;
  margin: 0 !important;
}
</style>