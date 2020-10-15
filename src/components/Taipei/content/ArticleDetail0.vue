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
      <h1 class="title">走入歷史的誠品敦南店</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        陪伴讀者30年的誠品敦南店，在2020年6月1日凌晨熄燈。
      </p>
      <p class="content-1">
        誠品敦南店是全球首家24小時書店，也曾是台灣的文化地標與城市之光，而隨著熄燈號吹起，敦南誠品24小時書店的閱讀風景與無數人的青春記憶，也正式走入歷史。
      </p>
      <div>
        <p class="content-1">
          1989年，第一家誠品書店於台北仁愛敦南圓環旁開幕，6年後搬到誠品敦南店現址，誠品舉辦一場盛大的「今日不打烊」搬遷派對，讀者到凌晨4點還不肯散去，同時間誠品也舉辦「看不見的書店」徵文，有4成讀者希望書店不打烊，給了經營團隊新的靈感：何不來辦一間不打烊書店？
        </p>
        <ArticleColumnOne
          v-if="!isHide"
          :srcMob="
            require('../../../assets/Taipei/mob/1_Taipei_eslite_bg_pic1.jpg')
          "
          :srcPad="
            require('../../../assets/Taipei/pad/1_Taipei_eslite_pic1.jpg')
          "
          :srcPc="
            require('../../../assets/Taipei/web/1_Taipei_eslite_pic1.jpg')
          "
          alt="誠品敦南店是全球首家24小時書店，在過去，即便到了深夜，仍可見到許多在這裡閱讀的身影。"
          >誠品敦南店是全球首家24小時書店，在過去，即便到了深夜，仍可見到許多在這裡閱讀的身影。圖／聯合報系資料照</ArticleColumnOne
        >
      </div>
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        經過4年的準備，誠品在1999年3月12日滿10歲的那一天，讓敦南店成為全球第一間24小時營業書店，也是「台北夜未眠」的實際象徵。
      </p>
      <p class="content-2">
        在讀書風氣不算鼎盛的台灣，開24小時書店需要勇氣。公司落腳於敦南店不遠處的廣告公司創意總監包益民曾分析，不打烊的敦南店之所以成功，是因為夜間的誠品「從外在空氣到店內空氣都很舒服」，讓生活繁忙的城市人逛書店時「忘卻時間壓力」。
      </p>
      <p class="content-2">
        誠品敦南店身處市中心，交通方便之餘，建築、空間與周遭環境也很舒適。包益民認為，對於東區，誠品敦南也是個模範，「讓台北有點文化」，也成為外來客的旅遊景點。
      </p>
      <p class="content-2">
        如今，台北依然夜未眠，但曾在無數個夜晚照亮台北東區的誠品敦南店，卻已離我們而去。(資料來源：聯合報)
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail0',
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
