<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/Taichung`"
      :isInside="isInside"
      metaMainDescription="台中人常形容自己的城市很「中間」，地理位置、物價房價都是。但在外地人眼中，台中日新月異、總是有新的打卡景點。《聯合報》尋找台中的城市切面，紀錄高速發展下台中人正努力的日常。"
      metaMainTitle="空汙、網美、大甲媽 什麼是真台中 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 台中 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="台中"
        :description="['空汙', '、', '網美', '、', '大甲媽']"
        :mainColor="mainColor"
        videoPC="https://p3.udn.com.tw/cities/Taichung/video/Taichung_video_web.mp4"
        videoMob="https://p3.udn.com.tw/cities/Taichung/video/Taichung_video_mob.mp4"
      />
      <TaichungData :mainColor="mainColor" />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/Taichung/arrow_Taichung.svg')"
      rootUrl="/Taichung"
    />
    <transition name="fade">
      <PageFooterV1 v-if="!isInside">
        <OnloadAnchorFrame
          GAtitle="page read: 台中 我台中我驕傲"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <ShareTaichungProud />
        </OnloadAnchorFrame>
        <SixCitiesEditor producer="洪欣慈" :image="['黃仲裕、報系資料庫']" />
        <CityBottomTitle :mainColor="mainColor" city="台中" />
        <OnloadAnchorFrame
          GAtitle="page read: 台中 臉書留言區"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <FooterFbComment />
        </OnloadAnchorFrame>
      </PageFooterV1>
    </transition>

    <PageBackTop v-if="!isInside" />
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
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

import ShareTaichungProud from './ShareTaichungProud'
import TaichungData from './TaichungData'
import articleContent from '../../data/data-taichung'

export default {
  name: 'Taichung',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareTaichungProud,
    TaichungData,
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
      mainColor: '#DFD486'
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
