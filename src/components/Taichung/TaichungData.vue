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
      <div class="data-content">
        <span class="number" :style="{ color: mainColor }">32</span>
        <span class="data-text unit" :style="{ color: mainColor }">萬</span>
        <span class="number" :style="{ color: mainColor }">7933</span>
        <span class="data-text unit" :style="{ color: mainColor }">公噸</span>
        <div class="data-text">空氣汙染物（2016年），六都第二高。</div>
      </div>
      <p class="data-source">
        資料來源：中華民國統計資訊網、交通部氣象局、交通部觀光局、台中市主計處
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        台中人是這麼形容台中的：「我們好像什麼都在『中間』，地理位置在台灣的中間，城市發展也在台灣各城市的中間，交通便利性、物價和房價都在中間，一切都很中間」。
      </p>
      <p class="data-text">
        說不太出台中特色，但幾乎所有台中人都驕傲於台中的好天氣和人情味，「住起來就是很舒服」。台中市曾因創意小吃、便捷交通與生活機能佳，被CNN稱讚為全台最宜居城市，台中人說：「台中一直是個原創地，珍珠奶茶等小吃都在這長出來，匯集許多中小企業，土地有滿滿的生命力。」
      </p>
      <p class="data-text">
        台中是個生活的城市，許多民生、消費性產業如腳踏車、糕餅、鞋子等，都在台中蓬勃發展；台中也是充滿活力的商業服務型城市，求新求變，隨時有新景點和餐廳，例如被喻為創意美食發源地的逢甲夜市，以及公益路上整排的「豪宅餐廳」，都是台中鮮明的餐飲印象。
      </p>
      <p class="data-text">
        但商圈和景點更迭過於快速，難累積出屬於台中的特色；都市發展過於集中、空氣汙染等問題，台中人生活得愈來愈不舒適，讓台中人焦慮。許多青年返鄉，重新認識自己的家、試著解決「不適感」，希望紀錄下台中市的過去與現在，並找出這城市未來的個性。
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
          number: '1932',
          unit: '小時',
          text: '全年日照時數（2019年）。',
          id: 'Number1'
        },
        {
          number: 6992,
          unit: '家',
          text: '商業登記新設家數（2019年），六都第二多。',
          id: 'Number2'
        },
        {
          number: '12.8',
          unit: '%',
          text: '國人到台中旅遊比率（2018年），六都最高。',
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
    @media screen and (max-width: 414px) {
      font-size: 100px;
    }
    @media screen and (max-width: 374.99px) {
      font-size: 80px;
    }
  }
}
</style>
