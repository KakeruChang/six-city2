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
      <h1 class="title">為新住民打造第二個「家」</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「我希望有一個有溫度的空間，它不是一個來這裡吃飯後就結束的地方，而是一個讓不同族群都能在這裡交流、感到自在的空間」，身為新二代的桃園市在地人鄒佳晶的媽媽是菲律賓華僑、爸爸是台灣人，近年來，愈來愈多新住民家庭在桃園落腳，但鄒佳晶觀察，許多新住民在家中缺乏話語權，即使在家中也無法放鬆、自在，她因此希望打造一個讓不同族群都能感到自在的空間，也讓桃園的新住民有第二個「家」。
      </p>
      <p class="content-1">
        「新住民在家中，常常是一個『被噤聲』的角色，」鄒佳晶表示，當台灣的傳統文化與異國文化產生衝突時，新住民的聲音往往會被覆蓋。
      </p>
      <p class="content-1">
        鄒佳晶的媽媽嫁來台灣25年了，每次和媽媽回菲律賓老家時，看到媽媽回到自己熟悉的文化、說菲律賓與時，那種自在、開心的樣子，總讓鄒佳晶難忘，但回到台灣後，媽媽卻必須脫下自己的文化，若遇到台灣與菲律賓的文化衝突或矛盾時，媽媽往往只能選擇噤聲。
      </p>
    </ArticleContainer>

    <ArticleYoutube
      src="https://www.youtube.com/embed/Z69aPjaVEjU"
      :articleMargin="false"
    />

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        「生活在台灣，可能為了順應家人的口味，媽媽就會煮台灣菜，不一定是菲律賓菜」，鄒佳晶表示，「但是我覺得媽媽可以選擇她想要做什麼菜，而不是因為生活在台灣，就只能做台灣菜。」
      </p>
      <p class="content-2">
        「我想讓媽媽有一個覺得自在的地方，這是為什麼我要開這間店」，鄒佳晶和媽媽、爸爸在2020年中一起打造了一間販售菲律賓料理和商品的複合式空間Halo-Halo，走進Halo-Halo，牆上掛的草帽、菲律賓吊飾，讓人立刻有身在菲律賓海島的錯覺，相較於其他東南亞餐廳，Halo-Halo除了提供菲律賓餐點外，更重視不同文化間的交流，會不定期舉辦與新二代、移工相關的講座與交流會、新住民成果展等。
      </p>
      <p class="content-2">
        「至少在這裡，媽媽可以說菲律賓話、做自己喜歡的菜，我們可以去談菲律賓的文化，而不像在家裡只是一個被噤聲的角色」，每每聽到媽媽和朋友在廚房說菲律賓話、聽見她們的笑聲，鄒佳晶就好似看見媽媽在菲律賓時開心的樣子，「所以對我來說，這個空間是很重要的一個地方」。往後，鄒佳晶希望能利用Halo-Halo，開啟更多文化交流的機會，讓新住民、新二代、移工、台灣人等不同族群都能將這個空間視為一個能自在放鬆的地方。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taoyuan/mob/6_Taoyuan_new-immigrant_pic1.jpg_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taoyuan/pad/6_Taoyuan_new-immigrant_pic1.jpg.jpg')
        "
        :srcPc="
          require('../../../assets/Taoyuan/web/6_Taoyuan_new-immigrant_pic1.jpg.jpg')
        "
        alt="身為新二代的桃園市在地人鄒佳晶希望打造一個讓不同族群都能感到自在的空間，讓桃園的新住民有第二個「家」。"
        >身為新二代的桃園市在地人鄒佳晶希望打造一個讓不同族群都能感到自在的空間，讓桃園的新住民有第二個「家」。記者林澔一／攝影</ArticleColumnOne
      >
      <p class="content-2">
        隨著桃園的新住民家庭愈來愈多，未來，桃園需要有更多文化交流空間，才能讓新住民的聲音被聽見、協助新住民和台灣人在不同文化間找到平衡，也讓新住民有第二個「家」，鄒佳晶表示，「不是只有新住民要努力，不是只有我媽媽要努力，台灣人也需要努力。」
      </p>
      <p class="content-2">
        也許當台灣人漸漸學會傾聽不同文化的聲音，有一天，新住民即便在自己家中，也能像在故鄉時一樣放鬆、自在。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail5',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleYoutube },
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
</style>
