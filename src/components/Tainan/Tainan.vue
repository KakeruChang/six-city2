<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/Tainan`"
      :isInside="isInside"
      metaMainDescription="台南的城市面貌不斷由舊翻新，從老宅新生、第二美術館的落成等，這20年來，在傳統與創新並行的路上，如何賦予老城新的價值，是台南待解的問題。《聯合報》團隊從各種角度看台南，希望帶領讀者更清楚看見這座城市的脈動。"
      metaMainTitle="台南市：走出傳統 台南混血新美學 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 台南 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="台南"
        :description="['走出傳統', '台南混血新美學']"
        :mainColor="mainColor"
        videoPC="https://p3.udn.com.tw/cities/Tainan/video/Tainan_video_web.mp4"
        videoMob="https://p3.udn.com.tw/cities/Tainan/video/Tainan_video_mob.mp4"
      />
      <TainanData :mainColor="mainColor" />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/Tainan/arrow_Tainan.svg')"
      rootUrl="/Tainan"
    />
    <transition name="fade">
      <PageFooterV1 v-if="!isInside">
        <OnloadAnchorFrame
          GAtitle="page read: 台南 我台南我驕傲"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <ShareTainanProud />
        </OnloadAnchorFrame>
        <SixCitiesEditor
          producer="許瑋琳、謝汶均"
          :image="['劉學聖、曾原信、報系資料庫']"
        />
        <CityBottomTitle :mainColor="mainColor" city="台南" />
        <OnloadAnchorFrame
          GAtitle="page read: 台南 臉書留言區"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <FooterFbComment />
        </OnloadAnchorFrame>
      </PageFooterV1>
    </transition>
    <template v-if="!isInside">
      <PageBackTop />
    </template>
  </div>
</template>

<script>
import FooterEditor from '@/components/common/footer/FooterEditor.vue'
import FooterFbComment from '@/components/common/footer/FooterFbComment.vue'
import HeaderTypeA1 from '@/components/common/header/HeaderTypeA1.vue'
import HeaderLinks from '../HeaderLinks'
import PageBackTop from '@/components/common/ui/PageBackTop.vue'
import PageFooterV1 from '@/components/common/footer/PageFooterV1.vue'
import FeaturesPage from '../FeaturesPage'
import SixCitiesEditor from '@/components/SixCitiesEditor.vue'
import CityBottomTitle from '@/components/CityBottomTitle.vue'
import ShareTainanProud from './ShareTainanProud'
import TainanData from './TainanData'
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import articleContent from '../../data/data-tainan'

export default {
  name: 'Tainan',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareTainanProud,
    TainanData,
    MainVideo,
    OnloadAnchorFrame,
    HeaderLinks
  },
  data() {
    return {
      features: articleContent,
      active: 0,
      isInside: false,
      onloadGATitle: null,
      folderRoute: 'test/cities',
      mainColor: '#dc4705'
    }
  },
  methods: {
    updateActive(active) {
      this.active = active
    },
    updateIsInside(isInside) {
      this.isInside = isInside
    },
    updateOnloadGATitle(onloadGATitle) {
      this.onloadGATitle = onloadGATitle
    }
  },
  mounted() {
    window.addEventListener('beforeunload', () => {
      if (this.onloadGATitle) {
        this.sendGA({
          category: 'read',
          action: 'scroll',
          label: this.onloadGATitle
        })
      }
    })
  }
}
</script>
