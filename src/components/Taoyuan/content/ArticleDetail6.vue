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
      <h1 class="title">客家青年眼中的桃園：</h1>
      <h1 class="title">黃泥、海風、伯公廟</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        若問桃園在地人，桃園的特色在哪裡，桃園人可能會半晌說不出一個答案。對桃園人來說，記憶中家鄉的面貌總是有些模糊，覺得桃園好像跟其他縣市有點不一樣，但若要說底是哪裡不一樣，卻又說不出個所以然。
      </p>
      <p class="content-1">
        「桃園是一個流動的城市」，桃園在地青年江宛庭表示，「桃園很多元，不過桃園人對家鄉的根都不深」，江宛庭在宜蘭讀大學時，發現宜蘭人對自己的家鄉都很有自信、非常愛自己的家鄉，「但身為桃園人，我以前沒有這種感覺」。
      </p>
      <p class="content-1">
        桃園聚集了原住民、閩南人、客家人、外省人、新住民等族群，每一個族群都在桃園留下了自己的印記，卻沒有哪一個印記特別突出、成為桃園的特色，江宛庭指出，「桃園就是太多元了，大家不覺得哪一個點是重要的，沒有覺得客家、還是新移民是重要的，都沒有」。
      </p>
      <p class="content-1">
        不過，近年來，愈來愈多桃園青年決定好好深耕桃園，讓家鄉的意象變清晰，並用年輕人的方式，讓自己的家鄉被看見。
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        江宛庭回憶，在宜蘭讀書的那段日子，她才開始從日常生活中的點點點滴滴，拼湊出家鄉的面貌，「那時候，<span
          style="font-weight:bold;"
          >我發現宜蘭的土是黑的，才想到說，桃園的土是黃色的，難怪我們很多客家的歌詞裡面會寫到『黃泥』」</span
        >。
      </p>
      <p class="content-2">
        除了泥土是黃色的，桃園還有什麼特別的？回到桃園後，江宛庭開始積極探索自己的家鄉，從小在新屋長大的她從孕育自己成長的客家文化出發，與幾位夥伴成立「伯公下在地文化發展協會」，跳脫傳統客家文化的花布、藍衫既定框架，重新摸索他們對家鄉的印象。
      </p>
      <p class="content-2">
        這個平均年齡才25歲的團隊透過在觀音區的伯公廟口（客家話的「土地公廟」）舉辦客家音樂會、推廣客家方口獅文化、整修具客家樣式的林家古厝等方式，用年輕人的方式去講客家文化，也希望讓更多人看見客家青年眼中的桃園。
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
        alt="江宛庭與夥伴透過舉辦客家音樂會、推廣客家方口獅文化等方式，用年輕人的方式去講客家文化，也希望讓更多人看見客家青年眼中的桃園。"
        >江宛庭與夥伴透過舉辦客家音樂會、推廣客家方口獅文化等方式，用年輕人的方式去講客家文化，也希望讓更多人看見客家青年眼中的桃園。圖／伯公下在地文化發展協會提供</ArticleColumnOne
      >
      <p class="content-2">
        「有時候，我們自己在騎車回家的路上，會覺得這裡其實已經很美好了，我們沒有想要改變她」，對江宛庭和夥伴們來說，家鄉現在的面貌，就是家鄉最美的樣子，「我們想要把她呈現出來，讓大家看到這裡的美」。
      </p>
      <p class="content-2">
        黃泥、海風、伯公廟，這些景象也許很平凡、很常見，但對於桃園觀音區的客家青年來說，這就是他們對家鄉最深刻的記憶。
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
