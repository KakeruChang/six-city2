<template>
  <div style="width: 100%">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{
        paddingBottom: 10,
        paddingTop: paddingTopArt0 && 0,
        paddingBottom: '10px'
      }"
    >
      <h1 class="title">走入歷史的大統百貨</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            1995年的一場大火，燒毀了高雄知名地標大統百貨，也帶走了許多高雄人的童年回憶。
          </p>
          <p class="content-1">
            大統百貨曾是東南亞最大的百貨公司，1975年10月6日大統百貨開幕當天，由當紅的藝人崔苔菁擔任模特兒，高雄五福路及中山路都擠滿人潮，附近交通完全被人潮廠瘓。
          </p>
          <p class="content-1">
            大統百貨開幕之後，每天上午開店營業之前就聚滿等候入內的人潮，開張後，約一萬坪的營業面積人來人往，晚間10時打烊時，公司內仍人頭鑽動，公司必須透過擴音器不斷逐客。
          </p>
          <p class="content-1">
            當年，大統百貨公司首度引進日本經營方式，以顧客為上，很多大專畢業女性，以能到大統百貨公司那務為榮，這間地下2層地上9層的建築也逐漸成為高雄的地標，更是政府招待外賓，彰顯國內經濟迅速發展的樣板，許多鄉下的民眾花了近2小時車程到大統百貨，回家後還可炫耀一番。
          </p>
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            在大統百貨的帶動下，高雄市五福商圈逐漸形成，最後更成為南台灣最繁榮的商圈，當時大統商圈的地價市值一坪逾140萬元，老一輩的高雄市人直指，大統百貨的落成是造成盛極一時的鹽埕區沒落的主因。台北人南下高雄，也必前往大統百貨一遊，當時頗傷了不少台北人的自尊。
          </p>
          <p class="content-2">
            大統百貨曾陪著高雄人一起成長，一起走向繁榮，但這間一度稱霸台灣百貨王國的大統百貨公司，卻在25年前遭祝融，整幢建築連續燒了3天之後化成了灰燼。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/1_Kaohsiung_Datung_pic_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/1_Kaohsiung_Datung_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/1_Kaohsiung_Datung_pic1_web.jpg')
            "
            alt="有20年歷史的大統百貨再1995年遭祝融，整幢建築付之一炬。"
            >有20年歷史的大統百貨再1995年遭祝融，整幢建築付之一炬。圖／聯合報系資料照</ArticleColumnOne
          >
          <p class="content-2">
            大統百貨燒毀後，附近的商圈也逐漸沒落，昔日的盛況已不復見，甚至有高雄在地人感嘆，大統百貨失火「燒掉的不止是回憶，還燒掉了高雄的繁華」。
          </p>
          <p class="content-2">
            (資料來源：聯合報)
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            1995年的一場大火，燒毀了高雄知名地標大統百貨，也帶走了許多高雄人的童年回憶。
          </p>
          <p class="content-1">
            大統百貨曾是東南亞最大的百貨公司，1975年10月6日大統百貨開幕當天，由當紅的藝人崔苔菁擔任模特兒，高雄五福路及中山路都擠滿人潮，附近交通完全被人潮廠瘓。
          </p>
        </ArticleContainer>
      </template>
    </PayWall>
  </div>
</template>

<script>
import PayWall from '@/components/PayWall'
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail0',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, PayWall },
  computed: {
    paddingTopArt0() {
      const { innerWidth } = window
      if (innerWidth <= 1025) return true
      return false
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/style/city.scss';
</style>
