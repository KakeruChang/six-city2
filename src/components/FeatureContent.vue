<template>
  <div class="detail-container" :style="{opacity}">
    <template v-if="active === 0">
      <ArticleDetail0 :isHide="isHide" />
    </template>
    <template v-if="active === 1">
      <ArticleDetail1 :isHide="isHide" />
    </template>
    <template v-if="active === 2">
      <ArticleDetail2 :isHide="isHide" />
    </template>
    <template v-if="active === 3">
      <ArticleDetail3 :isHide="isHide" />
    </template>
    <template v-if="active === 4">
      <ArticleDetail4 :isHide="isHide" />
    </template>
    <template v-if="active === 5">
      <ArticleDetail5 :isHide="isHide" />
    </template>
    <template v-if="active === 6">
      <ArticleDetail6 :isHide="isHide" />
    </template>
    <template v-if="active === 8">
      <ArticleDetail8 :isHide="isHide" />
    </template>
    <template v-if="active === 9">
      <ArticleDetail9 :isHide="isHide" />
    </template>

    <template v-if="!isHide">
      <ArticleContainer>
        <NextPageIndicator
          :active="active"
          :nextTitle="determineNextTitle"
          @scrollToNext="scrollToNext"
        />
      </ArticleContainer>
      <div class="safe-area" v-if="active !== content.length" />
    </template>
  </div>
</template>

<script>
import content from '../data'
import NextPageIndicator from './NextPageIndicator'
import ArticleContainer from './common/ui/ArticleContainer'
import ArticleDetail0 from './content/ArticleDetail0'
import ArticleDetail1 from './content/ArticleDetail1'
import ArticleDetail2 from './content/ArticleDetail2'
import ArticleDetail3 from './content/ArticleDetail3'
import ArticleDetail4 from './content/ArticleDetail4'
import ArticleDetail5 from './content/ArticleDetail5'
import ArticleDetail6 from './content/ArticleDetail6'
import ArticleDetail8 from './content/ArticleDetail8'
import ArticleDetail9 from './content/ArticleDetail9'

export default {
  name: 'FeatureContent',
  props: {
    active: {
      type: Number
    },
    isHide: {
      type: Boolean
    },
    opacity: {
      type: Number,
      default: 1
    }
  },
  data() {
    return { content }
  },
  components: {
    NextPageIndicator,
    ArticleContainer,
    ArticleDetail0,
    ArticleDetail1,
    ArticleDetail2,
    ArticleDetail3,
    ArticleDetail4,
    ArticleDetail5,
    ArticleDetail6,
    ArticleDetail8,
    ArticleDetail9
  },
  methods: {
    scrollToNext() {
      this.$emit('scrollToNext')
    }
  },
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
.safe-area {
  margin-bottom: 100vh;
}
</style>
