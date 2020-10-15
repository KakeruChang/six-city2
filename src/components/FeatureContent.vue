<template>
  <div class="detail-container" :style="{ opacity }">
    <ContentByCity :isHide="isHide" :active="active" />

    <template v-if="!isHide">
      <ArticleContainer>
        <NextPageIndicator
          :active="active"
          :nextTitle="determineNextTitle"
          :progressToNextPage="progressToNextPage"
          :content="features"
          :mainColor="mainColor"
          @scrollToNext="scrollToNext"
        />
      </ArticleContainer>
      <div class="safe-area" v-if="active !== features.length - 1" />
    </template>
  </div>
</template>

<script>
import ArticleContainer from '@/components/common/ui/ArticleContainer'
import NextPageIndicator from './NextPageIndicator'
import ContentByCity from './ContentByCity'

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
    },
    progressToNextPage: {
      type: Number
    },
    features: { type: Array },
    mainColor: { type: String }
  },
  components: {
    NextPageIndicator,
    ArticleContainer,
    ContentByCity
  },
  methods: {
    scrollToNext() {
      this.$emit('scrollToNext')
    }
  },
  computed: {
    determineNextTitle() {
      if (this.active === this.features.length - 1) return ''

      if (!this.features[this.active + 1].titleOut) {
        return this.features[this.active + 2].titleOut
      }
      return this.features[this.active + 1].titleOut
    }
  }
}
</script>
<style lang="scss" scoped>
.detail-container {
  width: 100%;
}
.safe-area {
  margin-bottom: 50vh;
}
</style>
