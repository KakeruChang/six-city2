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
      <h1 class="title">移居台南過生活</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        若問台南人，什麼是最能代表這座城市的價值，幾乎每個人都會回答「生活感」，比起都市的快節奏生活，自由的「生活感」是台南人引以為傲城市價值，而這股生活氛圍，近年來也吸引不少香港人和其他縣市的人「移居台南」，比起北漂，他們選擇南漂到「台南」，在這裡尋找一種工作與生活能夠兼併的生存方式。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Tainan/mob/5_Tainan_migrate_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Tainan/pad/5_Tainan_migrate_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Tainan/web/5_Tainan_migrate_pic1_web.jpg')
        "
        alt="從台北移居到台南7年多的Cina(右)與先生，目前在台南經營「兜台南」老屋民宿品牌，希望為台南保留更多老房子。"
        >從台北移居到台南7年多的Cina(右)與先生，目前在台南經營「兜台南」老屋民宿品牌，希望為台南保留更多老房子。記者許瑋琳／攝影</ArticleColumnOne
      >
      <ArticleQuote
        borderColor="transparent"
        color="#eeeeee"
        refer="移居到台南7年多的「兜府」老屋民宿老闆娘Cina"
        text="要決定在一個地方創業或工作時，「台南」是讓我覺得可以好好生活的地方。"
      />
      <p class="content-1">
        在台北生活10年，
        我從來都不覺得我有融入，可是移居到台南後，馬上就覺得非常非常自在。
      </p>
      <p class="content-1">
        本來在台北從事飯店業，工作10年左右，受不了台北的生活節奏，那時候很想要回南部，想要拋開台北重新開始。要決定在一個地方工作或創業時，「台南」是讓我覺得可以好好生活的地方。
      </p>
      <p class="content-1">
        台南的生活步調比較慢，讓你有更多時間思考你要什麼，加上這裡的創業圈很小，雖然我們是經營老屋民宿，但不同領域的人很容易串聯在一起，做建築的、學設計的、開咖啡店的，大家彼此認識、互相幫忙。
      </p>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        壞處就是觀光客太多，差不多我移居來的時候台南潮就開始了，就是假日要去哪裡人都很多，還有這幾年台南最大的改變就是拆房子，拆到一個莫名其妙，年輕人在拆、政府也在拆，加上文創被炒起來，房租高漲，很多店開開倒倒。
      </p>
      <p class="content-2">
        剛開始經營民宿的時候，我們也會很積極地去買書、或是到處走走看看，了解台南有什麼故事，但最近很諷刺的是，有時候翻完整本書，會發現裡面有一半的店都消失了。
      </p>
      <p class="content-2">
        這裡唯一沒有改變的就是「人情」吧，還有台南人很做自己這點真的很棒，有些老店真的就是你永遠不知道他什麼時候會開，但你也不會覺得怎麼樣。
      </p>
      <p class="content-2">
        雖然民宿的生意起起落落，但也因為我們沒有覺得一定要一直賺錢，或是想辦法賺很多錢，所以才有時間去享受現在的生活。
      </p>
      <p class="content-2">
        對我來說，台南給了我第二人生吧，我的生活跟這座城市都是串聯在一起，我不用去隔離什麼，以前在台北的生活很單一，真的沒有太多時間讓你去思考，去認識更多朋友。
      </p>
      <p class="content-2">
        移居台南7年多，我很喜歡台南的生活，但要我講出「我是台南人」的時候，又講不太出來，就是有點卡卡的，好像要慢慢變成台南人了，又好像不是，雖然我沒有辦法直接講出我是台南人，但我已經很認同這塊土地了。
      </p>
      <p class="content-2">
        台南是一個讓你可以有選擇、可以很自在生活的城市，大家來這裡追求的就是一種自由的「生活感」，不要急著想要改變什麼，先學習台南人麼過日子再說，台南的養分會帶給你不一樣的改變。
      </p>
      <p class="content-2">
        對我們來說，也希望透過「兜台南」這個老屋民宿品牌，為台南保留更多老房子，讓來這裡的旅人，能透過老房子的氛圍重新認識台南。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Tainan/mob/5_Tainan_migrate_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Tainan/pad/5_Tainan_migrate_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Tainan/web/5_Tainan_migrate_pic2_web.jpg')
        "
        alt="近年來，有越來越多香港人移居台南，來自香港的Candice(右)和先生5年多前移居台南，在這裡尋找一種有品質的生活方式。"
        >近年來，有越來越多香港人移居台南，來自香港的Candice(右)和先生5年多前移居台南，在這裡尋找一種有品質的生活方式。記者劉學聖／攝影</ArticleColumnOne
      >
      <ArticleQuote
        borderColor="transparent"
        refer="移居到台南5年多的香港人Candice"
        text="我來台灣的時候，我的夢想就是逃離香港，後來移居台南，也是抱著逃離台北的心情。"
      />
      <p class="content-2">
        決定來台灣念大學時，我的夢想就是逃離香港，因為香港的生活成本高，而且開口閉口就是問你能不能發達、能不能成為勝利主，「錢」這件事情對香港人來說很重要，但也相對抹煞掉其他的價值觀。
      </p>
      <p class="content-2">
        大學畢業後，那時候一直在想到底要回香港還是留在台北，但在台北的生活真的很辛苦，賺的錢都拿去付房租，每天就是過著又忙又窮的生活。
      </p>
      <p class="content-2">
        以前來台南旅行時，很喜歡老城的氛圍，香港是那種又老又新、又乾淨又邋遢，全部混在一起，但台南都是舊的，4年多前，剛好先生的家人在台南有一棟空房，當時我們就以創業為目的搬來台南。
      </p>
      <p class="content-2">
        剛開始來台南時，其實會有一點不習慣台南的節奏，香港是最快、台北是快、台南就是慢，有時候可能東西壞掉找師傅來修，結果隔了兩周才來，這裡的人沒有在追求要賺很多錢，他們在乎的是怎麼「過生活」。
      </p>
      <p class="content-2">
        移居台南5年多，生活成本低，可以過得比較舒適，相對也給創業人很大的空間去發揮，在這裡，真的比較可以有那麼一個機會，你不用是家財萬貫、官二代，或是有一定的職場關係，才有辦法實現你想做的事。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Tainan/mob/5_Tainan_migrate_pic3_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Tainan/pad/5_Tainan_migrate_pic3_web.jpg')
        "
        :srcPc="
          require('../../../assets/Tainan/web/5_Tainan_migrate_pic3_web.jpg')
        "
        alt="目前Candice和先生在台南的小巷弄經營一家港式餐廳，雖然店面不大，但卻是能讓他們安身立命的地方。"
        >目前Candice和先生在台南的小巷弄經營一家港式餐廳，雖然店面不大，但卻是能讓他們安身立命的地方。記者劉學聖／攝影</ArticleColumnOne
      >
      <p class="content-2">
        從香港一路逃到台北，再到台南，這裡的生活讓我有幸福感，現在我們經營一家港式餐廳，也漸漸試出台南人會喜歡的口味，雖然店面小小的，但這樣的日子很簡單、很快樂，想開店就開店，想休息就休息，這是在香港或台北絕對不會有的時光，可能有同樣的快樂，但CP值很低。
      </p>
      <p class="content-2">
        對我來說，我現在會用「咀嚼」形容台南，一開始可能會覺得很無聊，但住得越久，這裡的人情就讓你越難離開，越嚼越有味道的感覺。
      </p>
      <p class="content-2">
        這幾年，台南好像也要慢慢都市化，變得更像台北，要蓋捷運、火車站也要地下化，我覺得很可惜，因為台南有她的歷史和優勢，才讓我們看到現在的城市樣貌，這些是在其他城市很難看到的。
      </p>
      <p class="content-2">
        雖然我是香港人，但對我來說，我會想要守護這座城市帶給我的回憶。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleQuote from '../../common/ui/ArticleQuote'

export default {
  name: 'ArticleDetail4',
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
</style>
