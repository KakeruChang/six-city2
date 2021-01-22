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
      <h1 class="title">95歲陳彫刻處：</h1>
      <h1 class="title">老職人、新靈魂</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
          ref="TaichungArticle2Wrapper"
        >
          <p class="content-1">
            走進位於台中市舊城區的陳彫刻處，第一眼就看到在角落的陳文才。他一個人窩在自己的小小工作台前，在昏黃的燈光下，一刀一刀刻著手中的木製品，專注且安靜，只聽到木材刨落的刷刷聲。
          </p>
          <div class="video">
            <video
              id="TaichungVideo2"
              ref="TaichungVideo2"
              controls
              preload
              loop
              playsinline
              @play="playHandler"
              @pause="playHandler"
              @volumechange="volumeHandler"
              :muted="muted"
            >
              <source
                :src="
                  device === 'mob'
                    ? 'https://p3.udn.com.tw/cities/Taichung/mob/3_Taichung_woodcarving_video_mob.mp4'
                    : 'https://p3.udn.com.tw/cities/Taichung/web/3_Taichung_woodcarving_video_web.mp4'
                "
                type="video/mp4"
              />
            </video>
          </div>
          <p class="content-1">
            陳彫刻處由陳文才父親陳珍於民國15年創立，最早店面開在台北萬華，第二次世界大戰遭美軍轟炸，家具、瓷器全毀，陳珍帶著一家老小奔往台中，在台中市仁愛街落地生根。如今已有近百年歷史，靠著職人手藝養活三代人，更是台中產業和生活樣貌變遷的見證者。
          </p>
          <p class="content-1">
            早年的陳彫刻處很風光，出品的木雕工藝遍佈全台，與台灣產業脈動息息相關。民國50年台中糕餅產業最活絡時，湧入大量木製餅模訂單，包括太陽堂、美珍香、一福堂等老餅舖，店內的餅模都出自陳彫刻處。
          </p>
          <p class="content-1">
            到了民國60至70年，台灣經濟起飛，地方仕紳有大量客製匾額的需求，刻好後會敲鑼打鼓餽贈店家，如故宮「至善園」、台南孔廟「全台首學」、丸莊醬油前身「莊義成醬園」等匾額都是陳彫刻處的作品。
          </p>
          <p class="content-1">
            手工匾額上的字都由書法家或是陳彫刻處親自書寫，手寫的字體不一定很工整，但有著電腦打字難以比擬的溫度。店門口的紅字招牌出自陳珍之手，店內的「陳彫刻」三個大字，則是陳文才的手藝。
          </p>
          <p class="content-1">
            「工作量大的時候一個月有50到60片匾額要刻，中午攏馬某法度休睏」，陳文才說，那時候的中區很繁榮，有20幾家木作店鋪聚集在仁愛街，是台中木作的黃金年代。
          </p>
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taichung/mob/3_Taichung_woodcarving_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taichung/pad/3_Taichung_woodcarving_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Taichung/web/3_Taichung_woodcarving_pic1_web.jpg')
            "
            alt="陳文才背後的「陳彫刻」三字，是陳文才自己手寫、手做的書法木藝品。"
            >陳文才背後的「陳彫刻」三字，是陳文才自己手寫、手做的書法木藝品。圖／記者黃仲裕攝影</ArticleColumnOne
          >

          <p class="content-2">
            「但近10年狀況很差，一敗塗地的感覺，舞台被拿走了。」陳文才感嘆，以前木材價格便宜，一「才」（木材單位，30.3
            x 30.3
            cm）檜木只需12元，現在高達2000多元；替代材質如金屬、塑膠普及後，木材更難競爭。此外，手工成本相較機器高很多，難在機械時代下存活。
          </p>
          <p class="content-2">
            沒落的那些年，陳文才默默守著這間店，常常一整天等不到一個客人，好不容易有人訂做匾額，送到受贈者手上時，對方卻回陳文才「這我沒有要掛，先放你們店裡」，就再也沒來拿過。
          </p>
          <p class="content-2">
            「以前收到匾額的人感覺是一種榮耀，現在卻覺得是負擔」。零星的訂單、不被重視的時代氣氛，讓陳文才萌生退意。
          </p>
          <p class="content-2">
            第三代陳希彥與太太韓惠菁不捨三代老店就這麼收掉，力勸父親打消退休念頭，並幫陳彫刻處量身打造轉型計畫。陳希彥說，那時剛好看到日本前首相安倍晉三射出三支箭，「陳彫刻處也來試試看射出三支箭」，首先整理店內空間，以前店內總是堆滿木材、燈光昏暗，夫婦倆改造環境，店中間擺了一張木質大桌，空間更明亮，也可以交流互動。
          </p>
          <p class="content-2">
            另外兩支箭，分別是換工和教學。陳希彥說，換工讓各行各業的職人走進陳彫刻處，用自己的專長學彫刻或交換作品。例如有香港金工師傅進駐，台港職人一起切磋交流；也有插畫師來店裡，幫忙繪製開課需要的佛像圖，「我爸因此交到好多忘年之交」。一旁的陳文才笑著附和，「嘿啊，最近還有人找我年底一起靠技藝環島，說要帶我『出場』啦！」
          </p>
          <p class="content-2">
            「小孩子做新的東西，我都沒有太多意見，但開課我就比較有問題。」陳文才說，以前他們學木藝，至少要花3到4年時間才能有成果，兒子媳婦一開始要他嘗試教學，用半天時間教人刻出東西，「我覺得不可思議」。
          </p>
          <p class="content-2">
            但陳文才還是努力試，他拿換工的人當學員測試課程難度，慢慢修正和調整課程內容，也學習如何把自己一身好功夫，深入淺出成新學員能吸收的教學語言。「後來發現行得通耶，而且有些學員，手感真的很好，很想把他收來當學徒」。
          </p>

          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taichung/mob/3_Taichung_woodcarving_pic2_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taichung/pad/3_Taichung_woodcarving_pic2_web.jpg')
            "
            :srcPc="
              require('../../../assets/Taichung/web/3_Taichung_woodcarving_pic2_web.jpg')
            "
            alt="陳彫刻處近年轉型課程教學，第二代職人陳文才親自教學，陳文才笑說，跟年輕人接觸多了，自己好像也更年輕了。"
            >陳彫刻處近年轉型課程教學，第二代職人陳文才親自教學，陳文才笑說，跟年輕人接觸多了，自己好像也更年輕了。圖／陳彫刻處提供</ArticleColumnOne
          >
          <p class="content-2">
            陳彫刻處也做產品轉型，成立新品牌「COMMA」，開發日常木作商品。陳希彥說，COMMA的Logo是逗點裡面有小樹苗，象徵老樹新枝，樹苗與老樹一起茁壯成長。
          </p>
          <p class="content-2">
            「未來期待『讓彫刻走進生活』」。陳希彥說，以前彫刻處刻的作品是產業、信仰、人情，未來希望木作能更生活化，成為台中這城市中的「生活彫刻店」。他也觀察到，「現在來上課的還是北部人居多」，希望台中能更重視文化與工藝，多一些老空間保存故事。
          </p>
          <p class="content-2">
            「這樣持續下去，應該是往正確的方向在走，有些收入當然很好，但更重要的是學員在課程中了解雕刻」。陳文才說，早年大家說台中是「文化城」，但現在已經看不太出來文化哪裡特別，只被大家笑稱是「風化城」。彫刻雖不是台中被稱為文化城的原因，但「我很希望能夠延續彫刻這個手藝」。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
          ref="TaichungArticle2Wrapper"
        >
          <p class="content-1">
            走進位於台中市舊城區的陳彫刻處，第一眼就看到在角落的陳文才。他一個人窩在自己的小小工作台前，在昏黃的燈光下，一刀一刀刻著手中的木製品，專注且安靜，只聽到木材刨落的刷刷聲。
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
import { sendGaMethods } from '@/mixins/masterBuilder.js'

