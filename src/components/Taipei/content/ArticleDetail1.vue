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
      <h1 class="title">台北書店街</h1>
      <h1 class="title">在北車停下腳步的理由</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        台北人的生活步調快，來到台北市交通樞紐「台北車站」商圈（台北人口中的「北車」），每個人都在轉車、換車、在前往不同目的地的路上，這時腳步更是要加快好幾倍，才能跟上台北人的步伐，但在北車，仍有幾間老字號書店，努力撐起幾個讓人停下腳步的空間，同時延續著台北書店街的書香味。
      </p>

      <div>
        <p class="content-1">
          「民國60年到80年代是重慶南路書街最風光的時候，這條路全盛時期有200家書店、出版社等」，重南書街促進會理事長、天龍圖書公司董事長沈榮裕憶起重慶南路書街過往的風華，言語中充滿追憶之情。
        </p>
        <ArticleColumnOne
          v-if="!isHide"
          :srcMob="
            require('../../../assets/Taipei/mob/2_Taipei_taipei_main_station_pic1.jpg')
          "
          :srcPad="
            require('../../../assets/Taipei/pad/2_Taipei_taipei_main_station_pic1.jpg')
          "
          :srcPc="
            require('../../../assets/Taipei/web/2_Taipei_taipei_main_station_pic1.jpg')
          "
          alt="重慶南路過去是知名書店街，全盛時期曾有200家書店、出版社等在此開設。"
          >重慶南路過去是知名書店街，全盛時期曾有200家書店、出版社等在此開設。圖／聯合報系資料照</ArticleColumnOne
        >
      </div>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        在連鎖書店、網路書店興起前，重慶南路是台灣知識含量最高的一條街道，豐厚的藏書常令許多文人、學生、知識份子流連忘返，來台北辦事的外地民眾到北車搭火車返家前，也會特地來這邊翻書、帶幾本書回家。
      </p>
      <p class="content-2">
        現在來到重慶南路，書香味變淡了，取而帶之的是濃濃的商業氣息，銀行、背包客旅館、連鎖商店一間接著一間，手提各式伴手禮的觀光客也取代了曾在這裡逗留的買書人，若想回憶書店街過去的風光，只能從天龍圖書書店、三民書店等20多家書店的身影中想像重慶南路曾有的面貌。
      </p>
      <p class="content-2">
        但即便實體書店式微、民眾大多轉到線上購物，沈榮裕仍堅持要在重慶南路開書店，甚至正積極復興重慶南路的書街文化。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taipei/mob/2_Taipei_taipei_main_station_pic2.jpg')
        "
        :srcPad="
          require('../../../assets/Taipei/pad/2_Taipei_taipei_main_station_pic2.jpg')
        "
        :srcPc="
          require('../../../assets/Taipei/web/2_Taipei_taipei_main_station_pic2.jpg')
        "
        alt="許多老客人常常回到天龍書店選書、看書，也藉此回憶重慶南路書店街當年的風華。"
        >許多老客人常常回到天龍書店選書、看書，也藉此回憶重慶南路書店街當年的風華。記者蘇健忠／攝影</ArticleColumnOne
      >
      <p class="content-2">
        「傳統書店就像是老闆的書店」，在重慶南路經營書店43年的沈榮裕表示，在傳統書店，老闆的角色跟書本一樣重要，老闆和客人的關係就像是朋友一樣，會針對客人需求推薦不同書籍、交流書籍的閱讀心得，「很多客人移民到國外，都60、70歲了，每次回到台灣，都會特地繞過來這邊看一看」。
      </p>
      <p class="content-2">
        「文明城市沒有書店，就像沒有燈」，沈榮裕感嘆，若重慶南路書街消失了，台北便會少了一個文化重鎮，看著書店外來來去去的過客，對比在書店內安靜翻書的客人，也許屆時一併消失的，還有讓人願意在北車停下腳步的理由。
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
