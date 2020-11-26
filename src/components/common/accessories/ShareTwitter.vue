<template>
  <div class="share-twitter share-button">
    <a
      :href="shareUrl"
      target="_blank"
      rel="noopener"
      aria-label="share-twitter"
      name="share-twitter"
      @click="sendGA(formatGA('HeaderShareTwitter'))"
    >
      <button aria-label="share" name="share-twitter">
        <i
          :class="{
            'icon-twitter-brands': true,
            'icon-theme-light': theme === 'light',
            'icon-theme-dark': theme === 'dark'
          }"
        />
      </button>
    </a>
  </div>
</template>

<script>
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import taipeiData from '../../../data/data-taipei'
import newTaipeiData from '../../../data/data-new-taipei'
import taoyuanData from '../../../data/data-taoyuan'
import tainanData from '../../../data/data-tainan'
import kaohsiungData from '../../../data/data-kaohsiung'
import taichungData from '../../../data/data-taichung'

export default {
  name: 'ShareTwitter',
  mixins: [sendGaMethods],
  props: {
    href: {
      type: String,
      default: document.querySelector('meta[property="og:url"]').content
    },
    theme: {
      type: String,
      default: 'light'
    },
    active: { type: Number },
    rootCity: { type: String },
    isInside: { type: Boolean },
    metaMainDescription: { type: String }
  },
  computed: {
    content() {
      if (this.$route.path.indexOf('Taoyuan') !== -1) {
        return taoyuanData
      }
      if (this.$route.path.indexOf('New-Taipei') !== -1) {
        return newTaipeiData
      }
      if (this.$route.path.indexOf('Tainan') !== -1) {
        return tainanData
      }
      if (this.$route.path.indexOf('Kaohsiung') !== -1) {
        return kaohsiungData
      }
      if (this.$route.path.indexOf('Taichung') !== -1) {
        return taichungData
      }
      if (this.$route.path.indexOf('Taipei') !== -1) {
        return taipeiData
      }
      // Taipei
      return null
    },
    shareUrl() {
      let sharedUrl
      let shareContent

      if (this.isInside) {
        sharedUrl = `${window.location.origin}/${this.rootCity}/${
          this.content[this.active].url
        }`
        shareContent = this.content[this.active].meta
          ? this.content[this.active].meta.description
          : ''
      } else {
        sharedUrl = `${window.location.origin}/${this.rootCity}`
        shareContent = this.metaMainDescription
      }

      return `https://twitter.com/intent/tweet?text=${encodeURIComponent(
        shareContent
      )}%0D%0A%0D%0A${encodeURIComponent(sharedUrl)}`
    }
  }
}
</script>

<style lang="scss" scoped>
.share-twitter {
  i {
    font-size: 18px;
    font-family: Arial, 微軟正黑體, sans-serif;
    @include pad {
      font-size: 22px;
    }
    @include pc {
      font-size: 22px;
    }
  }
}
</style>
