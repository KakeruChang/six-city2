<template>
  <router-view />
</template>

<script>
export default {
  name: 'App',
  methods: {
    checkIsVisible() {
      if (!this.$store.state.checkIdentyTrigger) {
        this.$store.dispatch('checkIdentity')
      }
    }
  },
  mounted() {
    window.scrollTo(0, 0)
    this.checkIsVisible()
  }
}
</script>
<style lang="scss">
::-webkit-scrollbar {
  display: none;
}
.header-bar__nav__container_dark {
  background-color: rgb(23, 23, 23) !important;
}
.header-bar-logo-dark {
  background-color: rgb(23, 23, 23) !important;
}
.udn-logo.dark {
  background-color: rgb(23, 23, 23) !important;
}
</style>
