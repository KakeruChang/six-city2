<template>
  <article class="footer-share">
    <div class="footer-share__share-fb" @click="clickHandler('fb')">
      <div
        class="fb-like"
        :data-href="href"
        data-layout="button_count"
        data-action="like"
        data-size="small"
        data-show-faces="true"
        data-share="true"
      />
    </div>
    <div class="footer-share__share-line" @click="clickHandler('line')">
      <a
        :href="shareLineUrl"
        :target="target"
        rel="noopener"
        aria-label="share-line"
        name="share-line"
      >
        <img
          class="comment_line_image"
          :src="btnLINEImg"
          width="84"
          height="20"
          alt="LINE分享給朋友"
        />
        <!-- <img
          class="comment_line_image"
          src="//media.line.me/img/button/zh-hant/84x20.png"
          width="84"
          height="20"
          alt="LINE分享給朋友"
        />-->
      </a>
    </div>
    <div class="footer-share__share-twitter" @click="clickHandler('twitter')">
      <a
        :href="shareTwitterUrl"
        class="twitter-share-button"
        data-show-count="false"
        aria-label="share-twiier"
        name="share-twiier"
        target="_blank"
      >
        <img
          :src="btnTWITTERImg"
          width="60"
          height="20"
          alt="TWITTER分享給朋友"
        />
        <!-- Tweet -->
      </a>
    </div>
  </article>
</template>

<script>
import Utils from '@/utils/udn-newmedia-utils'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import btnLINEImg from '@/assets/img/button/btn_LINE.svg'
import btnTWITTERImg from '@/assets/img/button/btn_TWITTER.png'
import { sendFbPixel } from '@/mixins/fbPixel'

const isMobile = Utils.detectMob()
const isInApp = Utils.isFacebookApp(148) || Utils.isLineApp()

export default {
  name: 'FooterShare',
  mixins: [sendGaMethods],
  props: {
    href: {
      type: String,
      default: document.querySelector('meta[property="og:url"]').content
    }
  },
  data() {
    return { btnLINEImg, btnTWITTERImg }
  },
  computed: {
    shareTwitterUrl() {
      return `https://twitter.com/intent/tweet?text=${encodeURIComponent(
        document.querySelector('meta[property="og:description"]').content
      )}%0D%0A%0D%0A`
    },
    shareLineUrl() {
      const sharedText = document.querySelector('title').innerHTML
      const shareContent = document.querySelector(
        'meta[property="og:description"]'
      ).content
      // desktop
      if (!isMobile) {
        return `https://social-plugins.line.me/lineit/share?text=${encodeURIComponent(
          sharedText
        )}%0D%0A%0D%0A${encodeURIComponent(
          shareContent
        )}&url=${encodeURIComponent(this.href)}`
      }
      // mobile
      if (!isInApp) {
        return `https://line.naver.jp/R/msg/text/?${encodeURIComponent(
          sharedText
        )}%0D%0A%0D%0A${encodeURIComponent(
          shareContent
        )}%0D%0A%0D%0A${encodeURIComponent(this.href)}`
      }
      // mobile in-app webview
      return `https://line.naver.jp/R/msg/text/?${encodeURIComponent(
        sharedText
      )}%0D%0A%0D%0A${encodeURIComponent(
        shareContent
      )}%0D%0A%0D%0A${encodeURIComponent(this.href)}`
    },
    target() {
      if (!this.isMobile) return '_blank'
      return '_self'
    }
  },
  methods: {
    clickHandler(type) {
      switch (type) {
        case 'line':
          sendFbPixel('頁尾社群分享LINE')
          break
        case 'twitter':
          sendFbPixel('頁尾社群分享推特')
          break
        case 'fb':
          sendFbPixel('頁尾社群分享臉書')
          break
        default:
          break
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.footer-share {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  padding-bottom: 104px;
}
.footer-share__share-fb {
  margin-right: 8px;
}
.footer-share__share-line {
  a {
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
}
.footer-share__share-twitter {
  display: flex;
  justify-content: center;
  align-items: flex-end;
  margin-left: 8px;
  a {
    display: flex;
    justify-content: center;
    align-items: flex-end;
  }
}
</style>
