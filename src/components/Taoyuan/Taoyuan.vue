<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/Taoyuan`"
      :isInside="isInside"
      metaMainDescription="桃園為擺脫工業城市印象，正亟欲發展新的城市面貌，卻很少有人靜下來思考，桃園要的到底是甚麼？桃園已經有什麼？《聯合報》團隊從各種角度看桃園，帶領讀者更清楚看見這座城市的脈動。"
      metaMainTitle="桃園市：城市的樣貌不該只有一種| 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 桃園 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="桃園"
        description="城市的樣貌不該只有一種"
        :mainColor="mainColor"
        videoPC="https://p3.udn.com.tw/cities/Taoyuan/video/Taoyuan_video_web.mp4"
        videoMob="https://p3.udn.com.tw/cities/Taoyuan/video/Taoyuan_video_mob.mp4"
      />
      <TaoyuanData :mainColor="mainColor" />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/Taoyuan/arrow_Taoyuan.svg')"
      rootUrl="/Taoyuan"
    />
    <transition name="fade">
      <PageFooterV1 v-if="!isInside">
        <OnloadAnchorFrame
          GAtitle="page read: 桃園 我桃園我驕傲"
          @emitOnloadGA="updateOnloadGATitle"
        >
          <ShareTaoyuanProud />
        </OnloadAnchorFrame>
        <SixCitiesEditor :image="['葉信菉、林澔一、鄭超文、', '報系資料庫']" />
        <CityBottomTitle :mainColor="mainColor" city="桃園" />
        <OnloadAnchorFrame
          GAtitle="page read: 桃園 臉書留言區"
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
import ShareTaoyuanProud from './ShareTaoyuanProud'
import TaoyuanData from './TaoyuanData'
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import articleContent from '../../data/data-taoyuan'

export default {
  name: 'Taoyuan',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareTaoyuanProud,
    TaoyuanData,
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
      mainColor: '#00edff'
    }
  },
  computed: {
    folderRoute() {
      return this.$store.state.folderRoute
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
