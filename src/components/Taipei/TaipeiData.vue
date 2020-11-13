<template>
  <div class="taipei-data">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingBottom: 0 }"
    >
      <div class="data-content" v-for="data in dataset" :key="data.text">
        <span class="number">{{ data.number }}</span>
        <span class="data-text unit">{{ data.unit }}</span>
        <div class="data-text">{{ data.text }}</div>
      </div>
      <p class="data-source">
        資料來源：中華民國統計資訊網、文化部106年臺灣出版產業調查暨107年閱讀及消費趨勢分析
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        台北市的面貌不斷在改變，只要每隔5年來看台北市，就會發現建築物又長高了一點，生活步調又加快了一點，身旁的店家也幾乎換了一輪。
      </p>
      <p class="data-text">
        「台北餐飲業的裝潢，都是以5年為限，如果5年過去，這間餐廳還沒有做什麼改變，台北人就會膩了，」美食家徐仲指出，要在台北生存，就必須跟上台北市不斷翻新、改變的城市面貌，才能避免被這座城市淘汰。
      </p>
      <p class="data-text">
        這20年來，24小時不打烊的誠品敦南店關了、過往重慶南路書店街的風華也早已不再，卻多了一座讓台灣站上國際的台北101、各式各樣的獨立書店和隱藏在巷弄間的酒吧。
      </p>
      <p class="data-text">
        相較於這座城市的快、新、變，身處其中的台北人，卻仍卡在新舊之間，正嘗試摸索一條出路。
      </p>
      <p class="data-text">
        「台北正處於矛盾、拉扯的狀態，但正朝著融合的方向前進，」專售社會議題書籍的獨立書店「左轉有書」負責人張慧如從社會議題角度看台北，近年來，同志議題、勞工權益、人權問題，各種議題不斷在台北市發酵，驅動台灣社會的思維持續往前進，但新舊立場間所引發的碰撞、衝突，卻也突顯台北的舊思維與新觀念間仍有一大段差距。
      </p>
      <p class="data-text">
        台北市這20年來改變了什麼？為什麼台北人有這麼多矛盾與衝突？《聯合報》團隊帶領讀者從各種角度看台北，希望當台北人回首時，可以更清楚看見這座城市這20年來的脈動。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import { sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'TaipeiData',
  mixins: [sendGaMethods],
  components: { ArticleContainer },
  data() {
    return {
      dataset: [
        {
          number: 1967,
          unit: '年',
          text: '升格為直轄市年份，六都最早',
          id: 'Number0'
        },
        {
          number: -10.15,
          unit: '‰',
          text: '社會增加率（2019年），六都最低',
          id: 'Number1'
        },
        {
          number: 134.44,
          unit: '%',
          text: '老化指數（2019年），六都最老',
          id: 'Number2'
        },
        {
          number: 113,
          unit: '家',
          text: '獨立／二手／單一書店數量（2017年），全台最高',
          id: 'Number3'
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
    color: #ff2300;
    @media screen and (max-width: 414px) {
      font-size: 100px;
    }
  }
  .unit {
    color: #ff2300;
  }
}
</style>
