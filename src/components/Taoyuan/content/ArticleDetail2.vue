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
      <h1 class="title">映出桃園歷史的埤塘</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        桃園有「千塘之鄉」美名，對離家的遊子來說，每回搭飛機回台灣，只要看見窗外一口口埤塘，就知道「回家了」，已故導演齊柏林生前從高空俯瞰，更曾形容埤塘「宛如散落一地的水晶，閃閃發光」。
      </p>
      <p class="content-1">
        桃園市因為台地地形，早期農民築堤蓄水成埤塘以供灌溉，過去桃園曾有近萬口埤塘，埤塘雖美，卻命運多舛，隨著產業變遷，埤塘經濟價值減低，逐漸被忽略，陸續被填平，蓋起建築，桃園現存不到3千口埤塘。
      </p>
      <p class="content-1">
        埤塘曾是維繫聚落命脈的水源，每口埤塘都有屬於自己的故事，即便埤塘的經濟價值無法與現代化水圳相比，但每口埤塘背後的歷史記憶，卻是現代化水圳所無法取代的。
      </p>
      <p class="content-1">（資料來源：聯合報）</p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'

export default {
  name: 'ArticleDetail2',
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
