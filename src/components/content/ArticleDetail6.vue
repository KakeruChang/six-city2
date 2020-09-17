<template>
  <div style="width:100%;">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingBottom: 10, paddingTop:paddingTopArt0 && 0,paddingBottom:'10px' }"
    >
      <h1 class="title">台北人的味蕾</h1>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent" :cssProperty="{ paddingTop: 0 }">
      <p
        class="content-1"
      >台北餐廳的汰換率就跟台北人的步調一樣快，若仔細觀察台北街頭近20年來的餐飲業戰況，會發現台北人的味蕾已逐漸由西式餐飲主宰，台菜則退居二線，但美食家徐仲認為，台菜不會就此從台北人的餐桌上消失，未來將以新型式繼續滿足台北人的味蕾。</p>
      <p
        class="content-1"
      >攤開台北美食地圖，會看到西式餐廳、餐酒館一間間開幕，而台北人對於西式料理也愈來愈講究。過去，只要打著「異國料理」的招牌，便能吸引愛嚐鮮的台北人，但近年來，異國料理的大旗已無法滿足台北人挑剔的味蕾，法國菜、義式料理、西班牙菜開始各立山頭，用不同香料、口感刺激著台北人的感官。</p>
      <!-- <div style="background-color:rgb(23,23,23)">
        <p
          class="content-1"
        >1989年，第一家誠品書店於台北仁愛敦南圓環旁開幕，6年後搬到誠品敦南店現址，誠品舉辦一場盛大的「今日不打烊」搬遷派對，讀者到凌晨4點還不肯散去，同時間誠品也舉辦「看不見的書店」徵文，有4成讀者希望書店不打烊，給了經營團隊新的靈感：何不來辦一間不打烊書店？</p>
      </div>-->
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p
        class="content-2"
      >徐仲指出，隨著西式餐廳在台北餐飲業的比例成長、走向精緻化，台北人的口味也變得更加多元、有層次，「以前吃沙拉，就只知道搭配凱薩醬，但近年來台北人也開始探索不同味覺體驗」，餐廳為了讓不同層次的味道均能交錯呈現，也開始調整香料比例，台北人的口味因而變得清淡。</p>
      <p
        class="content-2"
      >相較於西餐，台菜已非台北年輕人聚餐的首選，但隨著愈來愈多人開始思考如何定義台菜、如何去吃台菜，徐仲認為未來將掀起一波台菜熱潮，並預期下一個20年，台北的台菜可能會出現較高端的「私房菜」路線。</p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'

export default {
  name: 'ArticleDetail6',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer },
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
  line-height: 1.4;
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
