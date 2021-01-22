<template>
  <div class="share-proud">
    <picture class="proud-side-title">
      <source
        :srcset="
          require('../../assets/New-Taipei/SVG words/New_Taipei_proud_mob.svg')
        "
        media="(max-width: 767.8px)"
      />
      <img
        :src="require('../../assets/New-Taipei/SVG words/New_Taipei_proud.svg')"
        alt
      />
    </picture>
    <ArticleContainer backgroundColor="transparent">
      <div class="proud-title" v-if="isMob">
        <h2 style="margin:0">分享新北市讓你</h2>
        <h2>驕傲的地方</h2>
      </div>
      <h2 class="proud-title" v-else>分享新北市讓你驕傲的地方</h2>
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
        <router-link class="link-next link-lg" to="./Taoyuan" target="_blank"
          ><span @click="goToNext">下一篇：桃園市</span>
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
  name: 'ShareNewTaipeiProud',
  mixins: [sendGaMethods],
  components: { ArticleContainer },
  data() {
    return {
      metas: [
        {
          text: '老城市面貌',
          url: '/sharing/old-city',
          id: 'new-taipei-meta-1',
          img: require('../../assets/New-Taipei/share/New_Taipei_sharing_old_city.jpg')
        },
        {
          text: '在地文化',
          url: '/sharing/local-culture',
          id: 'new-taipei-meta-2',
          img: require('../../assets/New-Taipei/share/New_Taipei_sharing_local_culture.jpg')
        },
        {
          text: '通勤日常',
          url: '/sharing/commuter',
          id: 'new-taipei-meta-3',
          img: require('../../assets/New-Taipei/share/New_Taipei_sharing_commuter.jpg')
        },
        {
          text: '返鄉小日子',
          url: '/sharing/young-farmer-returning',
          id: 'new-taipei-meta-4',
          img: require('../../assets/New-Taipei/share/New_Taipeisharing_young_farmer_returning.jpg')
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
        label: 'furtherreading_桃園市'
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
  width: 300px;
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
