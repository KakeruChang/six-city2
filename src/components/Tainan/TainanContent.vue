<template>
  <div>
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
    <template v-if="active === 6">
      <ArticleDetail6 :isHide="isHide" />
    </template>
  </div>
</template>

<script>
import ArticleDetail0 from './content/ArticleDetail0'
import ArticleDetail1 from './content/ArticleDetail1'
import ArticleDetail2 from './content/ArticleDetail2'
import ArticleDetail3 from './content/ArticleDetail3'
import ArticleDetail4 from './content/ArticleDetail4'
import ArticleDetail6 from './content/ArticleDetail6'

export default {
  name: 'TainanContent',
  props: {
    active: {
      type: Number
    },
    isHide: {
      type: Boolean
    }
  },
  components: {
    ArticleDetail0,
    ArticleDetail1,
    ArticleDetail2,
    ArticleDetail3,
    ArticleDetail4,
    ArticleDetail6
  }
}
</script>
