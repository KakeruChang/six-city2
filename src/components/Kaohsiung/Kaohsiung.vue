<template>
  <div id="app" class="example">
    <HeaderTypeA1
      theme="dark"
      :active="active"
      :rootCity="`${folderRoute}/Kaohsiung`"
      :isInside="isInside"
      metaMainDescription="高雄青年得不斷在離鄉與留鄉間抉擇，但高雄真的留不住年輕人嗎？《聯合報》團隊紀錄高雄人為這座城市找解方的努力，希望下個20年，更多北漂的高雄青年能夠回到這塊土地。"
      metaMainTitle="高雄：從離鄉到回鄉 高雄讓我驕傲 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <OnloadAnchorFrame
      GAtitle="page read: 高雄 前言"
      @emitOnloadGA="updateOnloadGATitle"
    >
      <MainVideo
        city="高雄"
        description="從離鄉到回鄉 高雄讓我驕傲"
        :mainColor="mainColor"
        :videoPC="
          require('../../assets/Kaohsiung/video/Kaohsiung_video_web.mp4')
        "
        :videoMob="
          require('../../assets/Kaohsiung/video/Kaohsiung_video_mob.mp4')
        "
      />
      <KaohsiungData :mainColor="mainColor" />
    </OnloadAnchorFrame>
    <FeaturesPage
      @emitActive="updateActive"
      @emitIsInside="updateIsInside"
      @emitOnloadGA="updateOnloadGATitle"
      :active="active"
      :features="features"
      :mainColor="mainColor"
      :arrowImg="require('../../assets/Kaohsiung/arrow_Kaohsiung.svg')"
      rootUrl="/Kaohsiung"
    />
    <PageFooterV1>
      <OnloadAnchorFrame
        GAtitle="page read: 高雄 我高雄我驕傲"
        @emitOnloadGA="updateOnloadGATitle"
      >
        <ShareKaohsiungProud />
      </OnloadAnchorFrame>
      <SixCitiesEditor producer="謝汶均" :image="['劉學聖、報系資料庫']" />
      <CityBottomTitle :mainColor="mainColor" city="高雄" />
      <OnloadAnchorFrame
        GAtitle="page read: 高雄 臉書留言區"
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
import CityBottomTitle from '@/components/CityBottomTitle.vue'
import MainVideo from '../MainVideo'
import OnloadAnchorFrame from '@/components/OnloadAnchorFrame.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

import ShareKaohsiungProud from './ShareKaohsiungProud'
import KaohsiungData from './KaohsiungData'
import articleContent from '../../data/data-kaohsiung'

export default {
  name: 'Kaohsiung',
  mixins: [sendGaMethods],
  components: {
    FooterFbComment,
    HeaderTypeA1,
    PageBackTop,
    PageFooterV1,
    FeaturesPage,
    SixCitiesEditor,
    CityBottomTitle,
    ShareKaohsiungProud,
    KaohsiungData,
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
      mainColor: '#2e95fb'
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
