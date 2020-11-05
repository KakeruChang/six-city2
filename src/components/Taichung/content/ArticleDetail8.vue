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
      <h1 class="title">為豐原人搭一條回家的路</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「今天帶你們在豐原市區走一圈，發現招租的店又變多了，你看這間『三民書局』，跟你們台北的三民書局不一樣喔，後來我才知道它是豐原獨有的『獨立書店』，我們以前都在這買書，現在也關了」。
      </p>
      <p class="content-1">
        走在最前頭的傅智恆，看著四周掛著「租」、「售」牌子的店鋪，感嘆地說了這麼一句。
      </p>
      <p class="content-1">
        豐原區在台中縣市尚未合併之前，是台中縣的縣轄市，也是山線神岡、石崗、后里等地的重要轉運站，「豐原人以前是驕傲的，商業蓬勃、有錢人多」，但縣市合併之後縣政府消失，當地人潮與商機也慢慢流失，這些年來豐原發展停滯，年輕人在家鄉沒有就業機會，紛紛出走。
      </p>
      <p class="content-1">
        「我想要為山線的年輕人，做出一條回家的路」。在豐原土生土長、今年33歲的傅智恆從台北回到台中，成立藝造豐原協會，「但我們沒有要馬上鼓吹青年返鄉，這四個字現在變得太崇高了，沒有東西，叫人家怎麼返鄉？」
      </p>
      <p class="content-1">
        協會現在想做的，是先挖掘豐原的在地記憶、找出豐原到底有什麼，並透過聲音地景工作坊、市集等活動，增加豐原年輕人的回家次數，「常回家、有連結，才會想為家鄉做點事」。
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <h2>豐原人血液裡的辣椒醬 不是東泉</h2>
      <p class="content-2">
        東泉辣椒醬、大麵羹、麻薏湯被台中市前市長林佳龍稱為台中三寶，台中小吃攤上隨處可見東泉辣椒醬濃稠的紅色身影，但在豐原老一輩人心中，炒麵上的辣椒醬從來就不是東泉，而是工廠在神岡的山線品牌「源美」。
      </p>

      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/8_Taichung_Fengyuan_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/8_Taichung_Fengyuan_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/8_Taichung_Fengyuan_pic1_web.jpg')
        "
        alt=""
      />
      <p class="content-2">
        藝造豐原協會曾做過一支街訪短片，詢問豐原人吃得是哪牌辣椒醬，發現年輕人多數都說「只聽過東泉」，但老一輩都說「豐原都只有用源美啦，卡好吃，從小吃到大」。
      </p>
      <p class="content-2">
        傅智恆觀察，不只豐原，山線一帶小吃攤確實多數都是用源美辣椒醬，但很多豐原年輕人只認識廣為人知的東泉，不知道自己從小吃到大的其實是源美。一罐辣椒醬，凸顯出年輕人對在地產業與家鄉特色的斷鏈。
      </p>
      <p class="content-2">
        「我也是回家之後，才回過頭去認識豐原」。傅智恆笑說，他這輩子原本想的都是離開台中，大學填志願時刻意不填台中的學校；畢業後家人一直很希望他能回台中工作，但台北對他來說充滿吸引力，有很多機會可以接觸新事物，「回家，會想工作機會在哪？回來要幹嘛？」
      </p>
      <h2 style="padding-top:48px">什麼是豐原？</h2>
      <p class="content-2">
        在家人期待下，最後傅智恆還是回到了家鄉，但他一回到豐原，「覺得豐原發展愈來愈往下，市區很多店和戲院都關了，沒有什麼新建設，小時候還比較熱鬧，例如兒時市區還有兩家戲院，總督戲院和豐原戲院，現在一家已經倒掉了」。
      </p>
      <p class="content-2">
        在全台古蹟活化、文創咖啡廳正夯時，豐原誕生了幾間外觀美麗的咖啡廳，也有80年老建築活化為展覽空間和咖啡廳，「但豐原現在沒有人氣，產業蕭條、人口外移」，光靠這些，沒有辦法有效幫助豐原重新熱絡起來，在地人更是無感。
      </p>
      <p class="content-2">
        傅智恆說，豐原以前產業豐富，煙草業、木材加工業、漆器、餅業等都在這裡蓬勃發展；市區聚集大量銀行和醫院，都是因應商業發達而生，是豐原人的驕傲，「我想幫豐原找回人氣，但又不是靠蓋一個打卡景點這樣的方式」。
      </p>
      <p class="content-2">
        同是年輕人的傅智恆觀察，近年來年輕人對於「認識家鄉」這件事，「需求明顯成長」，願意返鄉投票就是一個明確指標，年輕人關心家鄉發展，渴望更了解自己來自哪裡，「我想創造讓年輕人了解家鄉的機會，有新事情發生，才會有更多可能性」。
      </p>
      <h2 style="margin-bottom:0">台銀豆花叫賣聲、水圳流水聲</h2>
      <h2 style="margin-bottom:48px">尋找屬於豐原人的聲音</h2>
      <div class="voice-wrapper" style="margin-bottom:0">
        <div class="voice-text">聽豐東黃昏市場的聲音</div>
        <VoiceStoryPlay
          :voiceSrc="
            require('../../../assets/Taichung/8_Taichung_Fengyuan_voice.mp3')
          "
          titleGA="聽豐東黃昏市場的聲音"
          mode="light"
          :imgPlay="require('../../../assets/Taichung/play_Taichung.svg')"
          :imgStop="require('../../../assets/Taichung/stop_Taichung.svg')"
        />
      </div>
      <div class="audio-source">藝造豐原協會提供</div>
      <p class="content-2">
        藝造豐原協會今年正式成立，協會的出現不只吸引豐原在地青年參與，鄰近神岡、石岡等區的年輕人也來響應，大家在工作之餘聚集在一起，共同思考可以做些什麼，來攪動城市沉寂的死水。
      </p>
      <p class="content-2">
        協會在2020年8月剛結束第一階段的聲音地景工作坊，找了聲音專業的講師教大家怎麼搜集生活週遭的豐原聲音。「例如市區的台灣銀行旁邊，以前有一間豆花，沒有招牌，大家都直接叫它台銀豆花，攤販的叫賣聲，或者我家旁邊的水圳流水聲，都是我想記錄的素材」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/8_Taichung_Fengyuan_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/8_Taichung_Fengyuan_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/8_Taichung_Fengyuan_pic2_web.jpg')
        "
        alt="聲音地景工作坊課堂實況與課堂成果之一、聲音明信片。"
        >聲音地景工作坊課堂實況與課堂成果之一、聲音明信片。圖／藝造豐原協會提供</ArticleColumnOne
      >
      <p class="content-2">
        工作坊吸引了不少年輕人回鄉參加，也吸引了幾位在地長輩參與。第一階段課程上完後，學員會出發去找素材，等素材蒐集到一定程度，協會規劃將這些聲音做成豐原的聲音資料庫，或繼續發展成在地導覽小旅行。
      </p>
      <p class="content-2">
        協會也舉辦現在最夯的市集，但結合豐原在地店家和產業，找了許多豐原小型店家、攤商參加，給這些店家一個舞台，也打破在地居民原本對「市集＝市場」的想像。
      </p>
      <p class="content-2">
        協會另找了各地「事業有成」的豐原人找回來舉辦講座，例如在地作家裏右、作品躍上國際影展的導演林龍吟等，「想把這些厲害的豐原人找回來，成為連結在地的一條管道」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/8_Taichung_Fengyuan_pic3_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/8_Taichung_Fengyuan_pic3_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/8_Taichung_Fengyuan_pic3_web.jpg')
        "
        alt="上圖為豐原導演林龍吟回家鄉舉辦電影《蚵豐村》映前講座，下圖為協會舉辦的微型市集。"
        >上圖為豐原導演林龍吟回家鄉舉辦電影《蚵豐村》映前講座，下圖為協會舉辦的微型市集。圖／藝造豐原協會提供</ArticleColumnOne
      >
      <p class="content-2">
        「現在活動都還很軟性，但想先讓大家對『豐原』有感覺」。問到傅智恆的最終期待，他有些害羞地說，他的目標有點大，但他
        <span style="font-weight:bold">很希望豐原能成為一個「機會之地」</span
        >，台中市區已漸漸出現過度都市化的問題，豐原其實離市區火車只要20幾分鐘，若能有所發展，將可以成為山線周圍年輕人返鄉工作與生活的契機。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import VoiceStoryPlay from '../../voice_story/VoiceStoryPlay'

export default {
  name: 'ArticleDetail8',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, VoiceStoryPlay },
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
@import '@/style/voice.scss';

.voice-text {
  color: #e2d157;
}
h2 {
  font-size: 24px;
  font-weight: bold;
  line-height: 1.5;
}
.audio-source {
  font-size: 16px;
  line-height: 1.5;
  text-align: right;
  color: #999999;
  margin: 15.5px 0 49px;
}
</style>
