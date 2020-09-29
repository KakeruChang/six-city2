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
      <h1 class="title">走入歷史的福隆月台便當</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        「便當、便當，燒ㄟ便當」，1957年6月創立的福隆火車站月台便當，曾伴隨搭火車往來台北和宜蘭的民眾走過好幾十個年頭，但受到雪隧通車，火車班次減少，業者不堪賠本做生意，已於2016年吹熄燈號，福隆月台叫賣便當聲也成絕響。
      </p>
      <p class="content-1">
        早年沒有台2線，往來台北宜蘭只能搭火車，造就福隆月台便當盛況。「尤商義月台便當」第四代傳人尤景信說，福隆便當用老米炊煮，口感Q彈，用當天現宰溫體豬滷肉，加上甜脆的高山高麗菜，最重要是人情味，老一輩交代，寧可有剩，也要讓客人吃飽。
      </p>

      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/New-Taipei/web/1_New_Taipei_Fulong_lunch_box_pic1_web.jpg')
        "
        :srcPad="
          require('../../../assets/New-Taipei/pad/1_New_Taipei_Fulong_lunch_box_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/New-Taipei/mob/1_New_Taipei_Fulong_lunch_box_pic1_mob.jpg')
        "
        alt="以前到福隆一定要吃福隆便當，才算到過福隆，如今乘載好幾代人記憶的福隆月台便當已成絕響。"
        >以前到福隆一定要吃福隆便當，才算到過福隆，如今乘載好幾代人記憶的福隆月台便當已成絕響。圖／聯合報系資料照</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        過去，每當火車駛進福隆站，在月台上叫賣便當的婦人便拉高嗓子叫賣福隆便當，生意好時，一天賣二、三千個很平常。
      </p>
      <p class="content-2">
        雪隧開通後，搭火車人數遽減，火車停靠也少了，福隆月台便當生意一落千丈，只好忍痛畫下句點，目前全台仍保有月台便當叫賣文化的，僅剩關山站。
      </p>
      <p class="content-2">
        （資料來源：聯合報）
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
