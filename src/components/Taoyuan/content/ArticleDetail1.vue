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
      <h1 class="title">留下桃園的老樣子</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        近年來，桃園的城市面貌出現不少變化，不論是航空城計畫、隨處可見的新建案、道路開發、鐵路地下化等等，整座城市不斷在為「新的桃園」做準備；在一片「求新求變、求進步」的聲浪中，卻存在一絲細微的聲音，努力守護著老桃園的面貌。
      </p>

      <p class="content-1">
        「這4、5年來，很多東西就是一直消失、一直消失、一直被拆」，中壢五號倉庫藝文基地成員鄧惠如感嘆，舊的桃園正不斷遭到拆除，這幾年來，東門市場消失了、中壢大時鐘被拆了、第一銀行中壢分行也成為往事，這些老建築都見證了桃園曾走過的歷史，但隨著土地開發、都市建設興起，一棟棟老建築被視為阻檔桃園前進的障礙，要將它們夷為平地，只需要不到一天的時間。
      </p>
      <p class="content-1">
        「如果這些老建築留下來，我能想像是多美好的樣子，但要怎麼讓大家知道，把這些東西留下來是重要的？」中壢火車站附近曾有一整排日治時期留下來的鐵道倉庫，隨著時代變遷，成排的倉庫已所剩無幾，為了保存仍未被拆除的倉庫，2014年起在桃園推廣在地藝術文化的「桃園藝文陣線」團隊另成立「中壢五號倉庫藝文基地」，將倉庫改造成藝文基地，利用這個空間講述中壢火車站旁鐵道倉庫的歷史，同時舉辦藝文活動，讓中壢人和外地人想像和老建築互動的更多可能性。
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        「桃園現在的想像真的太單一了」，中壢五號倉庫藝文基地成員劉醇遠表示，桃園正急欲發展新的城市面貌，以和其他城市做區隔，但其實只要用心去探索，就會發現
        <span style="font-weight: bold"
          >這座城市的特色就隱藏在大街小巷中，不論是路邊的老建築、街角的雜貨店，桃園的故事就藏在這一景一物中，不需要急著以新的建案覆蓋桃園累積好幾代的歷史脈絡</span
        >。
      </p>
      <p class="content-2">
        過去幾年來，中壢五號倉庫藝文基地的團隊不斷在桃園、中壢等地蒐集各地的故事，他們舉辦「回桃看藝術節」、發起中壢街區博物館活動，挖掘這座城市各個角落的故事，並透過藝術等互動，讓在地人更了解腳下這塊土地的歷史脈絡，劉醇遠指出，「每個地方都需要有自己的故事或故事館，即便你覺得這座城市又髒又亂，但知道她的故事後，你起碼可以說說，這個地方發生過什麼事情」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taoyuan/mob/2_Taoyuan_old-building_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taoyuan/pad/2_Taoyuan_old-building_pic1.jpg')
        "
        :srcPc="
          require('../../../assets/Taoyuan/web/2_Taoyuan_old-building_pic1.jpg')
        "
        alt="桃園藝文陣線舉辦「回桃看藝術節」，透過藝術等互動，讓在地人更了解腳下這塊土地的歷史脈絡。"
        >桃園藝文陣線舉辦「回桃看藝術節」，透過藝術等互動，讓在地人更了解腳下這塊土地的歷史脈絡。圖／桃園藝文陣線提供</ArticleColumnOne
      >
      <p class="content-2">
        一個城市的特色和文化是不斷累積的，劉醇遠表示，希望未來的桃園能夠擁有具辨識度的文化特色和印象，「我覺得桃園最缺的就是這個，<span
          style="font-weight: bold"
          >大家想到桃園還是航空城、某個建案，一旦只用這些東西去辨識城市，這座城市其實滿可憐的，我會希望新舊並存</span
        >」。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail0',
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
