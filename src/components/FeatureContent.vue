<template>
  <div class="detail-container">
    <template v-if="active === 0">
      <ArticleDetail0 :isHide="isHide" />
    </template>
    <template v-if="!isHide">
      <ArticleContainer>
        <NextPageIndicator :active="active" :nextTitle="determineNextTitle" />
      </ArticleContainer>
    </template>
  </div>
</template>

<script>
import content from '../data'
import NextPageIndicator from './NextPageIndicator'
import ArticleContainer from './common/ui/ArticleContainer'
import ArticleDetail0 from './content/ArticleDetail0'

export default {
  name: 'FeatureContent',
  props: {
    active: {
      type: Number
    },
    isHide: {
      type: Boolean
    }
  },
  data() {
    return { content }
  },
  components: { NextPageIndicator, ArticleContainer, ArticleDetail0 },
  computed: {
    determineNextTitle() {
      if (this.active === this.content.length - 1) return ''

      if (!this.content[this.active + 1].titleOut) {
        return this.content[this.active + 2].titleOut
      }
      return this.content[this.active + 1].titleOut
    }
  }
}
</script>
<style lang="scss" scoped>
.detail-container {
  width: 100%;
}
</style>
