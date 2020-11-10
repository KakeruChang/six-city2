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
      <h1 class="title">清水的故事 我們的身世：</h1>
      <h1 class="title">找回世代與土地的鏈結</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「我雖然是清水人，但我以前對清水很不熟，從小我們就被教育訓練出很資本的想法，要考上好大學、到城市拼前程，但
        <span style="font-weight:bold"
          >長大後會有一種斷鏈感，常幫別人關心土地，卻不認識自己生長的土地。</span
        >」
      </p>
      <p class="content-1">
        出生於工人家庭的楊慧姿，北漂南漂都漂過，但漂到最後很不踏實，發現自己從來沒有好好看過養育她長大、給她生命養分的土地和家庭。於是她返鄉，敞開心胸與工人父母和解，並成立清水土野社區共學教室，讓社區裡的每個人，都能在教室裡找到自己存在的價值。
      </p>
      <p class="content-1">
        她相信，唯有顧好土地上的人與情感，土地才不會在城市的高速發展與變動下迷失。
      </p>
      <ArticleQuote
        borderColor="transparent"
        color="#eeeeee"
        refer="清水土野社區共學教室創辦人 楊慧姿"
        text="我想串起大家的情感，紀錄這裡的歷史。希望大家未來對清水的認識，不只是高美濕地和清水休息站。"
      />
      <p class="content-1">
        台中海線梧棲、清水一帶，聚集了很多做工的人。經濟起飛時台中市區蓋了很多房子，海線這帶原本大家主要靠務農為生，若想要有更高的收入就是做工，因此形成很多工班，往市區去蓋房子。
        <span style="font-weight:bold"
          >對台中縣（升格前）資源相對比較少的人來說，做工幾乎是唯一的選擇</span
        >
        。
      </p>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        我出生幾個月後就給二姑姑養，是別人家養大的小孩，因為家裡沒有錢，父母眼睛打開就是一直做工，直到幼稚園我才回到真正的家。工班都住工寮，我兒時唯一的記憶是，若剛好工地在清水，我會被帶去一下，但大人都說很髒、不要碰，也不希望孩子做工，說太辛苦了。
      </p>
      <p class="content-2">
        所以我一直覺得工地這件事離我很遠，甚至覺得工人抽菸、喝酒、嚼檳榔很髒。大學要搬宿舍時，我都希望我爸不要來，我不希望爸爸在同學面前出現。
      </p>
      <p class="content-2">
        我爸講話很兇，但直到我研究所做田野調查，回老家訪談工頭，才知道這種講話方式才能管理工人，而且工地環境很吵，自然就會講話很大聲。我那時在工地跟工頭聊天，我就說：「你看，我爸又在兇了」，但他們都說：「沒有啊，他沒有在兇，他只是在講話」。
      </p>
      <p class="content-2">
        菸和檳榔，是工地裡面的調劑，工人身心勞動很大，也是社交工具。
        <span style="font-weight:bold"
          >我們覺得菸和檳榔髒，是因為社會教育我們這件事不好。</span
        >
      </p>
      <p class="content-2">
        決定返鄉很大原因也是因為父母。父母這幾年身體不好，工作減量很多，工人一旦覺得身體不能再做，對他們而言就是等死，退休從來不是一個選項。我想回來找些事情和父母一起做，讓他們生活有重心。
      </p>

      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/4_Taichung_Qingshui_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/4_Taichung_Qingshui_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/4_Taichung_Qingshui_pic1_web.jpg')
        "
        alt="清水土野社區共學教室改造前後。"
        >清水土野社區共學教室改造前後。圖／清水土野社區共學教室提供</ArticleColumnOne
      >
      <p class="content-2">
        社區教室這個空間是以前的老家，裡面堆放了很多做土水的工具，我和爸爸一起重新設計這個空間，返鄉時我準備了30萬，清水最有名的就是東北季風，全棟都要換氣密窗，水電也都要重新牽線，換下來就沒錢了，空間裡很多地方，例如廁所，都是我父親自己蓋的。
      </p>
      <p class="content-2">
        我發現，當從零到有參與一個空間，就會有情感產生。
      </p>
      <p class="content-2">
        社區教室有一個很核心的信念：
        <span style="font-weight:bold"
          >每個人都有自己的存在價值，大家都能參與。這是我從父母親身上學到的，我母親是工人裡面最底層的「小工」，但他們在工作上都有自己的價值</span
        >。
      </p>
      <p class="content-2">
        這個空間現在是大家一起交流專長的地方，我沒有設限議題和方向，大家都可以來，課輔、英文共學、文化交流都在這裡發生，社區有多元可能性。我母親現在變成我們辦活動時的「總鋪師」，找了社區媽媽一起來做菜給大家吃；也讓老人家一起進到社區，教年輕人做脆梅、做湯圓。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/4_Taichung_Qingshui_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/4_Taichung_Qingshui_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/4_Taichung_Qingshui_pic2_web.jpg')
        "
        alt="清水土野社區共學教室裡面有各種可能性，不論長輩或孩子，都可以在這個空間裡找到自己的價值。"
        >清水土野社區共學教室裡面有各種可能性，不論長輩或孩子，都可以在這個空間裡找到自己的價值。圖／清水土野社區共學教室提供</ArticleColumnOne
      >
      <h2 style="margin-bottom:0px">城市發展、年輕人離鄉</h2>
      <h2 style="margin-bottom:18px">情感與記憶消失得太快</h2>
      <p class="content-2">
        海線一帶，大甲因為大甲鎮瀾宮、媽祖遶境，每年帶進遶境財和觀光商機；沙鹿有大學，梧棲的青年團隊、新店家不少，都慢慢發展起來。最近清水一帶也開始蓋大量的房子，可能市區飽和了，房價慢慢被炒起來，在地人愈來愈買不起。
      </p>
      <p class="content-2">
        清水人其實不太習慣走出生活常軌，但這裡的地域性是很強的，清水沒有秘密。例如我只要跟新朋友或男生在這區走一走，隔天就會傳開，父母會透過鄰居知道，這裡每個人自帶擴音機。
      </p>
      <p class="content-2">
        年輕人卻幾乎失去這樣的地域性。多數年輕人都去台中市區或外縣市工作，不會在鄰里走動，我有一次跟隔壁的阿姨聊天，突然感嘆：「我阿嬤以前都會跟你們聊天，但我都不認識你的兒子、女兒，有一天你不在了，我們兩家就不認識了」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/4_Taichung_Qingshui_pic3_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/4_Taichung_Qingshui_pic3_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/4_Taichung_Qingshui_pic3_web.jpg')
        "
        alt="返鄉之前，楊慧姿幾乎不認識任何一個鄰居，所有人都是開始做共學教室之後才陸續認識，經營兩年，在地鄰里從對她充滿質疑到願意動員協助，讓她很感動。"
        >返鄉之前，楊慧姿幾乎不認識任何一個鄰居，所有人都是開始做共學教室之後才陸續認識，經營兩年，在地鄰里從對她充滿質疑到願意動員協助，讓她很感動。記者黃仲裕／攝影</ArticleColumnOne
      >
      <p class="content-2">
        我想串起大家的情感，紀錄這裡的歷史。清水子弟一直在往外移，但長輩身上有很多在地故事，希望大家未來對清水的認識，不只是高美濕地和清水休息站。
      </p>
      <p class="content-2">
        例如之前附近唯一的一間柑仔店因為7-11進駐收店，我有次問柑仔店阿嬤為什麼店收起來，阿嬤眼淚就流下來了，很捨不得。如果有個人能記錄下他們的故事和情感，或許他們就不會那麼遺憾，現在一切都消失得太快。
      </p>
      <p class="content-2">
        這裡老年人口的比例是高的，老人家都會覺得沒什麼好講，但一個個都是故事。像我媽，她從來沒想過自己做工的照片會被印出來放在社區教室裡，她也很可愛，什麼都沒跟我說，但有一天問孫子：「你覺得阿嬤這張照片怎麼樣？阿嬤在剷土耶！」就知道她其實是高興的。
      </p>
      <p class="content-2">
        清水人總是顧好自己的地域，那情感是很深的。附近的工人從不知道我在幹嘛，到現在這些叔叔們都會來幫忙，在地、世代之間的關係連結已經慢慢在改變。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleQuote from '../../common/ui/ArticleQuote'

export default {
  name: 'ArticleDetail3',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleQuote },
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

h2 {
  font-size: 24px;
  font-weight: bold;
  line-height: 1.5;
}
</style>
