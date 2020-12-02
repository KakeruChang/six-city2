<template>
  <div :ref="GAtitle">
    <slot />
  </div>
</template>

<script>
import { sendFbPixel } from '@/mixins/fbPixel'

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
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            // onload
            this.$emit('emitOnloadGA', this.GAtitle)
            if (this.GAtitle.indexOf('臉書留言區' !== -1)) {
              sendFbPixel('閱讀進度100%')
            }
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
