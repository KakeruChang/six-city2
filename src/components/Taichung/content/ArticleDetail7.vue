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
      <h1 class="title">解定存砸積蓄</h1>
      <h1 class="title">老爸要為下一代留清新空氣</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        站在台中市南屯區的水碓聚落入口，左邊是建商開發的高樓大廈，右邊是看起來充滿歷史的土埆厝，還有頗有年歲的高大老樹，視覺感很衝突。計程車司機跟著導航停在入口，左顧右盼了一下，驚訝說：「台中市區居然還有這樣的地方」。
      </p>
      <p class="content-1">
        再往裡面走一點，遠遠可以看到大肚山。在江慶洲的童年記憶裡，「大肚山像是視力1.2般清晰，樹的輪廓都看得到」，但現在空氣汙染嚴重時，大肚山望過去一片模糊。
      </p>
      <p class="content-1">
        台中市原鄉文化協會總幹事江慶洲，認識的人叫他「阿洲」，三代世居水碓聚落，耕耘文化與社區、老樹保存，近年投入空汙議題，推動空氣盒子認養，動員鄉親力量一起監測空氣品質。「我人生的使命、做的每一件事，都是希望讓土地更好，讓下一代可以自由呼吸」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/7_Taichung_freshair_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/7_Taichung_freshair_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/7_Taichung_freshair_pic1_web.jpg')
        "
        alt=""
      />
      <h2 style="color:white">讓他驕傲的土地　變成論斤秤兩的商品</h2>
      <p class="content-1">
        「我從小自豪自己生活在森林中，空氣很好，一年四季有摘不完的水果，還有百年巷道可以玩百米賽跑、捉迷藏」。長大後江慶洲北漂台北當工程師，卻極度不適應北部節奏快、生活空間狹小的鳥籠生活，20年前選擇回到台中生活。
      </p>
      <p class="content-1">
        一回到老家水碓，江慶洲馬上收到法院傳單，傳統聚落逃不過挖土機開發命運，鄰里為了土地產權鬧上法院。「我很衝擊，這些土地，原本是我成長的養份、養活我的稻田，面對開發時，房子和土地都變成論斤秤兩在賣；以前左鄰右舍互相關懷，現在大家在法庭上激辯」。
      </p>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        為了保存下水碓，江慶洲花了大量時間去調祖譜、訪談，試圖拼出水碓聚落300年的客家人開發史；去學樹木知識，幫聚落裡每棵老樹做身家調查，「我以前不太會講話，課堂上被老師叫起來都會臉紅，為了土地，不得不練自己的表達，希望幫土地說話」。
      </p>
      <p class="content-2">
        專科時國文極爛、幾乎每學期都得哀求老師讓他過關的江慶洲，後來幫家鄉水碓寫文章，還得到大墩文學獎第三名，他笑說，「認識我的人應該都很錯愕吧」。
      </p>

      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/7_Taichung_freshair_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/7_Taichung_freshair_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/7_Taichung_freshair_pic2_web.jpg')
        "
        alt="水碓聚落是傳統客家聚落，保留客家人的建築智慧。江慶洲現在帶著妻子與女而定居在這，希望孩子能認識自己的根，感受自己兒時開心、豐富的童年生活。"
        >水碓聚落是傳統客家聚落，保留客家人的建築智慧。江慶洲現在帶著妻子與女而定居在這，希望孩子能認識自己的根，感受自己兒時開心、豐富的童年生活。記者黃仲裕／攝影</ArticleColumnOne
      >
      <p class="content-2">
        纏訟9年後官司底定，水碓聚落扭轉全區剷除和開發的命運，以老樹、水田、古蹟、老宅成功保留下部分聚落風貌。江慶洲感嘆，「雖然因為土地是獨立產權，有些人還是選擇開發，但至少留下一些什麼，在七期、八期開發區裡保留下一個小角落」。
      </p>
      <h2>土地留下來了　空氣卻變糟了</h2>
      <p class="content-2">
        台中人最驕傲的城市特點之一是氣候，
        <span style="font-weight:bold"
          >「
          不熱、舒適、宜居，是台中人最喜歡的」，但這樣的驕傲和生活舒適感，因為空汙正慢慢消失</span
        >。
      </p>
      <p class="content-2">
        「不只呼吸和視覺有感，從流的汗就知道，以前滿身大汗也不會覺得黏，但現在一流汗就全身黏呼呼」。更大的震撼是參加親子共學時，有共學媽媽跟江慶洲說，小孩起床時在枕頭上看到一攤鼻血，耳鼻喉科說是因為空汙；還有家長得靠類固醇來壓小孩發作愈來愈頻繁的氣喘。
      </p>
      <p class="content-2">
        也是父親的江慶洲，開始正視空汙的嚴重性。他加入LASS（環境感測器網路系統）社群，自己在家裡組裝簡易測站，當更簡易操作的空氣盒子出現時，「我解掉定存，一口氣訂了100台，出產的公司還嚇到，沒有人一次訂那麼多台」。5年前的這張訂單現在還在，江慶洲想留給女兒當嫁妝，「讓她知道老爸有努力過，也希望下一代對生活環境有感受」。
      </p>
      <p class="content-2">
        機子到貨後他推動家庭認養，讓空氣盒子遍佈中台灣。江慶洲說，大家常說中台灣空汙嚴重，但到底多嚴重，市民其實對數據無感，推動空氣盒子目的不是打臉公部門數據，是希望每個人都能更深入關心自己的環境，「大家在對話空汙時，不會再只有主觀感受」。
      </p>

      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/7_Taichung_freshair_pic3_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/7_Taichung_freshair_pic3_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/7_Taichung_freshair_pic3_web.jpg')
        "
        alt="空氣盒子安裝與操作容易，江慶洲推動一般家庭認養，讓空氣盒子遍地開花，民眾能對自己生活周遭的空氣品質有更深入的觀察。"
        >空氣盒子安裝與操作容易，江慶洲推動一般家庭認養，讓空氣盒子遍地開花，民眾能對自己生活周遭的空氣品質有更深入的觀察。記者黃仲裕／攝影</ArticleColumnOne
      >
      <p class="content-2">
        有家庭認養安裝後，發現燒香或燒金紙真的會馬上「紫爆」，就會認真思考如何改變生活習慣；還有共學媽媽拿回去測老公抽煙、測煎魚，都發現空氣品質會立刻變差。「大家驚覺空汙跟生活中很多因素有關，會從自己去努力，不再只是消極抱怨，而是積極作為」。
      </p>
      <p class="content-2">
        公民運動精神也影響到公部門，江慶洲2019年時發現台中部分工地、砂石場都安裝了空氣盒子，輾轉得知是某次環境影響評估會議下了但書，請業者在工區安裝空氣盒子，數據透過空氣盒子的APP讓全民檢視和監督；台中市環保局也採購了600台，目標推廣到各社區。
      </p>
      <h2>城市開發是必然 但台中要找自己的路</h2>
      <p class="content-2">
        「台中這20年最大的改變，就是土地開發」。江慶洲認為，城市開發是必經之路，但台中市可以有更豐富的作法，現在的台中，在對自己的土地還不夠了解時，幾百億、幾千億開發預算就一頭執行下去，「台中的開發跟台北、高雄沒有差異，這樣太可惜了」。
      </p>
      <p class="content-2">
        例如水利設施開發，台中現在的作法常是將水田、水圳剷平做人工水圳，「說是保存水圳文化，但都是水泥建築，也沒有水，只是為了增加建地」，但早期的水田和水圳集結前人智慧，本身具有排洪、調節氣候的功能，大水期還能種短期作物，卻不被重視。
      </p>
      <p class="content-2">
        「<span style="font-weight:bold"
          >台中這20年真的開發超級多，但你看到哪一個城市畫面，會覺得這是台中？</span
        >」江慶洲直言，城市的特色不能只靠景點營造，要去認識自己的地貌和文化，「我還是相信台中可以很不一樣，就像我們可以有很多創新小吃」，土地充滿生命力，善待它，就會長出不一樣的東西。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail7',
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
  line-height: 1.5;
  padding-top: 48px;
}
</style>