export default {
  name: 'ArticleDetail2',
  props: {
    isHide: {
      type: Boolean
    }
  },
  mixins: [sendGaMethods],
  data() {
    return { muted: true, observer: {} }
  },
  methods: {
    volumeHandler() {
      this.sendGA({
        category: 'video',
        action: 'click',
        label: 'voice'
      })
    },
    playHandler() {
      this.sendGA({
        category: 'video',
        action: 'click',
        label: 'play'
      })
    },
    intersectionObserver() {
      const options = {
        root: null,
        rootMargin: '0px',
        threshold: [0]
      }

      const callback = (entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            this.$refs.TaichungVideo2.play()
          } else {
            if (this.$refs.TaichungVideo2) {
              this.$refs.TaichungVideo2.pause()
            }
          }
        })
      }

      const observer = new IntersectionObserver(callback, options)
      return observer
    },
    constructObserver() {
      if (this.$refs.TaichungVideo2) {
        this.observer = this.intersectionObserver()
        this.observer.observe(this.$refs.TaichungVideo2)
      }
    },
    destroyObserver() {
      if (this.$refs.TaichungVideo2) {
        this.observer.unobserve(this.$refs.TaichungVideo2)
        this.observer = {}
      }
    }
  },
  components: { ArticleContainer, ArticleColumnOne, PayWall },
  mounted() {
    this.constructObserver()
  },
  destroyed() {
    this.destroyObserver()
  },
  computed: {
    paddingTopArt0() {
      const { innerWidth } = window
      if (innerWidth <= 1025) return true
      return false
    },
    device() {
      const { innerWidth } = window
      if (innerWidth < 768) {
        return 'mob'
      }
      return 'web'
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/style/city.scss';
@import '@/style/voice.scss';

.video {
  width: 100%;
  height: 528px;
  padding: 48px 0 80px;
  video {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
}
video {
  outline: none;
}
</style>
