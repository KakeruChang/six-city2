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
        資料來源：中華民國統計資訊網、國家發展委員會在地創生團隊資料庫
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        大台北生活圈形成後，新北市和台北市之間的距離變得更緊密，卻也導致新北人的工作和生活圈都在台北市，「家，只是回家睡覺的地方」。
      </p>
      <p class="data-text">
        「像新莊這種衛星城市，流失的不是人口，而是人心」，新莊在地人梁勝欽指出，便利的交通帶動新莊、汐止等地快速發展，但看似繁華的外表下，隱藏的卻是在地人對家鄉極低的認同感。
      </p>
      <p class="data-text">
        鏡頭轉到較偏遠的坪林、金山、石碇等地區，入夜後冷清的街道，則讓人真切感受到人口流失對這些地區的衝擊。
      </p>
      <p class="data-text">
        尋根，是這一代新北市人最大的課題，而這幾年，許多新北人也開始在新北市尋找回來與留下的理由。
      </p>
      <p class="data-text">
        那條寫滿兒時記憶的老街，有什麼變化？那間以前常去拜的土地公廟，現在還在嗎？新北人重新探索自己與家鄉的連結，透過發行地方誌、舉辦社區活動等方式，串聯對家鄉感興趣的所有人，也觸碰到不曾停下腳步好好認識腳下這塊土地的人。
      </p>
      <p class="data-text">
        這個20年，許多新北人一直處在離開家鄉、去台北市的路上，但只要用心去挖掘，新北人會發現與家鄉的連結不曾斷過，對土地的感情也不曾少過，也許下個20年，新北市將不再只是「回家睡覺的地方」，而是一個可以讓人回來，好好工作、好好成長、好好生活的城市。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'NewTaipeiData',
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
          text: '升格為直轄市年份',
          id: 'Number0'
        },
        {
          number: '4,018,696',
          unit: '人',
          text: '戶籍登記人數（2019年），六都最多',
          id: 'Number1'
        },
        {
          number: 30,
          unit: '個',
          text: '在地創生團隊數量（2019年）',
          id: 'Number2'
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
