<template>
  <div class="share-proud">
    <picture class="proud-side-title">
      <source
        :srcset="require('../../assets/Taipei/SVG words/Taipei_proud_mob.svg')"
        media="(max-width: 767.8px)"
      />
      <img
        :src="require('../../assets/Taipei/SVG words/Taipei_proud.svg')"
        alt
      />
    </picture>
    <ArticleContainer backgroundColor="transparent">
      <div class="proud-title" v-if="isMob">
        <h2 style="margin:0">分享台北市讓你</h2>
        <h2>驕傲的地方</h2>
      </div>
      <h2 class="proud-title" v-else>分享台北市讓你驕傲的地方</h2>
      <div class="btn-wrapper">
        <button
          v-for="(meta, i) in metas"
          class="proud-btn"
          :class="{ active: active === i }"
          @click="changeMeta(i)"
          :key="meta.id"
        >
          {{ meta.text }}
        </button>
      </div>
      <img
        :src="metas[active].img"
        class="proud-img"
        :alt="metas[active].text"
      />
      <div class="link-wrapper">
        <a
          class="link-share link-lg"
          :href="shareUrl"
          target="_blank"
          @click="shareImg"
        >
          <span>
            <i class="icon-facebook-f-brands" />
            分享圖片
          </span>
        </a>
        <router-link class="link-next link-lg" to="./New-Taipei" target="_blank"
          ><span @click="goToNext">下一篇：新北市</span>
        </router-link>
      </div>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import { sendFbPixel } from '@/mixins/fbPixel'

export default {
  name: 'ShareTaipeiProud',
  mixins: [sendGaMethods],
  components: { ArticleContainer },
  data() {
    return {
      metas: [
        {
          text: '獨立書店',
          url: '/sharing/independent-bookstore',
          id: 'taipei-meta-1',
          img: require('../../assets/Taipei/share/Taipei_sharing_independent_bookstore.jpg')
        },
        {
          text: '同志文化',
          url: '/sharing/LGBT-culture',
          id: 'taipei-meta-2',
          img: require('../../assets/Taipei/share/Taipei_sharing_LGBT_culture.jpg')
        },
        {
          text: '國際化',
          url: '/sharing/globalization',
          id: 'taipei-meta-3',
          img: require('../../assets/Taipei/share/Taipei_sharing_globalization.jpg')
        },
        {
          text: '特色酒吧',
          url: '/sharing/bars',
          id: 'taipei-meta-4',
          img: require('../../assets/Taipei/share/Taipei_sharing_bars.jpg')
        },
        {
          text: '藝文風氣',
          url: '/sharing/art-and-cuture',
          id: 'taipei-meta-5',
          img: require('../../assets/Taipei/share/Taipei_sharing_art_and_cuture.jpg')
        },
        {
          text: '凱達格蘭大道',
          url: '/sharing/ketagalan-blvd',
          id: 'taipei-meta-6',
          img: require('../../assets/Taipei/share/Taipei_sharing_ketagalan_blvd.jpg')
        }
      ],
      active: 0
    }
  },
  methods: {
    changeMeta(i) {
      this.active = i
    },
    shareImg() {
      this.sendGA({
        category: 'share',
        action: 'click',
        label: `fb_${this.metas[this.active].text}`
      })
      sendFbPixel('頁尾社群臉書按讚')
    },
    goToNext() {
      this.sendGA({
        category: 'furtherreading',
        action: 'click',
        label: 'furtherreading_新北市'
      })
      sendFbPixel('閱讀下一頁')
    }
  },
  computed: {
    isMob() {
      const { innerWidth } = window
      if (innerWidth > 414) return false

      return true
    },
    shareUrl() {
      const link = window.location + this.metas[this.active].url

      // const url = encodeURIComponent(window.location)
      const url = encodeURIComponent(link)

      return (
        'https://www.facebook.com/dialog/share?app_id=1010324812347164&display=popup&href=' +
        url +
        '&redirect_uri=' +
        url
      )
    }
  }
}
</script>

<style lang="scss" scoped>
h2 {
  font-family: source-han-serif-tc, serif;
}
.share-proud {
  background-color: rgb(23, 23, 23);
  padding-bottom: 82px;
  position: relative;
}
.proud-side-title {
  @media screen and (min-width: 768px) {
    position: absolute;
    top: 49px;
    left: 0;
  }
  @media screen and (max-width: 767.8px) {
    & > img {
      display: block;
      margin: 0 auto;
    }
  }
  @media screen and(max-width: 576px) {
    & > img {
      max-width: 368px;
    }
  }
  @media screen and(max-width: 375px) {
    & > img {
      max-width: 290px;
    }
  }
}
.proud-title {
  font-family: sans-serif;
  font-size: 32px;
  font-weight: 600;
  line-height: 2;
  color: #eeeeee;
  text-align: center;
}
.btn-wrapper {
  width: 450px;
  margin: 3px auto 19px;
  @media screen and(max-width: 576px) {
    max-width: 300px;
  }
}
.proud-btn {
  @include clean-btn;
  width: 140px;
  height: 40px;
  border-radius: 3px;
  border: solid 1px #707070;
  margin: 5px;
  font-size: 17px;
  line-height: 2;
  text-align: center;
  color: #eeeeee;
  transition: all 0.5s linear;
  &:hover,
  &.active {
    background-color: #eeeeee;
    color: #171717;
  }
}
.proud-img {
  display: block;
  margin: 0 auto 20px;
  max-width: 700px;
  max-height: 365.8px;
  @media screen and(max-width: 1025px) {
    max-width: 550px;
    max-height: 287.4px;
  }
  @media screen and(max-width: 576px) {
    max-width: 368px;
    max-height: 192.3px;
  }
  @media screen and(max-width: 375px) {
    max-width: 290px;
    max-height: 150.8px;
  }
}
.link-wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.link-lg {
  text-decoration: none;
  margin: 10px 0;
  width: 440px;
  height: 72px;
  border-radius: 4px;
  display: flex;
  justify-content: center;
  align-items: center;
  @media screen and(max-width: 576px) {
    width: 287px;
  }
}
.link-share {
  background-color: #1337bf;
  & > span {
    color: #fff;
  }
}
.link-next {
  color: #000;
  background-color: #eeeeee;
}
</style>
