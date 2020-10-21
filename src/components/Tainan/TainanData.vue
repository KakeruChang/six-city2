<template>
  <div class="taipei-data">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingBottom: 0 }"
    >
      <div class="data-content" v-for="data in dataset" :key="data.text">
        <span class="number" :style="{ color: mainColor }">{{
          data.number
        }}</span>
        <span class="data-text unit" :style="{ color: mainColor }">{{
          data.unit
        }}</span>
        <div class="data-text">{{ data.text }}</div>
      </div>
      <p class="data-source">
        資料來源：中華民國統計資訊網、台南市政府觀光旅遊行政服務網、文化部文化資產局網站
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        從台南高鐵站進市區，第一眼迎面而來是近年啟用的奇美博物館，再往市中心走，嶄新的第二美術館就坐落在古蹟密集的市中心，以現代感的白色五角形堆疊而成，象徵著台南正走向一個新的時代。
      </p>
      <p class="data-text">
        這20年來，在「老屋欣力」的推動下，台南像是從一座沉睡的古城甦醒，從小到店家，大到街道，整座城市都在不斷由舊翻新，不只老宅再利用，一夕間更成為假日車水馬龍的觀光勝地。
      </p>
      <p class="data-text">
        然而在亟欲追求不斷開發的城市節奏中，卻也抹滅掉台南原有的生活痕跡和城市樣貌，古蹟被拆、鐵路地下化、興建捷運等。對這座擁有百年歷史的城市而言，如何賦予這些老事物新的價值、活絡原本的街區和城鎮，是台南待解的問題。
      </p>
      <p class="data-text">
        近年來，有越來越多在地的草根年輕人，他們正用自己的方式，為台南寫下不同的故事，有人用攝影紀錄家鄉、有人用插畫描繪地方的美、也有人用藝術活絡長久沒落的小鎮。
      </p>
      <p class="data-text">
        在台南推動藝術策展的杜昭賢表示，「現在的台南不只是有外來人口的刺激，還有越來越多年輕人在各個角落為這座城市努力，讓這個地方的內質變得更好。」
      </p>
      <p class="data-text">
        走過時代的台南，在傳統與創新同時並行的路上，也許還在尋找平衡點，也許還在探索城市的不同可能性，希望下個20年，台南能循著這些過往的歷史脈絡，成為新舊文化彼此融合的城市。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'TainanData',
  mixins: [sendGaMethods],
  components: { ArticleContainer },
  props: {
    mainColor: {
      type: String
    }
  },
  data() {
    return {
      dataset: [
        {
          number: 2010,
          unit: '年',
          text: '升格為直轄市年份。',
          id: 'Number0'
        },
        {
          number: '1,880,906',
          unit: '人',
          text: '戶籍登記人數（2019年），六都最少。',
          id: 'Number1'
        },
        {
          number: '1,152,080',
          unit: '人',
          text: '觀光景點遊客人次（2020年7月）。',
          id: 'Number2'
        },
        {
          number: 22,
          unit: '個',
          text: '國定古蹟，全台最多。',
          id: 'Number3'
        },
        {
          number: '31',
          unit: '件',
          text: '文化部私有老建築保存再生計畫（2020年），全台最多。',
          id: 'Number4'
        }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.taipei-data {
  background-color: rgb(23, 23, 23);
}
.data-source {
  font-size: 16px;
  line-height: 1.5;
  color: #999999;
  margin-top: 16px;
}
.data-text {
  font-size: 20px;
  line-height: 1.7;
  color: #eeeeee;
  @media screen and (max-width: 414px) {
    font-size: 18px;
  }
}
.data-content {
  margin-top: 50px;
  .number {
    font-family: AdobeArabic, sans-serif;
    // font-family: source-han-serif-tc, serif;
    font-size: 120px;
    font-weight: bold;
    line-height: 0.5;
    @media screen and (max-width: 414px) {
      font-size: 100px;
    }
    @media screen and (max-width: 374.99px) {
      font-size: 80px;
    }
  }
}
</style>
