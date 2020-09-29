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
      <h1 class="title">左轉有書張慧如：</h1>
      <h1 class="title">台北正處於矛盾、拉扯的狀態</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「台北正處於矛盾、拉扯的狀態，但正朝著融合的方向前進，」專售社會議題書籍的獨立書店「左轉有書」負責人張慧如從社會議題角度看台北，「矛盾、衝突」是她為台北現況所下的註解，也正是在各種思想、立場的碰撞中，讓台北成為推動台灣社會思維前進的引擎。
      </p>
      <p class="content-1">
        「在台北，所有議題都會被放大，」張慧如表示，台北聚集了倡議各式議題的非營利組織，這些組織是提倡各種社會議題的靈魂，在他們的籌劃下，與社會議題相關的活動、講座、遊行輪番在台北上演，也使台北成為不同思想激盪最劇烈的城市，「像之前同婚議題在台北就吵得很熱鬧，但離開台北後，好像沒有人聽過這些事情。很多在台北吵得很兇的議題，離開台北後，好像都不存在。」
      </p>
      <p class="content-1">
        台北的衝突，也能從知名地標中窺見，張慧如以中正紀念堂為例，在這座象徵威權的建築物外面，卻坐落著一個以「自由」為名的廣場，顯示各種舊時代遺留下來的觀念與思維，仍散落在台北各個角落，持續與不同新思維拉扯、碰撞。
      </p>
      <p class="content-1">
        各種對立與衝突，都需經過不斷的對話與討論，才有機會找到妥協的空間，而近年來，台北也出現愈來愈多主打女權、人權、環保等社會議題的獨立書店，與非營利組織一同為社會注入新思維和對話空間。
      </p>
      <p class="content-1">
        張慧如和幾位從事非營利組織的友人經營的「左轉有書」即是為解決台灣的對立問題而成立。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taipei/mob/9_Taipei_paradox_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taipei/pad/9_Taipei_paradox_pic1.jpg')
        "
        :srcPc="require('../../../assets/Taipei/web/9_Taipei_paradox_pic1.jpg')"
        alt="張慧如和友人希望透過「左轉有書」獨立書店，補足台灣社會欠缺的思維，同時創造對話的氛圍與空間。"
        >張慧如和友人希望透過「左轉有書」獨立書店，補足台灣社會欠缺的思維，同時創造對話的氛圍與空間。圖／左轉有書提供</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        2016年，在婦運團體工作的張慧如有感於台灣社會中有太多的對立，「例如性交易該不該合法化、代理孕母等問題，即便在婦女團體裡面也是很對立的，而且根本沒有什麼對話、妥協的空間，」她和友人於是決定開一間主打社會議題的獨立書店，希望透過販售社會議題書籍，以及開辦「左轉處方籤」讀書會，補足台灣社會欠缺的思維，同時創造對話的氛圍與空間，為台灣各種對立問題找解方、開處方籤。
      </p>
      <p class="content-2">
        成立4年來，張慧如意外發現參與民眾的年齡層有拓寬的趨勢，過去參與左轉處方籤讀書會、討論社會議題的均以年輕人居多，但「這幾年滿多阿公、阿嬤也會來參加」，像白色恐怖、轉型正義等台灣歷史相關主題，特別會吸引中老年民眾參與，反映隨著網路興起、資訊交流便利，台灣民眾對各種議題的對話、交流需求，也逐漸打破世代隔閡。
      </p>
      <p class="content-2">
        「閱讀本身是一個道德問題」，張慧如表示，我們決定讀什麼書、不讀什麼書，讀完後決定做什麼行動、不做什麼行動，都是一連串的選擇。這幾年下來，台北累積了非常多對話空間和活動資訊，讓台北人多了不少思想碰撞、交流的選擇，但「看完之後呢？聽完之後呢？就沒了，」張慧如希望下一步能刺激民眾能有具體行動，因為「閱讀、思辨、行動」是缺一不可的。
      </p>
      <p class="content-2">
        儘管從衝突到融合，台北還有一段距離要走，但隨著不同世代的民眾開始學習如何對話、溝通、產生行動，總有一天，台北的舊思維和新思維也會找到一個平衡點。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail9',
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
@import '@/style/city.scss';
</style>
