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
      <h1 class="title">看見被遺忘的茶鄉</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽坪林老街的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/New-Taipei/4_New_Taipei_Pinglin_voice.mp3')
              "
              titleGA="聽坪林老街的聲音"
              :imgPlay="require('../../../assets/New-Taipei/play.svg')"
              :imgStop="require('../../../assets/New-Taipei/stop.svg')"
            />
          </div>
          <p class="content-1">
            新北市與台北市的生活圈愈趨緊密，卻也拉大了新北市內城市與鄉下的距離，緊鄰台北市的新莊、汐止、淡水等地搭上了不斷向前邁進的列車，變得愈來愈繁華、移入人口快速增加、高樓一棟棟蓋起，生活步調也愈來愈快；至於離台北市較遠、沒搭上發展列車的坪林、雙溪、瑞芳等地，只見青壯年人口不斷流失、社區逐漸凋零，生活步調也愈來愈慢。
          </p>
          <p class="content-1">
            但正因被開發商忽略、被發展的腳步遺忘，新北市偏遠地區才有機會留下家鄉純樸的面貌與生活方式，也多了一些喘息的空間，能好好思考、想像家鄉未來的可能性。
          </p>
          <p class="content-1">
            「我們都說自己是山海掛」，在坪林推廣在地食材、文化的複合式餐廳「坪感覺」創辦人蔡威德笑稱，新北市從石碇、貢寮到金山，
            <span style="font-weight:bold"
              >只要有山有海的地方，都有山海掛的成員，「我隨便講就5、6個，石碇的螢火蟲書屋、雙溪的柑腳驛站、貢寮的水梯田復育、三峽的甘樂文創、金山的汪汪地瓜園」</span
            >
            ，他們在較缺乏資源的地區扎根，推廣在地文化與特色，並凝聚地方的動能，號召在地居民一起把對家鄉的想像化為現實。
          </p>
          <p class="content-1">
            坪林以茶聞名，過去曾是茶行林立的景象，但雪隧通車後，帶走了曾駐足坪林的人潮，曾經風光一時的茶鄉，漸漸成為被遺忘的角落。
          </p>
          <p class="content-1">
            被外界遺忘的坪林，少了便利的交通、遊客如織的熱鬧，卻留下了老坪林的生活步調和底蘊深厚的茶文化。
          </p>
          <p class="content-1">
            來自雲林的蔡威德在2013年來到坪林後，便深深被這塊土地吸引，決定留了下來，過去8年來，「如何讓外界重新看見這個被遺忘的茶鄉」成為蔡威德最重要的課題。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/New-Taipei/mob/4_New_Taipei_Pinglin_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/New-Taipei/pad/4_New_Taipei_Pinglin_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/New-Taipei/web/4_New_Taipei_Pinglin_pic1_web.jpg')
            "
            alt="蔡威德自從2013年來到坪林後，便深深被這塊土地吸引，決定留了下來，過去8年來，他與坪林的茶農、在地商家合作，一步步勾勒出屬於坪林的故事。"
            >蔡威德自從2013年來到坪林後，便深深被這塊土地吸引，決定留了下來，過去8年來，他與坪林的茶農、在地商家合作，一步步勾勒出屬於坪林的故事。記者胡經周／攝影</ArticleColumnOne
          >
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            「我們希望
            <span style="font-weight:bold"
              >在坪林建立自信感，讓在地人也會為自己的家鄉、家鄉的茶產業感到驕傲」</span
            >，蔡威德指出，坪林得先學會說自己的故事，才能被外界看見，他從茶鄉小旅行、推廣在地食材與文化等方式著手，再與坪林的茶農、在地商家合作，一步步勾勒出屬於坪林的故事。
          </p>
          <p class="content-2">
            如今，走進坪林老街，會感受到這裡的生活步調依舊慢慢的，但腳下所踩的、眼前所看見的、耳朵所聽到的，都是坪林累積好幾個世代的生活記憶—騎樓下的阿嬤信手拈來就是一首過去採茶時唱的採茶山歌；老街街角的阿伯用坪林特產的茶葉，煮出一顆顆融入在地風味的茶葉蛋；再往前走幾攤，賣草仔粿的阿嬤則會分享如何使用在地食材，做出彈牙的草仔粿。
          </p>
          <p class="content-2">
            透過一遍遍訴說坪林的故事，坪林人與土地的連結愈來愈緊密，坪林也不再只是「被遺忘的茶鄉」，而是一個有故事、仍保有在地文化的土地。未來，在山海掛成員的努力下，更多新北市偏遠地區也將以家鄉為傲，開始說起屬於自己家鄉的故事，也讓外界重新看見這些曾經被遺忘的地區。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽坪林老街的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/New-Taipei/4_New_Taipei_Pinglin_voice.mp3')
              "
              titleGA="聽坪林老街的聲音"
              :imgPlay="require('../../../assets/New-Taipei/play.svg')"
              :imgStop="require('../../../assets/New-Taipei/stop.svg')"
            />
          </div>
          <p class="content-1">
            新北市與台北市的生活圈愈趨緊密，卻也拉大了新北市內城市與鄉下的距離，緊鄰台北市的新莊、汐止、淡水等地搭上了不斷向前邁進的列車，變得愈來愈繁華、移入人口快速增加、高樓一棟棟蓋起，生活步調也愈來愈快；至於離台北市較遠、沒搭上發展列車的坪林、雙溪、瑞芳等地，只見青壯年人口不斷流失、社區逐漸凋零，生活步調也愈來愈慢。
          </p>
          <p class="content-1">
            但正因被開發商忽略、被發展的腳步遺忘，新北市偏遠地區才有機會留下家鄉純樸的面貌與生活方式，也多了一些喘息的空間，能好好思考、想像家鄉未來的可能性。
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
import VoiceStoryPlay from '../../voice_story/VoiceStoryPlay'

export default {
  name: 'ArticleDetail3',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, VoiceStoryPlay, PayWall },
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
@import '@/style/voice.scss';

.voice-text {
  color: #00f0d8;
}
</style>
