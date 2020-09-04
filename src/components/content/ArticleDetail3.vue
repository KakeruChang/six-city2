<template>
  <div style="width:100%;">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingBottom: 10, paddingTop:paddingTopArt0 && 0,paddingBottom:'32px' }"
    >
      <h1 class="title">上凱道的一百種方式</h1>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent" :cssProperty="{ paddingTop: 0 }">
      <!-- <p
        class="content-1"
      >台北人的生活步調快，來到台北市交通樞紐「台北車站」商圈（台北人口中的「北車」），每個人都在轉車、換車、在前往不同目的地的路上，這時腳步更是要加快好幾倍，才能跟上台北人的步伐，但在北車，仍有幾間老字號書店，努力撐起幾個讓人停下腳步的空間，同時延續著台北書店街的書香味。</p>-->
      <p class="content-1">2013年，反核團體在凱達格蘭大道舉辦夜宿凱道活動，民眾帶著睡袋，在帳篷內聽著作家徹夜討論廢核議題。</p>
      <p class="content-1">2014年，反服貿團體走上凱道高喊訴求，民眾高唱太陽花學運歌曲「島嶼天光」，用歌聲和行動表達對政府的怒吼。</p>
      <p class="content-1">2019年，同志團體在凱道舉辦同婚宴，席開160桌，慶祝台灣成為亞洲第一個同婚合法化的國家，同志新人在眾人見證下走紅毯、交換婚戒，完成終生大事。</p>
      <p class="content-1">不論是見證民主的街頭教室，還是歡慶台灣社會往前邁進的慶功宴，總統府前的凱道有一百種使用方式，不同團體都可以走上凱道，讓自己的聲音被政府和社會聽見。</p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="require('../../assets/Taipei/mob/4_Taipei_democracy_pic1_mob.jpg')"
        :srcPad="require('../../assets/Taipei/pad/4_Taipei_democracy_pic1.jpg')"
        :srcPc="require('../../assets/Taipei/web/4_Taipei_democracy_pic1.jpg')"
        alt="2014年，反服貿團體走上凱道，並秀出手機亮光，共同合唱「島嶼天光」。"
      >2014年，反服貿團體走上凱道，並秀出手機亮光，共同合唱「島嶼天光」。圖／聯合報系資料照</ArticleColumnOne>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">但凱道成為人民的凱道，也不過是近20多年的事而已。</p>
      <p
        class="content-2"
      >過去，凱道是當權者彰顯權力的象徵，凱道上禁行機車、腳踏車，但隨著台灣的自由民主風氣逐漸興起，凱道的禁區管制在1996年被放寬，近年來，與同志、環保、人權、教育等議題有關的遊行與示威活動輪番在凱道上演，成為台北市包容、多元、接納不同聲音的象徵。</p>
      <p
        class="content-2"
      >20多年來，凱道上時而架起層層拒馬與蛇籠、時而備妥高壓噴水車，甚至還曾為了接住勞工團體朝總統府丟擲的萬顆雞蛋，拉起高逾一層樓的塑膠布，但不管在位者必須做多少準備、佈下多少警力，才能好好接住民眾的聲音，「人民的聲音需要被聽見」依然是歷屆政府對人民不變的承諾。</p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="require('../../assets/Taipei/mob/4_Taipei_democracy_pic2_mob.jpg')"
        :srcPad="require('../../assets/Taipei/pad/4_Taipei_democracy_pic2.jpg')"
        :srcPc="require('../../assets/Taipei/web/4_Taipei_democracy_pic2.jpg')"
        alt="2012年，勞工團體發起「蛋洗總統府」抗議活動，在凱道上朝總統府丟擲雞蛋。"
      >2012年，勞工團體發起「蛋洗總統府」抗議活動，在凱道上朝總統府丟擲雞蛋。圖／聯合報系資料照</ArticleColumnOne>
      <p
        class="content-2"
      >在最接近台灣政治核心的地方，有著一條推動社會前進的凱道，這個20年，台灣民眾走上街，探索上凱道的一百種方式，期待下個20年，我們能繼續從凱道出發，驅動台灣的民主進程向前邁進。（資料來源：聯合報）</p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import ArticleColumnOne from '../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail3',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne },
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
.title {
  font-family: source-han-serif-tc, sans-serif;
  font-size: 36px;
  font-weight: bold;
  line-height: 1;
  color: #eeeeee;
  @media screen and (max-width: 1024.98px) {
    font-size: 28px;
  }
  @media screen and (max-width: 413.98px) {
    font-size: 25px;
  }
}
.content-1 {
  font-size: 20px;
  line-height: 1.7;
  color: #eeeeee;
}
.content-2 {
  font-size: 20px;
  line-height: 1.7;
  color: #171717;
}
</style>
