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
      <h1 class="title">西門紅樓</h1>
      <h1 class="title">迎向陽光的同志文化</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <div class="voice-wrapper">
        <div class="voice-text">聽西門紅樓同志酒吧的聲音</div>
        <VoiceStoryPlay
          :voiceSrc="require('../../../assets/media/5_Taipei_ximen_voice.mp3')"
          titleGA="聽西門紅樓同志酒吧的聲音"
          :imgPlay="require('../../../assets/Taipei/play.svg')"
          :imgStop="require('../../../assets/Taipei/stop.svg')"
        />
      </div>
      <p class="content-1">
        西門町紅樓左側有一個窄窄的入口，走進去後，會發現後方藏了一個露天廣場，每到假日，廣場上的露天酒吧一間間亮起，點亮了夜色，也照亮高掛廣場二樓的彩紅旗，對台北的同志族群來說，這個廣場不僅是他們尋找歸屬感的空間，更是讓他們「從地下室走到陽光下」的小天地。
      </p>
      <p class="content-1">
        「從小到大，同志都是在地下室生活，我們一直期待有個開放的空間，」2006年即在此經營同志酒吧Cafe
        Dalida的老闆Alvin回憶，10多年前，社會對同志的接受度仍不高，同志只能偷偷摸摸地在地下室等場所聚會，期望有一天也能走到陽光下，而西門町紅樓後方的廣場，正好滿足了同志的願望。
      </p>
      <p class="content-1">
        「這個地方的邏輯很有趣，它是一個封閉的街區，對同志來講，有點開放、又有點隱密」，Alvin當初正是看上西門町紅樓後方廣場的空間特性，才會選擇在此開設同志酒吧，在Alvin和其他西門町紅樓初期同志商店的推動下，同志酒吧一間間開幕，男扮女裝的變裝皇后秀、彩虹派對也在此輪番上演。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taipei/mob/5_Taipei_ximen_pic1_mob.jpg')
        "
        :srcPad="require('../../../assets/Taipei/pad/5_Taipei_ximen_pic.jpg')"
        :srcPc="require('../../../assets/Taipei/web/5_Taipei_ximen_pic.jpg')"
        alt="西門町紅樓後方的同志酒吧區是讓同志族群「從地下室走到陽光下」的小天地。"
        >西門町紅樓後方的同志酒吧區是讓同志族群「從地下室走到陽光下」的小天地。記者蘇健忠／攝影</ArticleColumnOne
      >
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        剛開始時，紅樓附近的商家、鄰里仍無法接受當地逐漸興起的同志文化，當Alvin和朋友走在街上時，各種髒話、謾罵常會毫不留情地衝著他們來，但隨著同志酒吧區帶動周圍店家的生意，鄰里也從一開始的排斥轉為接受，當同志酒吧考慮停辦同志跨年活動時，鄰里甚至央求他們一定要繼續辦下去，「對台灣的同志來說，紅樓這個地方是一個重要的里程碑，不僅讓我們從地下室走到陽光下，也讓同志融入鄰里，」Alvin驕傲地表示，西門町的同志酒吧終於做到地方共融，儘管花了十幾年的時間，「但我們做到了」。
      </p>
      <p class="content-2">
        這3、4年來，隨著背包客文化興起，西門町同志酒吧區也成為觀光客的打卡熱點，來到同志酒吧區，一句句「Hello！」「How
        are
        you?」，以及一個個來自各國的面孔、膚色，都為這個地方添上更多異國色彩，而同志也得以從過去「躲著人群」聚會轉到開始「迎接人群」，讓過去遠離人群的隱密空間晉身為展示台北同志文化蓬勃發展的最佳場域。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taipei/mob/5_Taipei_ximen_pic2_mob.jpg')
        "
        :srcPad="require('../../../assets/Taipei/pad/5_Taipei_ximen_pic2.jpg')"
        :srcPc="require('../../../assets/Taipei/web/5_Taipei_ximen_pic2.jpg')"
        alt="近年來，西門町同志酒吧區已成為觀光客的打卡熱點，來自各國的面孔、膚色為這個地方添上許多異國色彩。"
        >近年來，西門町同志酒吧區已成為觀光客的打卡熱點，來自各國的面孔、膚色為這個地方添上許多異國色彩。記者蘇健忠／攝影</ArticleColumnOne
      >
      <p class="content-2">
        「現在看起來，奮鬥已告一段落，但我們還有很長一段路要走，」儘管經過十多年的發展，西門町紅樓區已成為同志文化的代名詞，但Alvin希望未來同志文化能繼續「走入人群」，讓西門町的同志文化不再只侷限於紅樓後方，而是能獲得西門町主要商圈的認可與接納，「如果西門町知名滷味門口也能掛上彩紅旗，不覺得很美嗎？」
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import VoiceStoryPlay from '../../voice_story/VoiceStoryPlay'

export default {
  name: 'ArticleDetail4',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, VoiceStoryPlay },
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
  color: #ff2300;
}
</style>
