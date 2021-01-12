<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/New-Taipei`"
      :isInside="isInside"
      metaMainDescription="對許多新北人來說，他們的生活圈都在台北，「家，只是回家睡覺的地方」。這20年來，新北市歷經了什麼改變？新北人如何加深與家鄉的連結？《聯合報》團隊從各種角度看新北，希望帶領讀者更清楚看見這座城市的脈動。"
      metaMainTitle="新北市：不只是「回家睡覺的地方」 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 新北 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="新北"
        description="不只是回家睡覺的地方"
        :mainColor="mainColor"
        videoPC="https://p3.udn.com.tw/cities/New-Taipei/video/New_Taipei_video_web.mp4"
        videoMob="https://p3.udn.com.tw/cities/New-Taipei/video/New_Taipei_video_mob.mp4"
      />
      <NewTaipeiData :mainColor="mainColor" />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/New-Taipei/arrow_New-Taipei.svg')"
      rootUrl="/New-Taipei"
    />
    <transition name="fade">
      <PageFooterV1 v-if="!isInside">
        <OnloadAnchorFrame
          GAtitle="page read: 新北 我新北我驕傲"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <ShareNewTaipeiProud />
        </OnloadAnchorFrame>
        <SixCitiesEditor
          :image="[
            '許正宏、林澔一、杜建重、',
            '曾原信、林伯東、胡經周、',
            '報系資料庫'
          ]"
        />
        <CityBottomTitle :mainColor="mainColor" city="新北" />
        <OnloadAnchorFrame
          GAtitle="page read: 新北 臉書留言區"
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
import ShareNewTaipeiProud from './ShareNewTaipeiProud'
import NewTaipeiData from './NewTaipeiData'
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import articleContent from '../../data/data-new-taipei'

export default {
  name: 'NewTaipei',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareNewTaipeiProud,
    NewTaipeiData,
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
      // folderRoute: 'test/cities',
      folderRoute: '/newmedia/2021/cities/',
      mainColor: '#00f0d8'
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
