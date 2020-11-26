<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/Taipei`"
      :isInside="isInside"
      metaMainDescription="台北市不斷向前滾動，城市面貌也持續翻新，這座城市在這20年來有什麼改變？台北有什麼矛盾與衝突？《聯合報》團隊從各種角度看台北，希望帶領讀者更清楚看見這座城市的脈動。"
      metaMainTitle="台北市：在新與舊的碰撞中前進 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 台北 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="台北"
        description="在新與舊的碰撞中前進"
        :mainColor="mainColor"
        videoPC="https://p3.udn.com.tw/cities/Taipei/video/Taipei_video_web.mp4"
        videoMob="https://p3.udn.com.tw/cities/Taipei/video/Taipei_videp_mob.mp4"
      />
      <TaipeiData />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/Taipei/arrow_Taipei.svg')"
      rootUrl="/Taipei"
    />
    <PageFooterV1>
      <OnloadAnchorFrame
        GAtitle="page read: 台北 我台北我驕傲"
        @emitOnloadGA="updateOnloadGATitle"
      >
        <ShareTaipeiProud />
      </OnloadAnchorFrame>
      <SixCitiesEditor
        :image="['林俊良、徐兆玄、杜建重、余承翰、', '蘇健忠、報系資料庫']"
      />
      <CityBottomTitle :mainColor="mainColor" city="台北" />
      <OnloadAnchorFrame
        GAtitle="page read: 台北 臉書留言區"
        @emitOnloadGA="updateOnloadGATitle"
      >
        <FooterFbComment />
      </OnloadAnchorFrame>
    </PageFooterV1>
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
import CityBottomTitle from '@/components/CityBottomTitle'
import ShareTaipeiProud from '@/components/Taipei/ShareTaipeiProud.vue'
import TaipeiData from '@/components/Taipei/TaipeiData.vue'
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import articleContent from '../../data/data-taipei'

export default {
  name: 'Taipei',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareTaipeiProud,
    TaipeiData,
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
      mainColor: '#ff2300'
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
