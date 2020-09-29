<template>
  <div>
    <template v-if="city === 'Taoyuan'">
      <TaoyuanContent :isHide="isHide" :active="active" />
    </template>
    <template v-if="city === 'New-Taipei'">
      <NewTaipeiContent :isHide="isHide" :active="active" />
    </template>
    <template v-if="city === 'Taipei'">
      <TaipeiContent :isHide="isHide" :active="active" />
    </template>
  </div>
</template>

<script>
import TaoyuanContent from './Taoyuan/TaoyuanContent'
import NewTaipeiContent from './NewTaipei/NewTaipeiContent'
import TaipeiContent from './Taipei/TaipeiContent'

export default {
  name: 'ContentByCity',
  props: {
    active: {
      type: Number
    },
    isHide: {
      type: Boolean
    }
  },
  components: {
    TaoyuanContent,
    NewTaipeiContent,
    TaipeiContent
  },
  computed: {
    city() {
      if (this.$route.path.indexOf('Taoyuan') !== -1) {
        return 'Taoyuan'
      }
      if (this.$route.path.indexOf('New-Taipei') !== -1) {
        return 'New-Taipei'
      }
      return 'Taipei'
    }
  }
}
</script>
