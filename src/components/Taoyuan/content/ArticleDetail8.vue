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
      <h1 class="title">為老桃園注入新色彩</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽只是光影獨立咖啡廳的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/Taoyuan/8_Taoyuan_new-color_voice.mp3')
              "
              titleGA="聽只是光影獨立咖啡廳的聲音"
              :imgPlay="require('../../../assets/Taoyuan/play.svg')"
              :imgStop="require('../../../assets/Taoyuan/stop.svg')"
            />
          </div>
          <p class="content-1">
            若問桃園在地人，桃園的魅力是什麼？「桃園就是座工業城市」，桃園人常會這麼說，語氣帶點淡淡的哀傷。
          </p>
          <p class="content-1">
            在工廠林立的桃園，時間好像總圍著工廠的上下班打卡打轉，眼睛一睜開，想的都是如何賺錢、養家，
            <span style="font-weight:bold;"
              >「生存」是這座城市的主軸，而「生活」則是個陌生的詞彙</span
            >。
          </p>
          <p class="content-1">
            「桃園的面貌比較扁平，整座城市的發展和思維，都是朝經濟、工業的路線前進」，桃園在地人，同時也是「只是光影」獨立咖啡廳負責人的蔡奕勳指出，「桃園很像該有的都有了」，走出桃園火車站，迎面而來的是3間百貨公司，立刻滿足在地人的日常所需，食衣住行育樂一樣都沒少，但若想更深入探究桃園的文化與城市面貌，卻發現在工業城市的外殼之下，「桃園又好像什麼都沒有」。
          </p>
          <p class="content-1">
            「桃園能不能有更多的可能性？」這是年輕一代桃園人亟欲探索的議題，而近年來，各式獨立書店、藝文空間也開始在桃園落腳，希望為這座充滿工業氣息的城市注入一些藝文氣息，調合出桃園的新面貌。
          </p>
        </ArticleContainer>

        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            回到桃園前，蔡奕勳曾在台北、台南、花蓮生活，不同縣市都有各自的藝文活動與空間，「就連花蓮後山都有很多藝文活動，而且騎個腳踏車就可以逛很多地方」，但2012年回到桃園後，蔡奕勳卻覺得很像哪裡怪怪的，「回到這邊，下了火車站，看到桃園有這麼多人，但是卻都是百貨公司，沒有一個藝文空間」。
          </p>
          <p class="content-2">
            「一座城市的面貌，應該是立體、多元的」，為了讓桃園有更多元的面貌，藝術家出身的蔡奕勳在老城區打造一塊結合咖啡廳和藝文展覽空間的綠洲，經過多年的累積，「只是光影」獨立咖啡廳已成為桃園藝文界的地標，而透過各種以桃園為主題的藝術展演，桃園人也終於能夠好好感受這座城市的脈動，並想像桃園在食衣住行育樂外的更多可能性。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taoyuan/mob/8_Taoyuan_new-color_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taoyuan/pad/8_Taoyuan_new-color_pic1.jpg')
            "
            :srcPc="
              require('../../../assets/Taoyuan/web/8_Taoyuan_new-color_pic1.jpg')
            "
            alt="為了讓桃園有更多元的面貌，藝術家出身的蔡奕勳在老城區打造一塊結合咖啡廳和藝文展覽空間的綠洲，「只是光影」獨立咖啡廳的牆面上擺滿歷年展覽作品。"
            >為了讓桃園有更多元的面貌，藝術家出身的蔡奕勳在老城區打造一塊結合咖啡廳和藝文展覽空間的綠洲，「只是光影」獨立咖啡廳的牆面上擺滿歷年展覽作品。記者謝汶均／攝影</ArticleColumnOne
          >

          <p class="content-2">
            如今，桃園原本扁平的工業樣貌，開始加入了許多新元素，未來這股動能將賦予桃園什麼新面貌？
          </p>
          <p class="content-2">
            「目前仍看不出桃園未來的方向」，蔡奕勳表示，桃園是個過渡的城市，「我覺得桃園其實有自己的步調，跟台北比起來，她不會很快，其實<span
              style="font-weight:bold;"
              >桃園很多罐頭公園，會覺得她就是有種舒適感，但又有點無聊</span
            >」，蔡奕勳認為，即便桃園已在探索各種可能的面貌，但這塊土地仍然在城市、工業、休憩之間找尋平衡點。希望下個20年，桃園能夠循著這座城市的脈絡，綻放出屬於桃園在地的立體城市面貌。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽只是光影獨立咖啡廳的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/Taoyuan/8_Taoyuan_new-color_voice.mp3')
              "
              titleGA="聽只是光影獨立咖啡廳的聲音"
              :imgPlay="require('../../../assets/Taoyuan/play.svg')"
              :imgStop="require('../../../assets/Taoyuan/stop.svg')"
            />
          </div>
          <p class="content-1">
            若問桃園在地人，桃園的魅力是什麼？「桃園就是座工業城市」，桃園人常會這麼說，語氣帶點淡淡的哀傷。
          </p>
          <p class="content-1">
            在工廠林立的桃園，時間好像總圍著工廠的上下班打卡打轉，眼睛一睜開，想的都是如何賺錢、養家，
            <span style="font-weight:bold;"
              >「生存」是這座城市的主軸，而「生活」則是個陌生的詞彙</span
            >。
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
import VoiceStoryPlay from '../../voice_story/VoiceStoryPlay'

export default {
  name: 'ArticleDetail8',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, VoiceStoryPlay, PayWall },
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
  color: #00edff;
}
</style>
