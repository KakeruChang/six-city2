<template>
  <div style="width:100%;">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{
        paddingBottom: 10,
        paddingTop: paddingTopArt0 && 0,
        paddingBottom: '10px'
      }"
    >
      <h1 class="title">為台南記錄下最美的平凡</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「有些地方的房子可能今天拍了，明天就被拆掉。」綽號差差，用攝影記錄家鄉的台南善化郵差李翔。差差送信的10多年間，古蹟被拆、老房子也一棟一棟破壞拆除，還有農田被改建成農舍。
          </p>
          <p class="content-1">
            採訪這天，我們和差差走進善化鎮牛庄小巷，這裡的房子大多還保留過去的紅磚牆，但成排的紅磚老房子，卻偶爾會出現幾棟現代鋼筋水泥建築，看似矛盾突兀，卻也正是台南現在的城市縮影。
          </p>
          <p class="content-1">
            近年來，台南的城市樣貌不斷在改變，文青咖啡店、老屋民宿如雨後春筍般在台南的老巷弄遍地開花，而過去在都市開發下被遺忘的台南縣，也在縣市合併後，帶動原本郊區農村的發展，善化人口逐年成長，就業機會變多，為了迎合現在民眾的生活，建案急速增加，原本小巷內的老房子逐漸被破壞、拆除，取而代之的是星巴克、7-11、速食店和聳立的房地產廣告。
          </p>
          <p class="content-1">
            原本差差要帶採訪團隊去拍攝花磚老屋，也在拍攝前夕被拆空，改變與破壞每天都在發生。「改變已經沒有辦法挽回，只能放任它持續下去，把我們過去曾有的生活痕跡都抹滅掉，到最後一點痕跡都不見了，真的讓人感到蠻無力的」。
          </p>
        </ArticleContainer>
        <ArticleYoutube
          src="https://www.youtube.com/embed/mJLtrAdEpI8"
          :articleMargin="false"
        />

        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            為了留下對家鄉的生活記憶，差差8年前接觸攝影後，開始將工作結合拍照，在每天60公里送信的過程記錄下台南最原始的生活樣貌。
          </p>
          <p class="content-2">
            在差差鏡頭下的台南，有別於一般人對於台南的印象：古蹟、巷弄、老房子，更多了對台南生活的觀察和單純的生活感，有擺攤超過40年的臭豆腐阿嬤、把自己當兒子的老爺爺、坐在家門口等待差差上門的姐妹花阿嬤、百年老房子、大片的田野、台南四季的變化、還有為了辦做醮吃素了好幾天，卻不小心吃到葷食的阿嬤的生活趣事。
          </p>
          <p class="content-2">
            「在這些老人家、老房子身上可以看到過去台南生活的歷史痕跡，真的有一種歸屬感在台南這塊土地上，讓我知道，至少還有一些事情是不會改變的。」差差指出，台南近年在文創的熱潮下，大家只是一味追求那些速食可得的文青氛圍店，卻沒有去了解背後的故事和歷史，「不只讓大家看見老房子的存在，更重要的是體會到過去那些生活的樣子」。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Tainan/mob/2_Tainan_record-life_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Tainan/pad/2_Tainan_record-life_pic1-1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Tainan/web/2_Tainan_record-life_pic1-1_web.jpg')
            "
            alt="過去7年多來，差差持續用影像為台南紀錄下純樸的生活風景，也把那些逐漸在台南消失的建築、風情保留下來。"
            >過去7年多來，差差持續用影像為台南紀錄下純樸的生活風景，也把那些逐漸在台南消失的建築、風情保留下來。圖／差差提供</ArticleColumnOne
          >
          <p class="content-2">
            差差希望透過照片，讓大家重新找回對於家鄉和生活的感知能力，「<span
              style="font-weight:bold"
              >不要再去把自己的想像加注在台南，我希望多喚起一些，你曾經對於生活的真實性</span
            >」。
          </p>
          <p class="content-2">
            差差用拍照拉近了與台南的連結，這份連結也串聯起在地居民開始關心自己的家鄉，和外地遊子思念家鄉的心情，曾經有在紐約留學的網友告訴差差，「謝謝你讓我知道原來家鄉這麼美。」
          </p>
          <p class="content-2">
            一座城市的樣貌是透過不斷累積而成的，差差表示，台南之所以成為大家喜歡的樣子，是因為過去大家曾經熱愛自己的家鄉和生活，每一個人都會覺得自己做的事情最棒，自己煮的東西最好吃，自己種的菜最棒，自己種的水果最好吃，每一個單位和每一個單位產生的連結，所以才構成現在的台南。
          </p>
          <p class="content-2">
            對台南人來說，台南是最有「生活感」的城市，活在台南，可以很輕易的認同自己對於這塊土地的感情，可以很放心的，好好在這裡生活，「當外來的因素不斷改變台南的街道、文化、原本的生活型態，<span
              style="font-weight:bold"
              >台南人的自傲，不會允許那個『生活感』那麼簡單就改變 </span
            >」。
          </p>
          <p class="content-2">
            近年來，台南從一座老城慢慢走向現代與都市化，巷弄內的房子越蓋越高、新的店家不斷進駐，然而在傳統與新舊的融合中，台南仍正試圖找出一條能夠並存的路，面對不斷改變的城市樣貌，差差仍持續透過攝影，為台南的一磚一瓦記錄下最真實的生活縮影。
          </p>
          <p class="content-2">
            「我私心希望台南不要再改變下去了，只要不變，每個人拿起相機拍，都是台南最美的平凡。」
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「有些地方的房子可能今天拍了，明天就被拆掉。」綽號差差，用攝影記錄家鄉的台南善化郵差李翔。差差送信的10多年間，古蹟被拆、老房子也一棟一棟破壞拆除，還有農田被改建成農舍。
          </p>
          <p class="content-1">
            採訪這天，我們和差差走進善化鎮牛庄小巷，這裡的房子大多還保留過去的紅磚牆，但成排的紅磚老房子，卻偶爾會出現幾棟現代鋼筋水泥建築，看似矛盾突兀，卻也正是台南現在的城市縮影。
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
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail1',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleYoutube, PayWall },
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
