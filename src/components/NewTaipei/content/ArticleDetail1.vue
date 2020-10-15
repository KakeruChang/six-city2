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
      <h1 class="title">留下記憶中的老淡水</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「拆、拆、拆、蓋、蓋、蓋」是近年來在新北市各地響起的節奏，為了拚發展、吸人潮，一棟棟緊密相連的高樓取代了低矮的傳統樓房，也重寫了新北市各地的面貌。「現在都在追求土地極限利用，這在新北市特別嚴重，」人稱「淡水阿忠哥」的程許忠是老淡水人，過去30年來，持續用黑白影像紀錄淡水的美，而隨著淡水這幾年快速發展，阿忠哥的鏡頭也肩負了重要任務：好好把正一點一滴流失的老淡水留下來。
      </p>

      <p class="content-1">
        過去的淡水，有純樸的民風、老房子、舢舨船，還有人在淡水河中游泳；現在的淡水，老房子被拆了、舢舨船的身影也消失了，取而代之的是眾多的遊客、新蓋的大樓、和被鐵欄杆阻隔在外的淡水河。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/New-Taipei/mob/2_New-Taipei_Tamsui_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/New-Taipei/pad/2_New-Taipei_Tamsui_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/New-Taipei/web/2_New-Taipei_Tamsui_pic1_web.jpg')
        "
        alt="過去30年來，淡水阿忠哥持續用影像紀錄淡水的美，也把正一點一滴流失的老淡水留下來。"
        >過去30年來，淡水阿忠哥持續用影像紀錄淡水的美，也把正一點一滴流失的老淡水留下來。記者林伯東／攝影</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        1997年是老淡水的面貌開始流失的年份，在此之前，淡水是個純樸的小鎮，人與人之間、人與河岸之間的距離都很近，1997年淡水捷運開通後，一天來了30萬人，直搗老淡水人的生活空間，阿忠哥回憶，「那天淡水老街人行道上一層油膩，遊客吃的東西滴到地上，垃圾桶滿出來，飲料打翻在地上，踩到後被拖來拖去，地上都一層黑黑的」。
      </p>
      <p class="content-2">
        捷運開通後，人來了、錢進來了，政府也開始整治淡水河岸，卻也壓縮了老淡水人的生活空間。「以前淡水人心情不好時，騎個機車或腳踏車就能到淡水河邊散心、發呆」，阿忠哥感嘆，「現在只有在中午12點前，淡水河才是屬於淡水人的，12點過後，淡水河岸變成徒步區，淡水河就變成觀光客的。」
      </p>
      <p class="content-2">
        淡水在鏡頭下的改變顯而易見，觀光客變多了、舊的房子被拆掉、新的樓房愈蓋愈高，那鏡頭外的改變呢？
      </p>
      <p class="content-2">
        「人與人之間的情感不見了」，過去阿忠哥出門時，一路上若沒有遇到三個可以打招呼的朋友，「就會覺得這一趟有點遜」，但隨著淡水的居住環境改變，電梯大廈愈蓋愈高，直上直下的電梯阻隔了不同樓層的住戶，人與人之間相互的關心和問候也被沖淡了。
      </p>
      <p class="content-2">
        為了留下記憶中的老淡水，阿忠哥在30年前接觸攝影後，便開始拍攝老淡水人的日常生活，每一張照片中的人物是誰、是誰的親戚、正在做甚麼，阿忠哥都如數家珍，「因為是淡水人，你會有很多的記憶、很多的人、很多的故事，不是只有風景而已」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/New-Taipei/mob/2_New-Taipei_Tamsui_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/New-Taipei/pad/2_New-Taipei_Tamsui_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/New-Taipei/web/2_New-Taipei_Tamsui_pic2_web.jpg')
        "
        alt="1997年捷運開通後，淡水迅速變化，原本古樸的一面已不復見，老淡水的美只留在阿忠哥拍攝的黑白影像中。"
        >1997年捷運開通後，淡水迅速變化，原本古樸的一面已不復見，老淡水的美只留在阿忠哥拍攝的黑白影像中。圖／程許忠提供</ArticleColumnOne
      >
      <p class="content-2">
        阿忠哥甚至為自己列下「出了淡水就不拍照」的規矩，以專注把淡水拍好、好好說淡水的故事。「大家只知道來淡水要要看夕陽，但淡水的美其實是3D的」，不論是從渡船頭、坐船到淡水河中央、還是爬到觀音山上看淡水，都會看見淡水各種姿態的美，這些美景阿忠哥怎麼看都看不膩、怎麼拍都拍不完。
      </p>
      <p class="content-2">
        阿忠哥的鏡頭不僅記錄了老淡水的美，更曾成功搶救所剩無幾的老淡水面貌。2010年，當怪手即將開進阿忠哥從小長大的重建街，他決定站出來，用自己最擅長的攝影為重建街做點事，「確定要來拆重建街的時候，這個是很大的衝擊。再看一下整個淡水周遭，老房子都不見了，剩下什麼？我還願意回來重建街嗎？」為了留下對重建街最美的記憶，阿忠哥發起「站滿重建街」活動，號召民眾在重建街消失前，回到重建街一起拍張大合照。
      </p>
      <p class="content-2">
        結果一場活動，卻讓愈來愈多人看見重建街的美，年輕人開始以舉辦市集、開設特色商店等方式進駐重建街，成功阻擋了原本將開進重建街的怪手，也保留了老淡水一個角落的美。
      </p>
      <p class="content-2">
        「人會覺得一生美好，是因為我們有記憶，我們對周遭的人、老房子、巷弄有情感」，阿忠哥透過攝影，記錄了淡水曾經有的面貌，也為老淡水留下了重建街；未來，當新北市各區繼續響起「拆、拆、拆、蓋、蓋、蓋」的節奏，重建街則會延續屬於老淡水的旋律，為老淡水人留下家鄉最美的記憶。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail1',
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
