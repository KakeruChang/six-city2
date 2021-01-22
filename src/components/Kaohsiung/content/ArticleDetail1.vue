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
      <h1 class="title">老鹽埕的新命題</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進鹽埕區，一切彷彿都慢了下來。
          </p>
          <p class="content-1">
            在這裡，時間是慢的、生活步調是慢的、連空氣流動也是慢的，若未聽老鹽埕人憶起過去的時光，很難想像這裡曾經有的繁華。
          </p>
          <p class="content-1">
            座落在高雄港旁邊，鹽埕區見證了這個港口的輝煌年代，但隨著高雄港失去以往的地位，鹽埕區過去「最新、最潮、最時尚」的招牌也漸漸退色，變成大家口中的「老社區」。
          </p>
          <p class="content-1">
            「在我們這個年代，鹽埕區已經沒有那麼多人了，不過還是有很多老房子、老職人，你可以感受到整個城區的歷史厚度和溫度」，李怡志是「港都人生
            鹽埕市井」一書的共同作者，從小在鹽埕區長大，鹽埕區的老面貌全印在他腦海中。
          </p>
          <p class="content-1">
            「港都人生
            鹽埕市井」另一位作者林佩穎則表示，「鹽埕區有很多層次，是好幾代人記憶交錯的地方，跨過愛河後，就覺得時間感變得很緩慢，時間的流動很不一樣。」
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/2_Kaohsiung_Old_Yencheng_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/2_Kaohsiung_Old_Yencheng_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/2_Kaohsiung_Old_Yencheng_pic1_web.jpg')
            "
            alt="鹽埕區的舊掘江商場曾是高雄早期舶來品集散地，儘管當年的榮景已不復見，仍可以在舊掘江的各個角落窺見不同時代所留下的歷史軌跡。"
            >鹽埕區的舊掘江商場曾是高雄早期舶來品集散地，儘管當年的榮景已不復見，仍可以在舊掘江的各個角落窺見不同時代所留下的歷史軌跡。記者劉學聖／攝影</ArticleColumnOne
          >
        </ArticleContainer>

        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            鹽埕區老了、舊了，而正是這種融合不同時代的城市面貌，讓鹽埕區成為極具魅力的城區。
          </p>
          <p class="content-2">
            不過，幾年前，在外生活多年的李怡志回到家鄉後，卻發現記憶中的鹽埕正快速消失，「我回來後，才一個禮拜，我家前面整片的日本時代眷舍全部拆掉，這是一種說不上來的體驗，會覺得這個城市在變。」
          </p>
          <p class="content-2">
            在鹽埕區市區，老房子敵不過時間摧殘，一棟棟遭到拆除，老職人盼不到下一代接手，傳承數代的手藝慢慢流失；而在鄰近高雄港的鹽埕地區，隨著駁二藝術特區進駐，更大的改變正持續發生。
          </p>
          <p class="content-2">
            若鹽埕區的特色是時間流動特別緩慢，走入駁二，就像走進另一個時區，一切都是新的、快的，文青商店接連開幕、打卡景點不斷落成，一個個連鎖品牌快速博取了觀光客的目光，忙著拍照打卡的行程也讓觀光客忽略了鹽埕區本身累積好幾個世代的底蘊，林佩穎指出，「鹽埕有許多歲月的積累，可是觀光客來到鹽埕，大部分集中在駁二，駁二有點像港邊倉庫的百貨公司。百貨公司也滿好的，適合各式各樣的遊客，但是好像跟其他地方的百貨公司很像，在鹽埕，其實有更多有特色、好玩的選擇，這樣的發展很可惜。」
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/2_Kaohsiung_Old_Yencheng_pic2_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/2_Kaohsiung_Old_Yencheng_pic2_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/2_Kaohsiung_Old_Yencheng_pic2_web.jpg')
            "
            alt="每到假日，駁二總擠滿了來自各地的遊客。"
            >每到假日，駁二總擠滿了來自各地的遊客。圖／聯合報系資料照</ArticleColumnOne
          >
          <p class="content-2">
            當觀光成為老鹽埕的新命題，該如何讓老鹽埕的觀光，不再只有駁二？
          </p>
          <p class="content-2">
            「鹽埕區最有魅力的地方在於，這邊有民國50年代的空間、60年代的招牌，70年代的商品、80年代的櫥窗，全部都混在一起，在這裡我們可以看到這邊的人生活的累積」，李怡志表示，鹽埕的巷弄間藏有各個時代的記憶與故事，這是最值得外地人前來探索、體驗的地方。
          </p>
          <p class="content-2">
            希望未來，更多人可以看見隱藏在鹽埕區大街小巷的不同亮點，讓鹽埕的老面貌可以延續，而前來鹽埕區觀光的遊客也可以走出駁二，好好感受這個充滿歷史底蘊的老社區。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進鹽埕區，一切彷彿都慢了下來。
          </p>
          <p class="content-1">
            在這裡，時間是慢的、生活步調是慢的、連空氣流動也是慢的，若未聽老鹽埕人憶起過去的時光，很難想像這裡曾經有的繁華。
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

export default {
  name: 'ArticleDetail1',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, PayWall },
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
