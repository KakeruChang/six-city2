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
  </div>
</template>

<script>
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
  name: 'TaipeiContent',
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
    ArticleDetail5,
    ArticleDetail6,
    ArticleDetail8,
    ArticleDetail9
  }
}
</script>
