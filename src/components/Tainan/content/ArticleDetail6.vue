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
      <h1 class="title">老城新時代</h1>
      <h1 class="title">他們以混血台南為傲</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「台南的生活很自由，雖然沒有花枝招展，但卻很自在，傍晚就看到有人騎摩托車去廟前吃小吃，晚上再去吃宵夜、水果，台南的生活就是這樣子，別人的城市有嗎？這是身為台南人的特權。」
      </p>
      <p class="content-1">
        長期在台南推動藝術策展的杜昭賢觀察，在都市發展的節奏中，文化資產、老屋常是都市開發下絆腳石，但對台南來說，如何將老宅與街道保存再利用卻是近年最重要的議題。
      </p>
      <p class="content-1">
        相較於其他城市透過不斷蓋大樓促進都市開發，台南近年正極力將一些舊空間轉化成再利用，從老宅新生、廢棄的中國城翻新成河樂廣場、舊體育館轉變成第二美術館，台南的城市面貌正不斷由舊翻新，然而，如何賦予這些老事物新的價值、活絡原本的街區和城鎮，仍是台南待解的問題。
      </p>
      <p class="content-1">
        「一個城市的發展應該是多面向的，台南需要有更多不同的元素進來」。過去10多年來杜昭賢試圖透過「藝術」為這座老城找到一條新的出路。
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        2004年，杜昭賢從大家熟知的海安路街道復興計畫開始，用藝術翻轉了在都市計畫下殘破的海安路，到近年一路將「藝術」的概念延伸鹽水月津港，她找來當地年輕的藝術家一同策展，讓長久沒落、人口外移的鹽水古鎮蛻變成了大型藝廊，成為每年台灣最盛大的燈節，更重新建立鹽水居民的地方認同，幫鹽水人找回過去的榮耀感。
      </p>
      <p class="content-2">
        從一條街區的重生，到復興曾經繁華的小鎮，過去幾年來，杜昭賢和團隊走遍台南大街小巷，不斷聆聽居民的需求，讓藝術在無形中融入這座城市，更帶動居民守護老街區，希望用藝術讓不僅是在地人、甚至是外地人走進台南的地方，重新看見地方的好。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taoyuan/mob/7_Taoyuan_hakka_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taoyuan/pad/7_Taoyuan_hakka_pic1.jpg')
        "
        :srcPc="require('../../../assets/Taoyuan/web/7_Taoyuan_hakka_pic1.jpg')"
        alt="在杜昭賢和在地藝術家的努力下，讓曾經沒落的鹽水月津港蛻變成每年全台最盛大的燈節，也讓鹽水人找回過去的榮耀感。"
        >在杜昭賢和在地藝術家的努力下，讓曾經沒落的鹽水月津港蛻變成每年全台最盛大的燈節，也讓鹽水人找回過去的榮耀感。圖／聯合報系資料照</ArticleColumnOne
      >
      <p class="content-2">
        杜昭賢說，「過去台南人引以為傲的『驕傲感』是來自於歷史的傳承，現在的『驕傲感』是來自於有越來越多新元素進來這座古城，讓台南變得更自由、更年輕，漸漸大家會去感受到身為台南人，屬於我們的驕傲，我們所擁有的是別的城市沒有的」。
      </p>
      <p class="content-2">
        走過時代的台南，累積了許多老故事和老建築，在傳統與創新同時並行的路上，也許還在尋找平衡點，也許還在探索城市的不同可能性，但這些老事物與新藝術卻也映襯著這座城市獨有的生活價值與態度。
      </p>
      <p class="content-2">
        20年前，一場延宕的都市計畫，讓曾經繁華的台南海安路商圈沒落，卻也開啟了杜昭賢和台南的藝術連結。20年後，台南從海安路的藝術造街，到發展城市的在地燈節，對於台南未來的想像，「用新的視覺，開創新的城市力量」，杜昭賢期待下個20年，台南能循著這些過往的歷史脈絡，走出另一條藝術創生的路。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail6',
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
