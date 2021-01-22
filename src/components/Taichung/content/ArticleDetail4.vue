<template>
  <div style="width: 100%">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{
        paddingBottom: 10,
        paddingTop: paddingTopArt0 && 0,
        paddingBottom: '10px'
      }"
    >
      <h1 class="title">年輕人瘋大甲媽祖遶境</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「你有去過大甲媽祖遶境嗎？」<br />
            「沒有耶，你去過嗎？」<br />
            「今年要不要去一下？感覺台灣人一生要去一次，不然就遜掉了。」<br />
            「好啊！揪我揪我。」
          </p>
          <p class="content-1">
            提到台中，許多人會立刻想到大甲鎮瀾宮媽祖遶境進香，每年萬頭攢動、人潮洶湧的遶境畫面，是大家心目中鮮明的台中印象之一。
          </p>
          <p class="content-1">
            隨著周邊文創商品愈來愈多，路跑、煙火、街舞大賽等活動增添豐富度，加上智慧型手機讓民眾可以沿途拍照打卡，大甲媽祖遶境近年已不只是宗教活動，更像一場全台狂歡的嘉年華會，不僅帶動沿途各鄉鎮區的媽祖商機，參與者也多出大量來「體驗」的年輕人，遶境成為一種新時尚，是臉書和IG上的熱門打卡Hashtag。
          </p>
          <p class="content-1">
            《聯合報》整理2000年到2020年的大甲媽祖遶境現場照，透過舊照片回顧，帶讀者感受20年來的氣氛轉變。
          </p>
        </ArticleContainer>
        <ArticleYoutube
          src="https://www.youtube.com/embed/RwHbS3GAGzk"
          :articleMargin="false"
        />
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            今年28歲的Breeya，3年前與朋友一起到大甲參與媽祖遶境活動，「每年都聽到很多人去走啊！身為『台北俗』，從沒感受過這種宗教的熱血和熱情，當然要去一次。」
          </p>
          <p class="content-2">
            Breeya當年從大甲一路跟到彰化，沿途看到許多年輕人，大家一起用app「追媽祖」，查詢媽祖現在走到哪，大家就提早到當地等待；當媽祖慢慢靠近時，周圍的人潮會自動排成一列等待鑽轎，「那氣氛很神奇，會莫名被感動」。
          </p>
          <p class="content-2">
            遶境過程中，沿途店家和民眾都會免費提供各種補給品，「很有人情味」。Breeya認為，大甲媽祖遶境對年輕人來說是「參與在地、認識台灣」，可以看見台灣最道地的宗教文化。
          </p>
          <p class="content-2">
            「我平常就很愛拜拜耶！人生大小事都會拜，去繞境當然是想得到媽祖庇佑」。今年25歲的糖糖（化名）曾跟著父母一起去參加大甲媽祖遶境，他笑說，自己從小到大都會跟著父母到處進香參拜，雖然沒有特別虔誠，「但覺得因為常拜拜，從小到大都沒什麼太大的不順」，堅信「有拜有保庇」。
          </p>
          <p class="content-2">
            24歲的Sabrina則是一直對儀式性的事物充滿興趣，「大概從電音三太子開始吧，我一直很好奇宮廟文化，八家將的臉孔為什麼這樣畫？跳的舞有什麼意涵？」，老一輩可能覺得不讀書才會去做宮廟，但年輕人會認為這是台灣在地特殊文化，「會覺得很酷、很有趣」，也沒有那麼多忌諱，例如多數人覺得金紙不吉利，但她當時參與遶境，還帶了很多壓轎的金紙回家做紀念。
          </p>
          <p class="content-2">
            「那時去大甲媽祖遶境的感覺，很像年輕人去演唱會，大家有共同的信仰、集體共鳴」，現場氣氛是狂熱的，雖然一度覺得放很多鞭炮、燒很多香不太環保，「但若少了這些，氣氛會完全不一樣」，對她來說是一種環保與傳統文化之間的妥協，也就沒那麼難接受。
          </p>
          <p class="content-2">
            「台灣的宗教活動很特別，沒有那麼強烈的『宗教感』，大家都可以來，很親民」。文山社區大學講師馬繼康每年都帶團參加大甲媽祖遶境，他觀察，遶境是很容易親近、不嚴肅的宗教活動，而且相當彈性，不強迫每個參與者都要走完，想走多遠就走多遠、隨時可以加入或離開。
          </p>
          <p class="content-2">
            遶境過程也不會強求每個人都要成為信徒。馬繼康說，年輕人可以只是因為好奇、湊熱鬧來參加一次；也有些人被信仰力量的強大感動，年年來參加，「有各種可能性，很多元、包容」；有些年輕人則說，
            <span style="font-weight:bold"
              >遶境過程中最大收穫是認識台灣，用自己的雙腳踏過以前從不會走的路</span
            >。
          </p>
          <p class="content-2">
            自由、彈性、文化、傳統、在地、人情味，大甲媽祖遶境幾乎是年輕人心目中台灣價值的集合體，po上臉書或IG不只比吃喝玩樂更具特色，更是對朋友圈宣告：「我是正港台灣人」。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「你有去過大甲媽祖遶境嗎？」<br />
            「沒有耶，你去過嗎？」<br />
            「今年要不要去一下？感覺台灣人一生要去一次，不然就遜掉了。」<br />
            「好啊！揪我揪我。」
          </p>
          <p class="content-1">
            提到台中，許多人會立刻想到大甲鎮瀾宮媽祖遶境進香，每年萬頭攢動、人潮洶湧的遶境畫面，是大家心目中鮮明的台中印象之一。
          </p>
        </ArticleContainer>
      </template>
    </PayWall>
  </div>
</template>

<script>
import PayWall from '@/components/PayWall'
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail4',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: {
    ArticleContainer,
    ArticleYoutube,
    PayWall
  },
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
