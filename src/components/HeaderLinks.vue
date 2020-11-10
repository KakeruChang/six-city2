<template>
  <div>
    <div class="link-wrapper" v-for="link in links" :key="link.id">
      <a
        class="link theme-light"
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
        },
        {
          url: './Taichung',
          mark: 'Taichung',
          text: '台中',
          id: 'HeaderLink-Taichung'
        },
        {
          url: './Tainan',
          mark: 'Tainan',
          text: '台南',
          id: 'HeaderLink-Tainan'
        },
        {
          url: './Kaohsiung',
          mark: 'Kaohsiung',
          text: '高雄',
          id: 'HeaderLink-Kaohsiung'
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
      if (this.$route.path.indexOf('Tainan') !== -1) {
        return 'Tainan'
      }
      if (this.$route.path.indexOf('Kaohsiung') !== -1) {
        return 'Kaohsiung'
      }
      if (this.$route.path.indexOf('Taichung') !== -1) {
        return 'Taichung'
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
  margin: 15px 0;
  font-size: 20px;
  line-height: 1.82;
  @media screen and (max-width: 374.99px) {
    font-size: 18px;
  }
  @media screen and (min-width: 1025px) {
    font-size: 24px;
    line-height: 1.52;
  }
  text-decoration: none;
  font-weight: 400;
  opacity: 0.7;
}
.active-link {
  cursor: auto;
  font-weight: 500;
  text-decoration: underline;
  opacity: 1;
}
.theme-light {
  color: #333333;
  &:hover {
    color: #000;
  }
}
.theme-dark {
  color: #eeeeee;
  &:hover {
    color: #fff;
  }
}
</style>
<style lang="scss">
.header-menu-simplified .header-menu__content {
  justify-content: flex-start !important;
  align-items: center !important;
}
</style>
