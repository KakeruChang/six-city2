<template>
  <ArticleContainer :cssProperty="{ paddingBottom: 0 }">
    <h1>這20年來</h1>
    <h1>
      <span :style="{ color: mainColor }">{{ city }}</span> 還有哪些變與不變？
    </h1>
  </ArticleContainer>
</template>

<script>
import ArticleContainer from '@/components/common/ui/ArticleContainer'

export default {
  name: 'CityBottomTitle',
  props: {
    city: { type: String },
    mainColor: { type: String }
  },
  components: { ArticleContainer }
}
</script>

<style lang="scss" scoped>
h1 {
  font-family: source-han-serif-tc, serif;
  font-size: 60px;
  font-weight: 900;
  line-height: 1.3;
  color: #afafaf;
  margin: 0 !important;
}
</style>
