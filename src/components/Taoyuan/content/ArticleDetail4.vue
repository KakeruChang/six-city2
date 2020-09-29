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
      <h1 class="title">桃園：開始學習走自己的路</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「複製、貼上、複製、貼上、複製、貼上」是桃園在10多年前的城市節奏，從小在桃園長大的藝術家尹子潔觀察，過去的桃園總是追在台北後面跑，一直複製、貼上台北的模式，「台北有什麼，我們也要有，桃園一直想要像台北一樣新興起來，但是又一直處在邊緣」。
      </p>
      <p class="content-1">
        不斷想趕上台北，導致追求效益、CP值成為桃園奉行的準則，「你說我們沒有公園，就馬上弄出很多罐頭公園，你說我們是文化沙漠，一講完，就突然開始做藝文」，尹子潔指出，<span
          style="font-weight:bold;"
          >桃園把台北當作範本，不斷努力彌補與台北之間的落差，「但複製形式有一個問題，就是我們沒有內容」</span
        >。
      </p>
      <p class="content-1">
        桃園東南亞主題書店「望見書間」負責人林周熙舉例，過去的桃園就像是站在台北的圍牆外的小孩，很想進到圍牆內，但一直沒辦法進去，「看著自己手髒髒、腳髒髒的，也不是很敢進去」。
      </p>
      <p class="content-1">
        在不斷複製貼上、不斷想趕上台北的過程中，卻很少有人靜下來思考，桃園要的到底是甚麼？桃園自己已經有什麼？
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        桃園的城市歷史、文化脈絡畢竟與台北不一樣，很難靠著複製、貼上台北的模式，成為另一個台北。相較於台北，桃園有多元的文化與族群，客家人、閩南人、外省人、原住民與新住民均在這片土地生根，但尹子潔指出，「過去的桃園，因為我們有一個模仿對象，所以沒辦法直接用另一種姿態面對這些身分」，桃園只能用貶義或負面態度面對自己與台北的不同，把來自東南亞的移工視為製造社會問題的外勞、認為說話帶有客家腔的客家人「比較俗」、或覺得新二代的學習能力一定比較差。
      </p>
      <p class="content-2">
        不過，近年來，桃園開始學習走自己的路、擁抱這座城市的多元，努力找回過去好幾代移民在此聚集的歷史記憶，也開始以正面的方式看待自己與台北的不同。
      </p>
      <p class="content-2">
        「我覺得桃園的性格有在扭轉」，林周熙表示，<span
          style="font-weight: bold"
          >過去一直想進到圍牆內的小孩，現在決定「留在外面會比較自在」</span
        >。
      </p>
      <p class="content-2">
        決定開始「做自己」後，桃園人看待自己家鄉的角度變了，桃園的城市面貌也有了新亮點──曾經面臨拆遷命運的老舊眷村開始有了新生命，客家青年嘗試以年輕人的方式詮釋新時代的客家文化，而位在桃園火車站後站的望見書間，則成為移工與台灣人交流的空間，讓桃園人學習去望見身旁的新文化。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taoyuan/mob/5_Taoyuan_walk-its-own-path_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taoyuan/pad/5_Taoyuan_walk-its-own-path_pic1.jpg')
        "
        :srcPc="
          require('../../../assets/Taoyuan/web/5_Taoyuan_walk-its-own-path_pic1.jpg')
        "
        alt="近年來，桃園開始學習用新的角度看待自己的不同。在2019桃園眷村文化節中，尹子潔將眷村的標語、口號做成抱枕，讓參與的民眾透過文字互動，進一步認識眷村文化。"
        >近年來，桃園開始學習用新的角度看待自己的不同。在2019桃園眷村文化節中，尹子潔將眷村的標語、口號做成抱枕，讓參與的民眾透過文字互動，進一步認識眷村文化。圖／尹子潔提供</ArticleColumnOne
      >
      <p class="content-2">
        過去的桃園，不斷追在台北後面跑，但現在，桃園決定將視線收回到自己身上，用新的角度看待自己的不同。在做自己的路上，也許桃園會走得跌跌撞撞，但只要不斷嘗試、不斷摸索，桃園將找到一條能完美綻放這座城市的多元與特色的道路。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail4',
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
