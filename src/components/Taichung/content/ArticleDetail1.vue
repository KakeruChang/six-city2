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
      <h1 class="title">中區活歷史</h1>
      <h1 class="title">三代老店慶周青果行</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            清晨4點，當整個城市都還在沉睡，70多歲的慶周青果行老闆陳金樹已經起床，開著車出發前往台中果菜市場。
          </p>
          <p class="content-1">
            「陳老闆，今天的蘋果不錯喔！」「你要的貨還沒到捏，來了我再通知你喔。」經營青果行40多年，陳金樹對果菜市場熟門熟路，就像走自家廚房，跟每一攤都能聊上幾句。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taichung/mob/2_Taichung_market_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taichung/pad/2_Taichung_market_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Taichung/web/2_Taichung_market_pic1_web.jpg')
            "
            alt="慶周青果行老闆陳金樹每天早上4點準時出門到台中果菜市場，進最新鮮的水果到店內販賣。"
            >慶周青果行老闆陳金樹每天早上4點準時出門到台中果菜市場，進最新鮮的水果到店內販賣。記者黃仲裕／攝影</ArticleColumnOne
          >
          <p class="content-1">
            回到慶周青果行所在的第二市場，陳金樹卸貨後習慣到市場中央找吃習慣的老店家，以一碗控肉飯開啟新的一天。早上9點，慶周青果行準時開張，招牌在台中市中區第二市場亮了98年，全年無休，日復一日從未間斷。
          </p>
        </ArticleContainer>
        <ArticleYoutube
          src="https://www.youtube.com/embed/PrksaOq4S48"
          :articleMargin="false"
        />
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            慶周青果行開業於民國12年，是第二市場最有歷史的店家之一。牆上掛著由台灣省度量衡檢定所餽贈的「標準商人」，「當時省政府派人來偷偷買水果一個禮拜，發現我們都沒有偷斤減兩，特別送給我們的」，老闆娘連月裡語帶驕傲的說，全台中當時只有5張「標準商人」，如今還開著的店家只剩他們。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taichung/mob/2_Taichung_market_pic2_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taichung/pad/2_Taichung_market_pic2_web.jpg')
            "
            :srcPc="
              require('../../../assets/Taichung/web/2_Taichung_market_pic2_web.jpg')
            "
            alt="上圖為省政府贈與慶周青果行的「標準商人」，下圖為1953年的慶周青果行。"
            >上圖為省政府贈與慶周青果行的「標準商人」，下圖為1953年的慶周青果行。記者黃仲裕／翻攝</ArticleColumnOne
          >
          <p class="content-2">
            第二市場早期被稱為「富貴街」，販賣高級水果、肉品、菜、魚，上門的客人多是日本人或美軍，「我婆婆都是和這些『阿兜仔』說英文的」。販賣高級水果的慶周青果行更是歷屆總統到中台灣必訪的店家之一，前總統蔣中正、蔣經國、李登輝，都來和他們買過水果。
          </p>
          <p class="content-2">
            「蔣中正總統到日月潭時，隨扈都會來這裡買水果給他吃，最常買日本的水蜜桃和大蘋果；小蔣（蔣經國）有糖尿病，不能吃太甜，買芭樂比較多......」，陳金樹和連月裡細數每任總統的喜好，夫婦倆曾碰過前總統李登輝親自到訪，正要帶著兒子上前握手時，一位老兵突然衝出陳情，「隨扈就立刻把總統拉走了，沒握到手真無彩（台語，可惜）」。
          </p>
          <p class="content-2">
            那是第二市場最風光的年代，青果行24小時營業、全年無休，一家人輪班看店，深夜客人仍舊絡繹不絕，市場對面過去有兩間酒家，小姐下班後都會帶客人來買水果。連月裡說，「那時生意真的很好，我都從早上站到晚上，剛結婚還挺著大肚子，腳都站到靜脈曲張」。
          </p>
          <p class="content-2">
            如今晚上到訪第二市場，已經看不到當年的風光，市場周圍漆黑一片，沒有人潮，多數店家都已歇業，只剩青果行招牌孤拎拎的亮著；市場風貌也完全改變，以前以批發和生鮮為主的第二市場，現在則以小吃廣為觀光客所知。
          </p>
          <p class="content-2">
            「差不多民國80年開始，中區就開始慢慢沒落了」。夫婦倆說，當時市場前的道路改成單行道，交通變得較不方便，是人潮開始減少的原因之一；台中市政府開始開發七期之後，市政府遷出中區，帶走大批洽公人潮，市場逐漸蕭條。
          </p>
          <p class="content-2">
            「社會也轉型了，但我們沒有跟著轉」。陳金樹感嘆，汽車普及後，老市場的停車不比大賣場便利；大賣場一次可以採買到所有生活必需品，「到我們這，就只能買水果，不方便啊」，第二市場現在只有做小吃能生存，路上很多老店如蔘藥房、電器行、五金行，陸續關門大吉。
          </p>
          <p class="content-2">
            夫婦倆曾想過要轉型做網購，但誠信一輩子，擔心寄送過程若出差錯，會對不起信任他們水果品質的客人；也曾想過轉做小吃，「年紀大了，沒那體力了」，現在生意雖然冷清，偶爾還是會有老客人光顧，青果行做了三代，也有客人跟著買了三代，「做習慣了，至少還可以混口飯吃，小孩子已經有各自的事業，老了就這樣一天過一天，當成半退休來做吧」。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taichung/mob/2_Taichung_market_pic3_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taichung/pad/2_Taichung_market_pic3_web.jpg')
            "
            :srcPc="
              require('../../../assets/Taichung/web/2_Taichung_market_pic3_web.jpg')
            "
            alt="慶周青果行老闆娘連月裡。"
            >慶周青果行老闆娘連月裡。記者黃仲裕／攝影</ArticleColumnOne
          >
          <p class="content-2">
            「台中在變，但我們的生活其實沒什麼變，還是這樣過」。許多店家雖然歇業，但老鄰居還是住在原店舖樓上，青果行開店時仍會聚在一起聊天喝茶；七期的新大樓一棟接著一棟蓋，一棟比一棟華麗，但第二市場還是靜靜維持原貌，有最純樸的人情味。
          </p>
          <p class="content-2">
            夫婦倆現在唯一的希望，是自己的身體狀況還能再支撐3年，讓慶周青果行成為「百年」老店。「年輕人有自己的規畫，接下來就沒有人要接了，到時候再看看囉。」會不會捨不得？「當然會啊，但不能強求，如果有人願意接手繼續賣水果，那是最好的」。
          </p>
          <p class="content-2">
            採訪告一段落，夫婦倆站在店門口向我們揮手告別，說：「謝謝你們來採訪，就算之後店要收掉，至少還有人幫我們留下一點紀錄」。
          </p>
          <p class="content-2">
            但其實，不是我們紀錄他們，而是他們用畢生歲月，紀錄台中這城市的過去與現在，陪著中區從繁榮到沒落，更保留住第二市場曾經的輝煌，以及老市場無可取代的人情味。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            清晨4點，當整個城市都還在沉睡，70多歲的慶周青果行老闆陳金樹已經起床，開著車出發前往台中果菜市場。
          </p>
          <p class="content-1">
            「陳老闆，今天的蘋果不錯喔！」「你要的貨還沒到捏，來了我再通知你喔。」經營青果行40多年，陳金樹對果菜市場熟門熟路，就像走自家廚房，跟每一攤都能聊上幾句。
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
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail1',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: {
    ArticleContainer,
    ArticleColumnOne,
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
