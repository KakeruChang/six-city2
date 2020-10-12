<template>
  <div>
    <div class="link-wrapper" v-for="link in links" :key="link.id">
      <a
        class="link"
        :class="{ 'active-link': activeCity === link.mark }"
        :href="activeCity === link.mark ? 'javascript:void(0)' : link.url"
        :target="activeCity !== link.mark && '_blank'"
        >{{ link.text }}</a
      >
    </div>
  </div>
</template>

<script>
export default {
  name: 'HeaderLinks',
  data() {
    return {
      links: [
        {
          url: './Taipei',
          mark: 'Taipei',
          text: '台北',
          id: 'HeaderLink-Taipei'
        },
        {
          url: './New-Taipei',
          mark: 'New-Taipei',
          text: '新北',
          id: 'HeaderLink-New-Taipei'
        },
        {
          url: './Taoyuan',
          mark: 'Taoyuan',
          text: '桃園',
          id: 'HeaderLink-Taoyuan'
        }
      ]
    }
  },
  computed: {
    activeCity() {
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
<style lang="scss" scoped>
.link-wrapper {
  display: flex;
  justify-content: center;
}
.link {
  color: #000;
  margin: 30px 0;
  font-size: 30px;
  text-decoration: none;
}
.active-link {
  cursor: auto;
  font-weight: 900;
  text-decoration: underline;
  font-size: 50px;
}
</style>
