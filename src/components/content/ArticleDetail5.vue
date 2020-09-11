<template>
  <div style="width:100%;">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingBottom: 10, paddingTop: paddingTopArt0 && 0 ,paddingBottom:'32px'}"
    >
      <h1 class="title">卡米地</h1>
      <h1 class="title">用喜劇收服難搞的台北人</h1>
    </ArticleContainer>
    <ArticleContainer backgroundColor="transparent" :cssProperty="{ paddingTop: 0 }">
      <div class="voice-wrapper">
        <div class="voice-text">聽卡米地的聲音</div>
        <VoiceStoryPlay
          :voiceSrc="require('../../assets/media/6_Taipei_stand_up_comedy_voice.mp3')"
          titleGA="聽卡米地的聲音"
        />
      </div>
      <p class="content-1">什麼樣的笑話才會讓台北人買單？台北人觀賞喜劇的心態，有什麼不同？</p>
      <p class="content-1">自2007年起，卡米地喜劇俱樂部不斷用喜劇挑戰台北人的笑點，與台北人交手13年來，卡米地創辦人張碩修已學會從台北人的笑聲中，聽出不少端倪。</p>
      <p
        class="content-1"
      >卡米地是台灣第一間站立式喜劇俱樂部，曾培養出博恩、吳鳳等喜劇表演者，以黑布為背景的舞台沒有太多陳設，台上的喜劇演員卻總能用接地氣的脫口秀表演內容，充實台北人的夜晚。</p>
      <p
        class="content-1"
      >實際來到卡米地的基地，表演尚未開始，當晚的喜劇演員就先公告「今天現場蚊子很多，打到一隻蚊子，能換一瓶啤酒，」結果一待場地燈光暗下、舞臺燈光亮起，藉著舞台反射的燈光，果真看到不少蚊子飛來飛去，接下來的表演，就在觀眾的笑聲和打蚊子的啪啪聲中度過。</p>
      <p class="content-1">一個晚上，喜劇演員的主題從一開始的蚊子梗、轉到敏感的政治議題、再轉到輕鬆的兩性話題，只要來到卡米地，各類主題都能化為精心設計的笑梗。</p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
            require('../../assets/Taipei/mob/6_Taipei_stand_up_comedy_pic1_mob.jpg')
          "
        :srcPad="require('../../assets/Taipei/pad/6_Taipei_stand_up_comedy_pic1.jpg')"
        :srcPc="require('../../assets/Taipei/web/6_Taipei_stand_up_comedy_pic1.jpg')"
        alt="卡米地的喜劇演員卻總能用接地氣的脫口秀表演內容，充實台北人的夜晚。"
      >卡米地的喜劇演員卻總能用接地氣的脫口秀表演內容，充實台北人的夜晚。圖／卡米地喜劇俱樂部提供</ArticleColumnOne>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <p class="content-2">不過，若場景來到10多年前的卡米地，會發現台北人當年的笑點和今日有些不同。</p>
      <p
        class="content-2"
      >張碩修表示，當時台北人的笑點比較「淺層」，主要集中在生活、兩性等輕鬆的話題，如果在喜劇表演中談到較艱澀的政治、社會議題，場子會馬上冷掉。當時卡米地曾嘗試以「反核電」做為一檔脫口秀的主題，結果「票房硬生生少了一半」，演出效果也不佳。</p>
      <p class="content-2">近年來，台北人的笑點卻開始有明顯變化，觀眾不再只接受「無腦的搞笑」，轉而追求更「有深度、有層次」的笑點，對各種議題的包容度也提高了。</p>
      <p
        class="content-2"
      >張碩修認為，隨著社群媒體興起，觀眾對各議題的胃口及接受度已被YouTuber、網紅養大，轉而期待在喜劇中看到政治、社會議題等有深度的主題，「現在已經沒有主題是不能在卡米地談的」。另一方面，多年的經驗累積下來，喜劇演員的表演程度也提升，更知道如何將艱澀、深硬的主題包裝成有趣的笑梗。</p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="require('../../assets/Taipei/mob/6_Taipei_stand_up_comedy_pic2_mob.jpg')"
        :srcPad="require('../../assets/Taipei/pad/6_Taipei_stand_up_comedy_pic2.jpg')"
        :srcPc="require('../../assets/Taipei/web/6_Taipei_stand_up_comedy_pic2.jpg')"
        alt="與台北人交手13年來，張碩修認為台北人正轉而追求更「有深度、有層次」的笑點。"
      >與台北人交手13年來，張碩修認為台北人正轉而追求更「有深度、有層次」的笑點。記者余承翰／攝影</ArticleColumnOne>
      <p class="content-2">隨著站立式喜劇文化這幾年開始進到台中、高雄等縣市，張碩修也體會到台北人的「難搞」。</p>
      <p
        class="content-2"
      >「台北人常是帶著批判、嚴厲的心態來看戲，看你到底有多好笑，」張碩修指出，台北的藝文消費選擇多，台北人因此習慣將不同新型態的藝文表演拿來比較，相較之下，台中、高雄人看戲的心態就比較放鬆。</p>
      <p
        class="content-2"
      >不論是難搞的台北人，還是開始追求笑點「有深度」的台北人，13年過去了，卡米地仍持續利用喜劇試探台北人的笑點，也期待在未來，能讓站立式喜劇文化在更多縣市開枝散葉。</p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../common/ui/ArticleContainer'
import ArticleColumnOne from '../common/ui/ArticleColumnOne'
import VoiceStoryPlay from '../voice_story/VoiceStoryPlay'

export default {
  name: 'ArticleDetail5',
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
.content-2 {
  font-size: 20px;
  line-height: 1.7;
  color: #171717;
}
.voice-wrapper {
  border-top: solid 1px rgb(62, 62, 62);
  border-bottom: solid 1px rgb(62, 62, 62);
  padding: 30.5px 0;
  margin-bottom: 48.5px;
}
.voice-text {
  font-size: 20px;
  line-height: 1.7;
  color: #ff2300;
}
</style>
