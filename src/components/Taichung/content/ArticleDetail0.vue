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
      <h1 class="title">那些年</h1>
      <h1 class="title">我們一起等的平交道</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        2016年10月15日晚上8時55分，最後一班北上自強號列車緩緩駛離台中舊火車站月台，百年車站走入歷史，現場湧入上千位民眾，一起和台中車站說再見。最後一班列車駛離的同時，也象徵台中市城市發展進入新里程碑，告別平面鐵路、正式進入鐵路高架化時代。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/1_Taichung_railway_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/1_Taichung_railway_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/1_Taichung_railway_pic1_web.jpg')
        "
        alt="上圖為舊站，營運的最後一夜，許多民眾前往舊車站拍照留念，下圖為台中新火車站。"
        >上圖為舊站，營運的最後一夜，許多民眾前往舊車站拍照留念，下圖為台中新火車站。記者黃仲裕／攝影</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        「鐵路」對台中人的意義重大，連接市區、山線、海線，台中人搭車都會特別注意搭的車是往海線還是山線，以免到不了目的地。
      </p>
      <p class="content-2">
        在平面鐵路的年代，台中街頭常見一批批行人、車輛，交通尖峰時段在平交道前等待列車通過的情景。為了避開平面鐵道，台中市過去地下道也很多，車子一輛接一輛駛入地下道，如今這些景象都已不復存在。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/1_Taichung_railway_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/1_Taichung_railway_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/1_Taichung_railway_pic2_web.jpg')
        "
        alt="在平交道前等待火車通過，是台中市民過去習慣的日常。圖為2005年、台中大慶車站附近的平交道。"
        >在平交道前等待火車通過，是台中市民過去習慣的日常。圖為2005年、台中大慶車站附近的平交道。報系資料照</ArticleColumnOne
      >
      <div style="height:1px;background-color:#707070;margin-top:50px" />
      <ArticleQuote
        borderColor="transparent"
        color="#e1cc38"
        text="或許對城市的發展而言，舊時代硬體的轉型是必然"
        refer="台中市民Ranshine"
      >
        <p class="content-2" style="margin-top:80px">
          小的時候很喜歡平交道，每次經過前聽到噹噹噹的警示號誌響起就很興奮，因為可以看到火車。坐在媽媽的機車上一起猜火車會從哪個方向來，是很日常但可愛的回憶。
        </p>
        <p class="content-2">
          反而長大之後自己騎車，就沒那麼喜歡平交道了，會覺得遇到柵欄放下是件麻煩的事情，必須等很久。後來的平交道，號誌燈會顯示火車方向，所以也不像小時候可以猜。幾次等平交道時，一邊覺得沒耐心，卻想起小時候是很喜歡看火車的，就會發現自己真的長大了。
        </p>
        <p class="content-2">
          國中有段時間自己騎腳踏車上學，會經過精武地下道，很喜歡騎腳踏車下坡時的感覺，制服百褶裙隨著風微微飛起來，總會想到魔女宅急便裡面騎著掃帚的小魔女琪琪。
        </p>
        <p class="content-2">
          在台中地面舊站將停駛的那天晚上，我特地到車站走了一圈，在出站月台看了幾班列車進出站，感受旅客移動的人潮。
        </p>
        <p class="content-2">
          有人說，交錯的平交道、陸橋和地下道，把台中切成了兩半，對發展日漸快速的大台中而言，是一個尷尬的存在，或許對城市的發展而言，舊時代硬體的轉型是必然，城市與人也都一直在前進，隨著台中捷運即將開通，期待這些變化能帶來更多屬於台中的新氣象。
        </p>
      </ArticleQuote>
      <div style="height:1px;background-color:#707070;margin-bottom:80px" />
      <p class="content-2">
        對台中市民而言，鐵路高架化帶動台中前後站的連結與區域經營，也翻轉過去台中車站周邊總是雜亂不堪、交通混亂、機車亂停的舊印象；小型車站增加、區域發展更為平衡，對居民影響重大。台中市正隨著空間的變化逐步翻轉當中，漸漸形成新的城市光榮感。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleQuote from '../../common/ui/ArticleQuote'

export default {
  name: 'ArticleDetail0',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleQuote },
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
