<template>
  <div style="width:100%">
    <ArticleContainer backgroundColor="transparent">
      <h1 class="title">走入歷史的誠品敦南店</h1>
      <p class="content-1">陪伴讀者30年的誠品敦南店，在2020年6月1日凌晨熄燈。</p>
      <p
        class="content-1"
      >誠品敦南店是全球首家24小時書店，也曾是台灣的文化地標與城市之光，而隨著熄燈號吹起，敦南誠品24小時書店的閱讀風景與無數人的青春記憶，也正式走入歷史。</p>
      <p
        class="content-1"
      >1989年，第一家誠品書店於台北仁愛敦南圓環旁開幕，6年後搬到誠品敦南店現址，誠品舉辦一場盛大的「今日不打烊」搬遷派對，讀者到凌晨4點還不肯散去，同時間誠品也舉辦「看不見的書店」徵文，有4成讀者希望書店不打烊，給了經營團隊新的靈感：何不來辦一間不打烊書店？</p>
    </ArticleContainer>
    <ArticleColumnOne
      :srcMob="require('../../assets/Taipei/mob/1_Taipei_eslite_bg_pic1.jpg')"
      :srcPad="require('../../assets/Taipei/pad/1_Taipei_eslite_pic1.jpg')"
      :srcPc="require('../../assets/Taipei/web/1_Taipei_eslite_pic1.jpg')"
      alt="誠品敦南店是全球首家24小時書店，在過去，即便到了深夜，仍可見到許多在這裡閱讀的身影。"
    >誠品敦南店是全球首家24小時書店，在過去，即便到了深夜，仍可見到許多在這裡閱讀的身影。圖／聯合報系資料照</ArticleColumnOne>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import ArticleColumnOne from '../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail0',
  components: { ArticleContainer, ArticleColumnOne }
}
</script>
<style lang="scss" scoped>
.title {
  font-family: source-han-serif-tc, sans-serif;
  font-size: 36px;
  font-weight: bold;
  line-height: 1;
  color: #eeeeee;
  @media screen and (max-width: 1024.98px) {
    font-size: 28px;
  }
  @media screen and (max-width: 413.98px) {
    font-size: 25px;
  }
}
.content-1 {
  font-size: 20px;
  line-height: 1.7;
  color: #eeeeee;
}
</style>
