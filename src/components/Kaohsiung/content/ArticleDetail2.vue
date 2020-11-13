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
      <h1 class="title">旗山人的香蕉味</h1>
      <p class="content-1">
        高雄百年山城旗山早年香蕉外銷興盛，有「香蕉王國」美譽，地方人士研發許多香蕉口味的特色小吃，包含香蕉包、香蕉冰等，到旗山品嚐在地料理，會發現在嘴中化開的除了有濃濃的香蕉味，還有旗山傳承好幾個世代的記憶
      </p>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        <span style="font-weight:bold">香蕉包</span>
      </p>
      <p class="content-1">
        每當接近春節時，不同於別人炊粿過年，高雄旗山溪洲地區居民則會趕製「香蕉包」迎接春節，這是溪洲人特有的年菜，也是不少返鄉遊子思念的家鄉味。
      </p>
      <p class="content-1">
        香蕉包的餡料有地瓜、肉絲、蝦米、紅蔥頭與菜脯絲等，將餡料包進蒸熟的糯米，最後用香蕉葉包起來就可下鍋蒸煮。
      </p>
      <p class="content-1">
        隨著時代變遷，如今會製作香蕉包的溪洲居民已愈來愈少，但對許多溪洲人來說，香蕉包仍是傳統的家鄉味，「要吃到包子才有過年的感覺」。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Kaohsiung/mob/3_Kaohsiung_Qishan_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Kaohsiung/pad/3_Kaohsiung_Qishan_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/Kaohsiung/web/3_Kaohsiung_Qishan_pic1_web.jpg')
        "
        alt="香蕉包是高雄旗山溪洲地區居民過年特有的年菜。"
        >香蕉包是高雄旗山溪洲地區居民過年特有的年菜。圖／聯合報系資料照</ArticleColumnOne
      >
    </ArticleContainer>
    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        <span style="font-weight:bold">香蕉冰</span>
      </p>
      <p class="content-2">
        旗山早期以種植香蕉和生產砂糖聞名，也帶動了製冰業，旗山冰品在日治時期便已遠近馳名，如今旗山老街仍有許多老字號的冰店，吸引慕名而來的遊客，很多人來旗山一定會吃碗香蕉清冰才走。
      </p>
      <p class="content-2">
        旗山鎮文中路的常美冰店已經走過一甲子，80多歲的冰店老闆娘郭李常美19歲開始製冰賣冰，她更融入旗山的特色自創香蕉冰，白色的香蕉冰散發著香甜的香蕉味，是許多旗山人的共同回憶。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Kaohsiung/mob/3_Kaohsiung_Qishan_pic2_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Kaohsiung/pad/3_Kaohsiung_Qishan_pic2_web.jpg')
        "
        :srcPc="
          require('../../../assets/Kaohsiung/web/3_Kaohsiung_Qishan_pic2_web.jpg')
        "
        alt="早在日治時代，旗山的製冰業就相當發達，很多人來旗山一定會吃碗香蕉清冰才走。"
        >早在日治時代，旗山的製冰業就相當發達，很多人來旗山一定會吃碗香蕉清冰才走。記者劉學聖／攝影</ArticleColumnOne
      >
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'

export default {
  name: 'ArticleDetail2',
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
@import '@/style/voice.scss';

.voice-text {
  color: #dc4705;
}
</style>
