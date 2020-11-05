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
      <h1 class="title">開始在高雄扎根</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        工業城市的背景，讓高雄成為吸引外縣市人來這裡打拚的城市，各地人口來到高雄工作、賺錢，許多人來高雄尋找工作機會，卻少有人在高雄探索生活的可能。
      </p>
      <p class="content-1">
        但近年來，在這座城市生活的人與城市的連結逐漸有了變化，愈來愈多高雄人開始在這塊土地扎根，也尋找在這裡好好生活的各種方式。
      </p>
      <p class="content-1">
        是什麼原因改變了高雄人對這座城市的認同感？我們訪問了獨立書店三餘書店負責人謝一麟，請他談談這幾年來，高雄人怎麼看自己的城市。
      </p>
      <ArticleQuote
        borderColor="transparent"
        color="#eeeeee"
        refer="三餘書店負責人 謝一麟"
        text="很多人的爸爸、祖父、曾祖父輩，他們覺得自己只是來高雄賺錢，認同感還是原鄉，自己終究要回去，可是來到第三代、第四代之後，認同感就不一樣了。"
      />
      <p class="content-1">
        大概在10年前，高雄的人文還滿像鄉下的，可是現在就是很跳耀，譬如說，像現在有時候看到公園或比較大的廣場，假日會有人野餐，這種畫面10年前看不到，因為你在真的在比較鄉下，不會看到有人跑到旁邊廟宇、里民活動中心或廟口去野餐。
      </p>
      <p class="content-1">
        差不多在2010年，我開始感覺到高雄人文的變化。那時候我在做打狗文史再興會社，推廣高雄在地文化和文史保存，才發現很多在這座城市裡面的人，而且是各種階層的人，對於生活想像的質變已經在發生。大家開始追求不一樣的生活質感和步調，比較會慢下來去感受生活，希望透過教育想讓下一代更好、想要有一些藝術文化的活動、想要有更多表演，或是有有趣的空間或書店；可是外面，因為看到媒體，或是外面你所想像的高雄，大家都還是看很表面，你感覺不到裡面那個質變。
      </p>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        過去，大部份住高雄的人對這塊土地的根都扎得不深。嚴格來說，其實沒有幾個人能叫真正的高雄人，以前高雄大部分的人都是從雲林、嘉義、澎湖各地移民過來的，高雄大概一百年前才現代化，蓋港口之後，才有大批的人進來。
      </p>
      <p class="content-2">
        很多人的爸爸、祖父、曾祖父輩，他們覺得自己只是來高雄賺錢，認同感還是原鄉，自己終究要回去，可是來到第三代、第四代之後，認同感就不一樣了，我一出生就是在高雄、身分證號碼前面就是E。
      </p>

      <p class="content-2">
        2010左右，剛好這批人現在已經介於30歲前後，也稍微有一點點的資源，可以來為高雄做點事、讓高雄的故事被看見，也用比較新世代的眼光去詮釋高雄，大家開始想說，怎麼樣讓我們生活的城市有生活層次感，而不是只有一種發展的樣子。以前大家覺得生活就是賺錢，像有一句台語常講，尤其<span
          style="font-weight:bold"
          >我們做文史時肯定都會聽到，「先顧腹肚、才顧佛祖」，你飯都吃不飽還顧什麼老房子，這種就是精神層面的東西，講那個都是屁話，可是那幾年就發現很多人是兩個都想要顧，到了這個階段，大家就開始真正扎根高雄了</span
        >。
      </p>
      <p class="content-2">
        很多人會以為來參加我們這種文史團體的都是學生、文青或是很閒的人才會參加，可是我們其實接觸到很多，不管是來參加我們活動、捐款、甚至是繳會費加入會員，會發現各行各業的人都有，我講的比較極端一點，真的有建商，也有遠洋漁業老闆，真的就很高雄，這也是為什麼我們敢在那時候開書店，推廣以高雄為主題的書籍，因為我們感受到高雄人對這塊土地的情感開始不一樣了。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Kaohsiung/mob/4_Kaohsiung_Rooted_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Kaohsiung/pad/4_Kaohsiung_Rooted_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Kaohsiung/web/4_Kaohsiung_Rooted_pic1_web.jpg')
        "
        alt="2013年開幕的獨立書店三餘書店除了推廣以高雄為主題的書籍，也會舉辦文學、電影等活動，是高雄重要的文化交流場所。"
        >2013年開幕的獨立書店三餘書店除了推廣以高雄為主題的書籍，也會舉辦文學、電影等活動，是高雄重要的文化交流場所。圖／三餘書店提供，陳彥君攝影</ArticleColumnOne
      >
      <p class="content-2">
        我們一直在講說，我們是一間跟這座城市裡面的人一起成長的書店，我們的書店不斷往這塊土地扎根，也吸引更多人進來、加深我們對高雄的認識，我們的根愈往下走，從這塊土地吸收的養分愈多，結出來的果實就會愈豐富。
      </p>
      <p class="content-2">
        高雄本身已經有硬體了，我們有製造業的底子，只要任何看得到、摸得到的東西，我們都做得出來，這幾年大家再把人文、藝文這類軟體慢慢補上。目前高雄的軟體還沒更新到很多年輕人可以回來，希望未來高雄的軟體可以持續更新，讓更多人可以回來，以高雄的軟體維生。
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
</style>
