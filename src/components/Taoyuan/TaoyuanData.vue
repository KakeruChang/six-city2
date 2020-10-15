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
        資料來源：中華民國統計資訊網、桃園市政府主計處從數字看桃園（第086號）
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        一間間色彩單調的工廠曾是桃園的日常風景，在這塊土地上，時間好像總圍著工廠的上下班打卡打轉，而為了擺脫工業城市的印象，近年來，桃園不斷推出新的城市規劃、新的建案，整座城市都在為「新的桃園」做準備。
      </p>
      <p class="data-text">
        但在一昧拚開發、拚發展、不斷追上其他城市腳步的過程中，卻很少有人靜下來思考，桃園要的到底是甚麼？桃園自己已經有什麼？
      </p>
      <p class="data-text">
        「桃園現在的想像真的太單一了」，中壢五號倉庫藝文基地成員劉醇遠表示，現在一提到桃園，「大家想到的還是航空城、某個建案，一旦只用這些東西去辨識城市，這座城市其實滿可憐的」。其實只要用心去探索，就會發現這座城市的特色和發展的軌跡就隱藏在大街小巷中，不需要急著以新的建案覆蓋桃園累積好幾代的歷史脈絡。
      </p>
      <p class="data-text">
        為了讓桃園的城市面貌有更多可能性，這幾年來，許多桃園在地青年開始回鄉，走訪桃園的大街小巷、蒐集各個角落的故事，並利用推廣在地小旅行、發揚各族群文化等方式，為這座扁平的城市注入不少新色彩。
      </p>
      <p class="data-text">
        這個20年，桃園曾一度迷失在「求新求變、求進步」的口號中，但城市的特色和文化是需要不斷累積的，希望下個20年，桃園能尋著這塊土地的脈絡和特色，走出一條屬於自己的路，也讓這座城市的樣貌，不再只有一種。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'TaoyuanData',
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
          number: 2014,
          unit: '年',
          text: '升格為直轄市年份，六都最晚',
          id: 'Number0'
        },
        {
          number: 4.31,
          unit: '‰',
          text: '自然增加率（2019年），六都最高',
          id: 'Number1'
        },
        {
          number: 8.29,
          unit: '‰',
          text: '社會增加率（2019年），六都最高',
          id: 'Number2'
        },
        {
          number: 81.4,
          unit: '%',
          text: '老化指數（2019年），六都最年輕',
          id: 'Number3'
        },
        {
          number: '61,774',
          unit: '人',
          text: '新住民人數（2019年10月），六都第四高',
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
  }
}
</style>
