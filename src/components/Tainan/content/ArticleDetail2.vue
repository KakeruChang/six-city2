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
      <h1 class="title">藏在巷弄中的新舊美學</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「台南其實有很多藏在巷弄的老招牌都還保留當時的產業型態或樣貌，但這些在城市中的細節卻常常被忽略，或是在一次的雨災中就消失在城市裡」，來自台南善化的設計師湯士賢，過去幾年來透過插畫的方式記錄下藏在城市中的美。
          </p>
          <p class="content-1">
            近年來，台南在「老屋欣力」的推動下，台南像是從一座沉睡的古城中甦醒，從小到店家，大到街道，整座城市都在不斷由舊翻新。然而在一片不斷翻新的城市中，卻鮮少有人真正的抬頭看看這座城的樣貌。
          </p>
          <p class="content-1">
            湯士賢觀察，「很多人都會把視野放在比較下面，但他並沒有真的抬頭去觀察這座城市其實是什麼樣貌」，也許是一棟走過時代的老房子、一塊破舊的老招牌、一台賣著傳統米糕的小攤車、老菜市場裡的水果紙箱、又或是進駐在老巷弄的新店家。
          </p>
          <p class="content-1">
            「台南的美不僅僅是小吃而已」，在台南土生土長的湯士賢，從藏在台南巷弄中的建築開始，到小時候和媽媽逛的老菜市場，實地走訪台南36座老菜市場和小巷弄，記錄下那些看似不起眼，卻長久佇立在城市中的老招牌、老攤販上的價目表、巷弄中的老宅、又或是老職人故事等，描繪出屬於台南特有的在地美感。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Tainan/mob/3_Tainan_aesthetics_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Tainan/pad/3_Tainan_aesthetics_pic1-1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Tainan/web/3_Tainan_aesthetics_pic1-1_web.jpg')
            "
            alt="為了讓家鄉的美被看見，過去幾年來，湯士賢實地走訪台南36座菜市場和小巷弄，描繪出那些藏在城市中的老招牌、老屋和移動攤車等。"
            >為了讓家鄉的美被看見，過去幾年來，湯士賢實地走訪台南36座菜市場和小巷弄，描繪出那些藏在城市中的老招牌、老屋和移動攤車等。圖／湯士賢提供</ArticleColumnOne
          >
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            「台南很美，但需要慢慢的發掘」，湯士賢說「台南的城市美學沒有一個既定的公式在，並不是說來這邊就一定會看到什麼，是要走入日常之中，抬頭細細觀察，才能真正體會到台南的美」。
          </p>
          <p class="content-2">
            在湯士賢筆下的台南，不僅看到台南好幾個世代所留下的城市樣貌外，還多了許多藏在巷弄中的新時代建築，「<span
              style="font-weight:bold"
              >這個城市就像是個有機體，有新有舊，彼此融合</span
            >」。
          </p>
          <p class="content-2">
            湯士賢說，「台南一開始只是大家講的小吃的地方，但近10年來，台南像是從一個聚落一個聚落般的發展，不僅是老宅重生，更結合現代感的設計翻新舊街區，豐富原本台南的城市美學」。
            除了跳脫只是一個小吃的地方，在新品牌、新能量的進駐下，也讓台南在原有的文化底蘊下慢慢長出新能量，但仍維持在原有的生活步調裡。
          </p>
          <p class="content-2">
            從城市的地景紀錄、老菜市場的描繪、到傳統職人的刻劃，「隨著年紀的增長，對家鄉的連結就會越深，最後就是回到根本，找尋真正地方生活的元素去創作」湯士賢希望未來的創作是和地方有所結合，才是真正的在為地方做事。
          </p>
          <p class="content-2">
            對這座擁有百年歷史的城市來說，台南的豐盛不再只是小吃、古蹟，還有一群在地的年輕人，他們正用自己的力量試圖將這座老城推進到新的時代中，翻轉過去大家對於台南的印象，讓家鄉的美被看見。也許下一次走進台南的巷弄時，也能記得抬頭細細觀察這座城市的美。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            「台南其實有很多藏在巷弄的老招牌都還保留當時的產業型態或樣貌，但這些在城市中的細節卻常常被忽略，或是在一次的雨災中就消失在城市裡」，來自台南善化的設計師湯士賢，過去幾年來透過插畫的方式記錄下藏在城市中的美。
          </p>
          <p class="content-1">
            近年來，台南在「老屋欣力」的推動下，台南像是從一座沉睡的古城中甦醒，從小到店家，大到街道，整座城市都在不斷由舊翻新。然而在一片不斷翻新的城市中，卻鮮少有人真正的抬頭看看這座城的樣貌。
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

export default {
  name: 'ArticleDetail2',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, PayWall },
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
