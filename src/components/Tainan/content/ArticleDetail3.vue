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
      <h1 class="title">府城老味新吃</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <div class="voice-wrapper">
        <div class="voice-text">聽友愛市場的聲音</div>
        <VoiceStoryPlay
          :voiceSrc="require('../../../assets/Tainan/4_Tainan_eat_voice.mp3')"
          titleGA="聽友愛市場的聲音"
          :imgPlay="require('../../../assets/Tainan/play.svg')"
          :imgStop="require('../../../assets/Tainan/stop.svg')"
        />
      </div>
      <p class="content-1">
        台南人對食物總有一股強烈的堅持，在這裡你會看到一輩子只專賣一樣食物的小店、或是只在特定時段開的老字號店家，對台南人來說，「吃」是日常最重要的事，更是代表台南人的生活態度。
      </p>
      <p class="content-1">
        不過近年來在時代的推進下，台南的傳統飲食型態也開始有了不一樣的轉變。
      </p>
      <p class="content-1">
        走進台南中西區的友愛市場，白天是熱鬧的早市，賣的是雞鴨魚豬牛，吃的是傳統菜粽配味噌湯，入夜後則搖身一變成年輕人喜愛的深夜食堂，將原本賣菜的攤位，打造成小而巧的異國料理攤和各式酒吧，打破過去台南既有的傳統飲食型態，在老市場內也能吃一頓異國風的料理。
      </p>
      <p class="content-1">
        不僅老市場轉型，過去台南人習慣坐在路邊吃小吃的飲食型態，隨著老店由第三、四代接手後，開始轉而店面經營，讓老字號的小吃重新出發，吃小吃也可以坐下來吹冷氣，好好吃一頓的飲食型態。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Tainan/mob/4_Tainan_eat_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Tainan/pad/4_Tainan_eat_pic1_web.jpg')
        "
        :srcPc="require('../../../assets/Tainan/web/4_Tainan_eat_pic1_web.jpg')"
        alt="夜晚走進中西區的友愛市場，原本賣菜的攤位，搖身一變成各式異國料理，在年經人的進駐下，台南的傳統飲食文化也變得更多元豐富。"
        >夜晚走進中西區的友愛市場，原本賣菜的攤位，搖身一變成各式異國料理，在年經人的進駐下，台南的傳統飲食文化也變得更多元豐富。圖／彭筱涵提供</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        飲食文化作家謝仕淵觀察，「台南是乘載著歷史文化而生的城市，生活的各個領域都和過去有所連結，但近年來，台南小吃因年輕活力的注入，不斷在探索台南飲食文化邊界，讓傳統飲食多了新的可能，更全面的回應市場需求」。
      </p>
      <p class="content-2">
        另外，謝仕淵也指出，有別於其他縣市，台南人對於食物的要求標準高，不只是對味道，對食材的要求也非常講究，這些在城市裡的新味道，必須做過一定的功夫和嘗試，才能滿足台南人的味蕾。
      </p>
      <p class="content-2">
        從百年傳承的老味道，到看見老店在傳統中追求創新的企圖心，時間慢煮下的「府城味」，在這些新舊味道的碰撞下，開始有了不一樣的城市風味。
      </p>
      <p class="content-2">
        對於下一個時代的「府城味」，謝仕淵表示，「有一些傳統的老味道必須保留下來，但台南的飲食除了有面向傳統，也應該要找到和新時代連結性的可能，如何去創造一個新味道和人的關係，或是透過食物喚起城市的記憶，都是未來台南飲食可以努力的方向。」
      </p>
      <p class="content-2">
        而對台南人來說，在這些新舊的味道中，永遠不變的是對食物的堅持，還有在飲食中找尋的滿足感。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
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
  components: { ArticleContainer, ArticleColumnOne, VoiceStoryPlay },
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
  color: #dc4705;
}
</style>
