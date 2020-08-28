<template>
  <div class="detail-container">
    <template v-if="active===0">
      <ArticleDetail0 />
    </template>
  </div>
</template>

<script>
import ArticleDetail0 from './content/ArticleDetail0'

export default {
  name: 'FeatureContent',
  props: {
    active: {
      type: Number
    }
  },
  components: { ArticleDetail0 }
}
</script>
<style lang="scss" scoped>
.detail-container {
  width: 100%;
}
</style>
