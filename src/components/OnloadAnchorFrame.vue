<template>
  <div :ref="GAtitle">
    <slot />
  </div>
</template>

<script>
export default {
  name: 'OnloadAnchorFrame',
  props: { GAtitle: { type: String } },
  methods: {
    intersectionObserver() {
      const options = {
        root: null,
        rootMargin: '0px',
        threshold: [0]
      }

      const callback = (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // onload
            this.$emit('emitOnloadGA', this.GAtitle)
          }
        })
      }

      const observer = new IntersectionObserver(callback, options)
      return observer
    }
  },
  mounted() {
    // console.log(this.$refs)
    this.intersectionObserver().observe(this.$refs[this.GAtitle])
  }
}
</script>
