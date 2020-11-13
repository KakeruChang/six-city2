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
        資料來源：中華民國統計資訊網、高雄市政府主計處
      </p>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent">
      <p class="data-text">
        過去的高雄是座流動的城市，工業城市的背景，吸引不少外地人來這裡打拚，許多人來高雄找尋工作機會，卻少有人在這座城市探索生活的可能。
      </p>
      <p class="data-text">
        「很多人的爸爸、祖父、曾祖父輩，他們覺得自己只是來高雄賺錢，認同感還是原鄉，自己終究要回去」，獨立書店三餘書店負責人謝一麟指出，以前高雄大部分的人都是從雲林、嘉義、澎湖各地移民過來，嚴格來說，沒有幾個人能叫真正的高雄人，因此大部分的人對這塊土地的根都扎得不深。
      </p>
      <p class="data-text">
        「可是來到第三代、第四代之後，認同感就不一樣了，我一出生就是在高雄、身分證號碼前面就是E」，謝一麟觀察，近年來，愈來愈多人開始認同自己是高雄人，也開始尋找與這座城市的連結。
      </p>
      <p class="data-text">
        不過，即使心繫高雄，高雄的產業發展困境，讓這代年輕人仍得不斷在離鄉與留鄉間抉擇，「要不要北漂？」、「要不要去外頭打拼？」是高雄年輕人最常面臨的問題。
      </p>
      <p class="data-text">
        「留在這裡什麼攏嘸，去外面打拼卡實在！」長輩也會說，留在家鄉沒有任何機會，要年輕人趕快離鄉去外面闖。
      </p>
      <p class="data-text">
        但高雄真的不適合讓年輕人留下來嗎？
      </p>
      <p class="data-text">
        不論在高雄市區、靠山的小鎮，還是臨海的小漁村，我們看到許多高雄青年用各種熱血的方式深耕腳下這塊土地，他們玩搖滾樂、辦音樂祭、從事社區營造，不僅為自己找到留在家鄉的方法，也策動在地能量，希望更多人能夠在家鄉看到未來。
      </p>
      <p class="data-text">
        這個20年，高雄人持續為這座城市的問題找解方，希望下個20年，更多北漂的高雄青年能夠回到這塊土地，而高雄人也能高聲喊出「我高雄
        、我驕傲」！
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
          number: 1979,
          unit: '年',
          text: '升格為直轄市年份。',
          id: 'Number0'
        },
        {
          number: '2,773,198',
          unit: '人',
          text: '戶籍登記人數（2019年）。',
          id: 'Number1'
        },
        {
          number: 133.5,
          unit: '%',
          text: '老化指數（2019年），六都第二老。',
          id: 'Number2'
        },
        {
          number: '7,541',
          unit: '',
          text: '營運中工廠家數（2018年）。',
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
