<template>
  <div class="share-line share-button">
    <a
      :href="shareUrl"
      :target="target"
      rel="noopener"
      aria-label="share-line"
      title="share-line"
      @click="clickHandler"
    >
      <button aria-label="share" name="share-line">
        <i
          :class="{
            'icon-line-brands': true,
            'icon-theme-light': theme === 'light',
            'icon-theme-dark': theme === 'dark'
          }"
        />
      </button>
    </a>
  </div>
</template>

<script>
import Utils from '@/utils/udn-newmedia-utils'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import taipeiData from '../../../data/data-taipei'
import newTaipeiData from '../../../data/data-new-taipei'
import taoyuanData from '../../../data/data-taoyuan'
import tainanData from '../../../data/data-tainan'
import kaohsiungData from '../../../data/data-kaohsiung'
import taichungData from '../../../data/data-taichung'
import { sendFbPixel } from '@/mixins/fbPixel'

const isMobile = Utils.detectMob()
const isInApp = Utils.isFacebookApp(148) || Utils.isLineApp()

export default {
  name: 'ShareLine',
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
    metaMainTitle: { type: String },
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
      return null
    },
    shareUrl() {
      let sharedUrl
      let sharedText
      let sharedContent

      if (this.isInside) {
        sharedUrl = `${window.location.origin}/${this.rootCity}/${
          this.content[this.active].url
        }`
        sharedContent = this.content[this.active].meta
          ? this.content[this.active].meta.description
          : ''
        sharedText = this.content[this.active].meta
          ? this.content[this.active].meta.title
          : ''
      } else {
        sharedUrl = `${window.location.origin}/${this.rootCity}`
        sharedContent = this.metaMainDescription
        sharedText = this.metaMainTitle
      }

      // desktop
      if (!isMobile) {
        return `https://social-plugins.line.me/lineit/share?text=${encodeURIComponent(
          sharedText
        )}%0D%0A%0D%0A${encodeURIComponent(
          sharedContent
        )}&url=${encodeURIComponent(sharedUrl)}`
      }
      // mobile
      if (!isInApp) {
        return `https://line.naver.jp/R/msg/text/?${encodeURIComponent(
          sharedText
        )}%0D%0A%0D%0A${encodeURIComponent(
          sharedContent
        )}%0D%0A%0D%0A${encodeURIComponent(sharedUrl)}`
      }
      // mobile in-app webview
      return `https://line.naver.jp/R/msg/text/?${encodeURIComponent(
        sharedText
      )}%0D%0A%0D%0A${encodeURIComponent(
        sharedContent
      )}%0D%0A%0D%0A${encodeURIComponent(sharedUrl)}`
    },
    target() {
      if (!isMobile) return '_blank'
      return '_self'
    }
  },
  methods: {
    clickHandler() {
      this.sendGA(this.formatGA('HeaderShareLine'))
      sendFbPixel('山頭社群分享LINE')
    }
  }
}
</script>

<style lang="scss" scoped>
.share-line {
  i {
    font-size: 19px;
    font-family: Arial, 微軟正黑體, sans-serif;
    @include pad {
      font-size: 25px;
    }
    @include pc {
      font-size: 25px;
    }
  }
}
</style>
