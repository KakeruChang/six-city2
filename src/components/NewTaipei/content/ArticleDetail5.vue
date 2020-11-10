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
      <h1 class="title">新北市其實很騷</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        對新北市的居民來說，「我是新北人」這句話，總是有點難說出口。
      </p>
      <p class="content-1">
        「新北市真的太大了！」新北市市民常會這麼說。新北市上至石門、下至烏來、東至貢寮、西至林口，即便都屬於新北市，但由於各區都有自己的特色及獨立生活圈、彼此之間少有共鳴，導致新北市的居民在接受「新北人」這個統稱時，總覺得有些不習慣。
      </p>
      <p class="content-1">
        「台北市不管是中山、景美、中正區，都會說自己是台北市民，可是新北在合併以前，我們不會去講自己是台北縣民，比較習慣講自己是新莊、三重人」，新北市新莊在地人梁勝欽表示，新北市每個地區都有不一樣的文化和特色，金山和萬里有海岸、坪林是茶鄉、烏來有原住民文化和溫泉，老新莊人則是以新莊廟街文化為傲。
      </p>
      <p class="content-1">
        新北市汐止在地人黃珮綺指出，若把新北市各區都算在新北市內，每一區就會有一種壓力，「覺得我要跟別人不一樣，我要有所謂新北的特色，可是新北的特色，其實就是這麼的包容跟多元」。
      </p>
    </ArticleContainer>

    <ArticleYoutube
      src="https://www.youtube.com/embed/FB_REAoi50Y"
      :articleMargin="false"
    />

    <ArticleContainer v-if="!isHide">
      <p class="content-2 title">幫新北市平反 找回草根力量</p>
      <p class="content-2">
        大台北生活圈形成後，新北市和台北市之間的距離變得更緊密，新北人也開始會拿台北市與自己的家鄉比較，「新北市常給人一種悶悶的、台台的印象，好像沒有很高級」，梁勝欽表示，很多人覺得新北市很悶、沒有什麼好玩的，被問到來自哪裡時，有些新北人甚至會回答「我是台北人」，因為「怕別人會覺得新北市比較落後」。
      </p>
      <p class="content-2">
        但近年來，愈來愈多深根新北市的在地團隊開始為新北市平反，透過挖掘新北市各地的特色與文化，一點一滴累積新北市的草根性力量，也從中一點一滴找回新北人的自信。
      </p>
      <p class="content-2">
        「大家常以為新北市很悶，但她其實很『騷』！」為了挖掘新北市的「騷」，梁勝欽與幾位夥伴從新莊出發，一同創辦「新莊騷」地方誌，介紹新莊的特色景點及城市故事，以扭轉一般人對新莊的印象，「『新莊騷』這個詞有種意涵，你覺得新莊好像很悶，但他蘊含很多能量，接受新莊很騷後，新莊人的自信心就會出來」。
      </p>
      <p class="content-2">
        「像新莊這種衛星城市，流失的不是人口，而是人心」，從台北市搭捷運到新莊，從幸福站出站後，迎面而來的是車水馬龍的大馬路和新建的高樓大廈，梁勝欽指出，新莊看似繁華的外表下，隱藏的卻是新莊人對家鄉極低的認同感，便利的交通催生了新建案，也大大拉高了房價，「在新莊，回鄉創業是不可能的，新莊人還是只能去台北上班，而且在汲汲營營的狀態下，大家根本沒有心思去了解家鄉。」
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/New-Taipei/mob/5_New_Taipei_multiculture_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/New-Taipei/pad/5_New_Taipei_multiculture_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/New-Taipei/web/5_New_Taipei_multiculture_pic1_web.jpg')
        "
        alt="新北市新莊在地人梁勝欽和江欣諭等幾位夥伴一同創辦「新莊騷」地方誌，介紹新莊的特色景點及城市故事，以扭轉一般人對新莊的印象。"
        >新北市新莊在地人梁勝欽和江欣諭等幾位夥伴一同創辦「新莊騷」地方誌，介紹新莊的特色景點及城市故事，以扭轉一般人對新莊的印象。記者曾原信／攝影</ArticleColumnOne
      >
      <p class="content-2 title">不當臥房城市 「騷」出認同</p>
      <p class="content-2">
        「認同感是慢慢累積出來的」，負責新莊騷的企劃的江欣諭指出，「你愈認識一個地方，就會想挖掘愈多故事，這樣子對於居住的地方就會產生感情」，若沒有花時間在地方、不知道這個地方的故事和文化的厚度，就只會把這個地方當成回家睡覺的「臥房城市」。
      </p>
      <p class="content-2">
        「辦雜誌是絕對不會賺錢的」，新莊騷團隊表示，但雜誌可以做為媒介，串聯對新莊感興趣的所有人，也觸碰到不曾停下腳步好好認識新莊的人，不論是年輕人、老年人還是中生代都能從雜誌中找到對新莊的共鳴點，進而產生許多互動與連結。
      </p>
      <p class="content-2">
        江欣諭表示，相較於上個世代，現在20、30歲的世代有較多時間和資源去挖掘自己家鄉的故事，「我們這一代對於庸庸碌碌的生活會感到非常迷茫，有的時候會想要問自己，我是誰？我從哪裡來？我來的地方有什麼故事嗎？」
      </p>
      <p class="content-2">
        希望未來，在新北市不同在地團隊的努力下，更多人可以看見新北市的「騷」，從中慢慢累積對新北市的認同感，就如同江欣諭說的，許多人不斷找尋人生的目的，但「其實找到你的根，你就有目的了」。
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

.content-2 {
  font-size: 20px;
  line-height: 1.7;
  color: #171717;
  &.title {
    font-size: 24px;
    margin-top: 32px;
    font-family: source-han-sans-cjk-tc, 'Noto Sans TC', 'Microsoft JhengHei',
      Roboto, sans-serif;
    font-weight: bold;
    line-height: 1.5;
    color: #121212;
  }
}
</style>
