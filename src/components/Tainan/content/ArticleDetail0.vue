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
      <h1 class="title">走入歷史的中國城</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        陪伴台南人走過34年的「中國城」，拆除重生為台南市區最大親水公園「河樂廣場」。
      </p>
      <p class="content-1">
        興建於1980年代的「中國城」，原本是台南運河的船渠、魚貨集散地，後來因航運用途逐漸消失，於1977年填平改建成「中國城」商場，成為當時台南最繁華的商業核心、時尚起點，商城內除了販售精品外，還設有戲院、文夏音樂城、太子冰宮，許多五、六年級生的台南人，都曾經在這裡戀愛、狂歡，留下青春的痕跡。
      </p>
      <p class="content-1">
        然而1990年代後期，因海安路地下工程延宕、東帝士百貨等商場興起，中國城逐漸沒落閒置，衍生出社會治安問題，最終在2016年拆除，並於2020年3月改建成「河樂廣場」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Tainan/mob/1_Tainan_china-town_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Tainan/pad/1_Tainan_china-town_pic1-1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Tainan/web/1_Tainan_china-town_pic1-1_web.jpg')
        "
        alt="中國城2016年拆除，部分建築結構被保留，並重建為台南市區最大的親水公園「河樂廣場」。"
        >中國城2016年拆除，部分建築結構被保留，並重建為台南市區最大的親水公園「河樂廣場」。圖／聯合報系資料照</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        如今的「河樂廣場」刻意保留原本「中國城」的牌樓、骨架，地下停車場則變成下沉式廣場，設計成深淺不一的水池，把過去運河的水重新帶進市區，負責此次設計的建築師瑪斯表示，「希望大家在這感受到歷史，也感受到生命。」
      </p>
      <p class="content-2">
        「中國城」歷經了時代的變遷，從繁忙的運河碼頭、80年代的中國城商場，到今日的「河樂廣場」，這座嶄新的「河樂廣場」，將繼續乘載下一代台南人的共同記憶。
      </p>

      <p class="content-2">
        (資料來源：聯合報)
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail0',
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
@import '@/style/city.scss';
</style>
