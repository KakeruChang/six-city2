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
      <h1 class="title">為什麼台北需要銅鑼灣書店？</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        許多人以為，香港的銅鑼灣書店來台灣重啟，是店長林榮基為了糊口，不得不做的決定；事實上，會在台北開書店，是因為賣書賣了近30年的林榮基觀察到，即便台北的獨立書店再多，仍需要一間「銅鑼灣書店」。
      </p>
      <p class="content-1">
        「如果台灣自己有這種書店，我還擔心這間書店會開不起來，」晚間9點半，銅鑼灣書店仍滿是慕名而來的年輕讀者，最後一組客人離去後，林榮基關上鐵門，身後約10坪大的空間便從書店變成他的臥室，林榮基坐在床鋪前的辦公桌旁，回憶當初選擇在台灣重操舊業的原因。
      </p>
    </ArticleContainer>

    <!-- <ArticleYoutube
      src="https://www.youtube.com/embed/O3lhkd8fIJk"
      :articleMargin="false"
    /> -->

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        「決定要開書店時，我不考量市場，只考量台灣需不需要有一間銅鑼灣書店，」林榮基認為，獨立書店最重要的是書店主打的「重點的書」，從中可以看出書店老闆的選書品味、懂不懂書，甚至連老闆對社會的觀察，也可從中見得。
      </p>
      <p class="content-2">
        銅鑼灣書店的重啟之路，便始於林榮基在台灣感受到的矛盾與衝突問題，「台灣其實是一個非常保守的國家，傳統文化很嚴重，我一個香港人就看出問題，」他觀察，自由、民主是台灣引以為傲的價值，但矛盾的是，高舉自由民主旗幟的台灣卻出了許多思想傳統的書，「有幾個台灣作者是有新的看法的？說不出來。」
      </p>
      <p class="content-2">
        為什麼自由民主的台灣會出這麼多觀念保守的書？這是林榮基想問的問題，而他正試著用銅鑼灣書店，協助台灣人尋找答案。
      </p>
      <p class="content-2">
        「台灣需要一些探討性的書」，環顧櫃台旁擺放的書籍，多是以探討中國、香港問題與社會現象的書為主，林榮基表示，台灣人習慣用傳統、單一的角度看事情，導致不論是在政治、經濟方面，都很少有新的思維，他希望透過這些探討性的書，協助台灣人釐清自身傳統文化與現代思維上的矛盾，也為台灣注入不同角度的新觀點。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taipei/mob/8_Taipei_causeway_bay_books_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taipei/pad/8_Taipei_causeway_bay_books_pic1.jpg')
        "
        :srcPc="
          require('../../../assets/Taipei/web/8_Taipei_causeway_bay_books_pic1.jpg')
        "
        alt="銅鑼灣書店的客人以年輕學子居多，林榮基覺得台灣的年輕人比香港的年輕人更懂得挑書。"
        >銅鑼灣書店的客人以年輕學子居多，林榮基覺得台灣的年輕人比香港的年輕人更懂得挑書。記者杜建重／攝影</ArticleColumnOne
      >
      <p class="content-2">
        儘管台灣書業少有探討性的書，林榮基卻感受到台灣年輕世代對這類書籍的強大需求，「這邊的年輕人比較懂挑書，像是小區（地方性）的書、環境保護、人的生活這類探討性的書，我有點訝異，因為這類書在香港不太好賣」。
      </p>
      <p class="content-2">
        台北現在有了銅鑼灣書店，未來，台灣仍需要好幾家能點出台灣問題的獨立書店，才能滿足台灣人亟欲探討社會的需求。也許透過不斷的摸索、尋找，台灣人能漸漸化解自身的矛盾，而不同世代的思維與觀念，也能逐漸跟上台灣一直以來高舉的自由、民主旗幟。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
// import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail8',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: {
    ArticleContainer,
    ArticleColumnOne
    // ArticleYoutube
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
