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
      <h1 class="title">致20年後的美麗高雄</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        <span style="font-weight:bolder"
          >編者按：2020年高雄市長補選前，清華大學人文社會學院學士班大二生張穗風曾以「給未來的高雄市長：請聽聽高雄囝仔想要的高雄」一文投書天下獨立評論，身為北漂的高雄青年，張穗風渴求未來的高雄市長在市政規劃納入重工業轉型、正視空汙課題，讓高雄的產業布局和生活品質煥然一新。</span
        >
      </p>
      <p class="content-1">
        <span style="font-weight:bolder"
          >2021年，高雄人仍持續為這座城市的問題找解方，我們邀請穗風撰文，從高雄年輕人的角度看這座城市，也寫下他所期待的20年後的高雄樣貌。
        </span>
      </p>
      <p class="content-1">
        我是一位在客家農村長大的小孩，出生於美濃。我所想像的美麗高雄有許多面向：生活環境宜居，都市裏頭有著足夠的綠地，讓民眾可以更為接近自然；就業市場友善，讓北漂的年輕人可以回流、找到自己心之所向的工作，更可藉著在地產業的特色深化，讓全台灣的青年都願意來到高雄一展抱負。
      </p>
      <p class="content-1">
        我們從2020年就職的陳其邁市長在競選時提出的「四大優先」，包括：一、產業轉型；二、增加就業機會；三、重大交通建設；四、解決空氣汙染，來看現今高雄面臨到的基本問題。
      </p>
      <p class="content-1">
        <span style="font-weight:bolder"
          >以下將分別從回應第一點的「產業轉型」、第三點的「都會交通」，[1]以及四大優先中未提及的「農村發展」，來探討20年後高雄的願景。
        </span>
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <h2>除了工業之外的高雄？</h2>
      <p class="content-2">
        2014年高雄發生氣爆時，當時還在就讀國中的我從報紙看到這則新聞，驚訝地發現平日所經過的高雄市區，馬路下原來竟埋著石化管線，報紙上的氣爆照片歷歷在目，也讓我意識到高雄身為重工業城市的事實；高中時和家人偕同前往紅毛港的路途上，經過臨海工業區時，看見中鋼等規模龐大的廠區坐落於海邊，其景色也讓生活在農村的我頓時驚然。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Kaohsiung/mob/7_Kaohsiung_20_Years_Later_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Kaohsiung/pad/7_Kaohsiung_20_Years_Later_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Kaohsiung/web/7_Kaohsiung_20_Years_Later_pic1_web.jpg')
        "
        alt="2014年的高雄氣爆造成嚴重死傷，也讓高雄市政府及許多高雄市民開始正視地下管線問題。"
        >2014年的高雄氣爆造成嚴重死傷，也讓高雄市政府及許多高雄市民開始正視地下管線問題。圖／聯合報系資料照</ArticleColumnOne
      >
      <p class="content-2">
        高雄曾經非常依賴重工業，但進入到21世紀之後，是否應該重新審思高雄整體產業的發展規劃？和台北以金融業和服務業為主的產業結構，以及具備從設計、製造、到行銷的完整產業鏈相比較，蒙受多年重工業汙染的高雄一直位在產業鏈下游，導致青年在就業上無法具備相對多元的選擇，為數不少的高雄青年因此在就業階段選擇遠走他鄉。
      </p>
      <p class="content-2">
        我曾撰文表示，「<span style="font-weight:bolder"
          >高雄青年理想的就業環境，不會是一個周遭充斥著工廠，地底下也埋著石化管線，每到年末歲初的秋冬之際還會壟罩於霧霾中的都市</span
        >」。我希望20年後的高雄，地下不再有運行的石化管線、秋冬之際向窗外望去不會是灰矇矇的景色，高雄居民也能夠享有安全而多元的就業選擇，並能夠在此地安居樂業。
      </p>
      <h2 class="mt-80">市區交通許多愁？</h2>
      <p class="content-2">
        在討論高雄的空汙問題時，大多數民眾所關注的為高雄目前仍在運行的眾多工業區，但私人載具所產生的移動汙染源，也是空汙問題中不可忽視的要素，因此以下我會藉公共交通的討論，帶出市區空汙問題的一些解套方案，並從四大優先中的「重大交通建設」開展出市區的規劃藍圖。
      </p>
      <p class="content-2">
        2020年暑假曾在台北實習6周，在實習的過程中，我看到許多台北市在公共交通面向上的規劃，因此我想要以在台北的經驗，作為給高雄的意見發想。台北相較於高雄而言，無論是捷運路網的鋪設、公車專用道的闢建，或是共享單車的設點，規劃上都來得更為具有全面性。在台北實習的那段時間，我也體認到一個在新興都市重要的觀念—「路權」。透過讓更多用路人了解到路權的觀念，我想許多公共交通的問題也許能夠迎刃而解。
      </p>
      <p class="content-2">
        取材台北的用路經驗後，因應高雄市區路網交通繁忙所導致之塞車問題，我想給予高雄的建議是：一、可在容易塞車之路段，如東西向或南北向道路，推動<span
          style="font-weight:bolder"
          >公車專用道</span
        >之闢建，並在人口密集處增加<span style="font-weight:bolder"
          >公共路網建設</span
        >，將私人載具之龐大運量分流至公共運輸；二、<span
          style="font-weight:bolder"
          >增加共享單車之駐點</span
        >，並積極設點於捷運站周邊；三、<span style="font-weight:bolder"
          >推廣「人車平等」之路權觀念</span
        >，給予市區的單車使用者和行人更為友善的用路環境。
      </p>
      <p class="content-2">
        公共交通的建設都不僅可以讓市區的交通更為井然有序，也能夠解決原先移動汙染源所造成的空汙問題。期許20年後的高雄，能夠給予單車族和行人一個慢活的都市空間。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Kaohsiung/mob/7_Kaohsiung_20_Years_Later_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Kaohsiung/pad/7_Kaohsiung_20_Years_Later_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Kaohsiung/web/7_Kaohsiung_20_Years_Later_pic2_web.jpg')
        "
        alt="空汙問題影響著高雄人各個生活層面，希望下個20年，透過改善公共交通等方式，能夠還給高雄人更明亮的天空、更新鮮的空氣。"
        >空汙問題影響著高雄人各個生活層面，希望下個20年，透過改善公共交通等方式，能夠還給高雄人更明亮的天空、更新鮮的空氣。圖／聯合報系資料照</ArticleColumnOne
      >
      <h2 class="mt-80">從農村的角度看市政規劃</h2>
      <p class="content-2">
        作為一個農村長大的小孩，小時候的我住在美濃月光山系的山腳下，距金字面山不遠，有時幫忙農務，或者是從後院向北望出時，都可以見到坐落於北面的連綿山巒。淺山的生活方式，不須過度依賴觀光產業即可自給自足的生活，從另一種角度來看，不啻是一種屬於農村的富足。
      </p>
      <p class="content-2">
        近幾年，美濃在發展觀光農業的趨勢下，觀光客每到假日便湧進田裡摘橙蜜番茄或拔白玉蘿蔔，一些年輕人也順應興起的觀光潮，選擇返鄉蹲點，開設創意甜點店或是文創小舖。觀光帶來了人潮及錢潮，卻也使農村的產業發展愈來愈依附於節慶、國定假日才湧現的觀光人潮。
      </p>
      <p class="content-2">
        回頭檢視陳其邁市長所提出的「四大優先」，其所提倡之目標似乎忽略了一關鍵性要素：現高雄市行政區劃包含原「高雄市」和原「高雄縣」，高雄市在縣市合併後納入許多農業地區，但<span
          style="font-weight:bolder"
          >陳其邁市長可能忽略都會和農村的性質差異，使得四大優先的目標中缺乏對於大高雄的不同區域，因地制宜的配套</span
        >。
      </p>
      <p class="content-2">
        我們應考量到農村之地位並不遜於都市，也因此在面對高雄市整體的產業發展課題時時，政府應讓農村不再持續受到都市強烈的拉力而漸次凋零，此外，若農村依附都市的特質仍舊無法擺脫，將導出一個問題：
        <span style="font-weight:bolder"
          >當觀光人潮不再湧現時，農村是否能夠「自力更生」</span
        >？農村和都市應當具有平等的價值，因而在此建議市政府應當設立專門制定各區域發展政策的機關，如城鄉發展局，並在規劃上將
        <span style="font-weight:bolder">各農村的多元地方特性做為核心價值</span
        >。
      </p>
      <p class="content-2">
        高雄市的行政區劃中，絕大部分的面積是傳統產業的地區，市政府首先要做的，便是給予願意留在當地的民眾機會，將地方發展視為重要課題，也需謹記「因地制宜」的執行原則。期待20年後的高雄，農村的小孩能在鄉下過著富足的生活，鄉下生活的每個角落也將是一片天地。
      </p>
      <h2 class="mt-80">許高雄一個美麗的家園</h2>
      <p class="content-2">
        20年後的高雄，風貌如何？也許有些民眾會認為現下問題仍亟需解決，空談20年後的高雄根本不切實際。但對於現在就讀大學的青年學生來說，20年後正是屬於我們的黃金歲月。
      </p>
      <p class="content-2">
        不單是正值青春年華的高雄後生，市政府也必須要看到20年後的高雄。不同區域的民眾，分別對當代城市與農村，各自帶有甚麼樣的眼光、觀點和期許？
      </p>
      <p class="content-2">
        盼願透過對於產業轉型、都市交通和農村發展的青年觀點，能夠使得20年後高雄的願景圖像更為明朗，而高雄的青年們也能高聲喊出「我高雄
        、我驕傲」。
      </p>

      <p class="remark">
        [1]
        關於陳其邁市長在「四大優先」中，所列舉出的前兩項優先之相關討論，可以參考我之前投書獨立評論的文章〈<a
          href="https://opinion.cw.com.tw/blog/profile/52/article/9790"
          class="future-link"
          target="_blank"
          >給未來的高雄市長：請聽聽高雄囝仔想要的高雄</a
        >〉
      </p>

      <p class="content-2"></p>
      <span style="font-weight:bolder"></span>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail6',
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

h2 {
  font-size: 24px;
  font-weight: bold;
  line-height: 2.67;
}
.mt-80 {
  margin-top: 80px;
}
.remark {
  color: #afafaf;
}
.future-link {
  color: #4a96f9;
  text-decoration: underline;
}
</style>
