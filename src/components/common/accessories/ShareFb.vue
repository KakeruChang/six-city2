<template>
  <div class="share-fb share-button">
    <a
      :href="shareUrl"
      target="_blank"
      rel="noopener"
      aria-label="share-fb"
      title="share-fb"
      @click="sendGA(formatGA('HeaderShareFb'))"
    >
      <button aria-label="share" name="share-fb">
        <i
          :class="{
            'icon-facebook-f-brands': true,
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
  name: 'ShareFb',
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
    isInside: { type: Boolean }
  },
  computed: {
    shareUrl() {
      let newShareUrl

      if (this.isInside) {
        newShareUrl = `${window.location.origin}/${this.rootCity}/${
          this.content[this.active].url
        }`
      } else {
        newShareUrl = `${window.location.origin}/${this.rootCity}`
      }

      const url = encodeURIComponent(newShareUrl)

      return (
        'https://www.facebook.com/dialog/share?app_id=1010324812347164&display=popup&href=' +
        url +
        '&redirect_uri=' +
        url
      )
    },
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
      // Taipei
      if (this.$route.path.indexOf('Taipei') !== -1) {
        return taipeiData
      }
      return null
    }
  }
}
</script>

<style lang="scss" scoped>
.share-fb {
  i {
    font-size: 17px;
    font-family: Arial, 微軟正黑體, sans-serif;
    @include pad {
      font-size: 23px;
    }
    @include pc {
      font-size: 23px;
    }
  }
}
</style>
