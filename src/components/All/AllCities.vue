<template>
  <div id="app">
    <HeaderTypeA1
      theme="dark"
      :active="0"
      :rootCity="folderRoute"
      :isInside="false"
      metaMainDescription="《聯合報》邀請熱愛家鄉的六都在地青年一起回顧，這20年間，六都有什麼改變了、什麼沒有變？他們眼中的六都有什麼新面貌？"
      metaMainTitle="六都新印象 | 專題 | 聯合報"
      ><HeaderLinks
    /></HeaderTypeA1>
    <MainVideo
      city="台北"
      :description="['六', '都', '新', '印', '象']"
      videoPC="https://p3.udn.com.tw/cities/Cities/video/cities_web.mp4"
      videoMob="https://p3.udn.com.tw/cities/Cities/video/cities_mob.mp4"
    />
    <Impression />
    <AllCityLinks />
    <PageFooterV1>
      <SixCitiesEditor
        producer="謝汶均"
        mode="light"
        :image="[
          '劉學聖、葉信菉、鄭超文、許正宏、黃仲裕、曾原信、許瑋琳、洪欣慈、聯合報系資料照'
        ]"
        developers="張庭瑋"
      />
      <CityBottomTitle city="六都" :mainColor="mainColor" />
      <FooterFbComment />
    </PageFooterV1>
    <PageBackTop />
  </div>
</template>

<script>
import FooterFbComment from '@/components/common/footer/FooterFbComment.vue'
import PageBackTop from '@/components/common/ui/PageBackTop.vue'
import PageFooterV1 from '@/components/common/footer/PageFooterV1.vue'
import SixCitiesEditor from '@/components/SixCitiesEditor.vue'
import CityBottomTitle from '@/components/CityBottomTitle.vue'
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import HeaderTypeA1 from '@/components/common/header/HeaderTypeA1.vue'

import HeaderLinks from '../HeaderLinks'
import Impression from './Impression'
import MainVideo from './MainVideo'
import AllCityLinks from './AllCityLinks'

export default {
  name: 'AllCities',
  components: {
    FooterFbComment,
    PageBackTop,
    PageFooterV1,
    SixCitiesEditor,
    CityBottomTitle,
    Impression,
    MainVideo,
    HeaderTypeA1,
    HeaderLinks,
    AllCityLinks
  },
  data() {
    return { mainColor: '#ff2300' }
  },
  computed: {
    folderRoute() {
      return this.$store.state.folderRoute
    }
  }
}
</script>

<style></style>
