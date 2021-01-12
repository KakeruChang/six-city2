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
      <h1 class="title">蚵仔寮搖滾了，然後呢？</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽蚵仔寮的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/Kaohsiung/6_Kaohsiung_Kezailia_voice.mp3')
              "
              titleGA="聽蚵仔寮的聲音"
              :imgPlay="require('../../../assets/Kaohsiung/play_Kaohsiung.svg')"
              :imgStop="require('../../../assets/Kaohsiung/stop_Kaohsiung.svg')"
            />
          </div>
          <p class="content-1">
            2012年，一場音樂祭讓梓官區蚵仔寮小漁村動了起來，本來只預期2、3百人會來的音樂祭，最後卻迎來上千人，音樂祭辦到第3屆，更有上萬人專程來這個臨海的小漁村共襄盛舉，但當人潮散去、眾人仍在期待下一屆音樂祭時，主辦單位卻決定先將之後的音樂祭暫緩，因為他們「找不到初衷」。
          </p>
          <p class="content-1">
            到2020年，蚵寮漁村小搖滾音樂祭已經停辦5年了，我們來到蚵仔寮，找來幾位當年舉辦音樂祭的共同創辦人，請他們聊聊仍令他們熱血沸騰的那幾場音樂祭，也問他們，音樂祭讓蚵仔寮搖滾了，然後呢？
          </p>
          <p class="content-1">
            問起舉辦蚵寮小搖滾音樂祭的原因，會發現每位創辦人的說法都不太一樣。
          </p>
          <p class="content-1">
            「以前去市區念書時，同學會問是哪個國中來的，我講蚵仔寮，大家都不知道在哪裡，我跟蔡登財大哥就想說，不然找幾個朋友來這裡唱唱歌這樣，」曾芷玲是蚵寮漁村小搖滾發起人中的年輕世代，而她口中的蔡登財則是中世代的代表。
          </p>
          <p class="content-1">
            「會辦第一屆，是因為我們家長會費還有10萬塊的餘額，就想說辦一個在沙灘上面看著看夕陽、喝咖啡、聽音樂這樣就好了，」蔡登財的妻子康憶慈這麼說。
          </p>
          <p class="content-1">
            至於另一位發起人退休教師林賢郎，則說會辦小搖滾音樂祭「都是喝酒誤事啦！當初騙我們說只有2、3百人會來，」大家在一次喝酒時起哄要辦音樂祭，卻不小心促成了讓眾人如今仍津津樂道的萬人盛典。
          </p>
          <p class="content-1">
            「原本沒想到我們找的獨立樂團有這麼紅，也沒想到會有這麼多人來，」康憶慈說，最初只是想辦個小小的音樂祭而已，沒想到他們找的幾個獨立樂團和表演者真的太紅了，最後甚至連巴奈、林生祥、陳明章都來了，一票粉絲也蜂擁而至，讓這個原本寧靜的小漁村頓時搖滾了起來。
          </p>
          <p class="content-1">
            但音樂祭結束了、蚵仔寮的名氣也打出來了，然後呢？
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/6_Kaohsiung_Kezailia_pic_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/6_Kaohsiung_Kezailia_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/6_Kaohsiung_Kezailia_pic1_web.jpg')
            "
            alt="音樂祭讓梓官區蚵仔寮小漁村動了起來，本來只預期2、3百人會來的音樂祭，最後卻有上萬人專程來這個小漁村共襄盛舉。"
            >音樂祭讓梓官區蚵仔寮小漁村動了起來，本來只預期2、3百人會來的音樂祭，最後卻有上萬人專程來這個小漁村共襄盛舉。圖／聯合報系資料照</ArticleColumnOne
          >
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            「當初會辦音樂祭是想讓蚵仔寮比較熱鬧，現在已經很熱鬧了啊，還要辦什麼？這裡假日很多人，有時候太多人，也造成我們很大的困擾，」蔡登財說。
          </p>
          <p class="content-2">
            音樂祭結束，一切回歸日常，蚵仔寮在地人的日子依然照過，卻發現蚵仔寮的名氣打出來後，假日湧入的觀光客讓蚵仔寮失去了過往小漁村的味道，原本的生活步調也被打亂。
          </p>
          <p class="content-2">
            「現在大家來蚵仔寮，都是吃吃海產，吃完就走了，就消費式觀光啦，我們最用心在辦是第二屆，那時候我們收集老照片，想讓大家看蚵仔寮以前長怎麼樣，也希望來蚵仔寮不是只有吃吃海產、看個夕陽就走了，也可以看老房子，來蚵仔寮玩一天的行程」，蔡登財指出，音樂祭這種煙火式的慶典結束後，觀光客來了，也帶來了一些觀光財，但這些觀光財卻無法解決蚵仔寮包含人口外流等內部問題。
          </p>
          <p class="content-2">
            蚵仔寮內部的問題，還是要靠蚵仔寮人自己解決，這幾年來，過去籌備音樂祭的團隊把舉辦音樂祭的能量轉為在地深耕動能，他們開設「意滿漁」餐廳，讓透過音樂祭所激起的火花和累積的人脈可以在這個藝文空間持續發酵；團隊也翻修老房子，希望找回小漁村過往的面貌，也計畫在此打造協助小漁村弱勢家庭孩子的社區網絡。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/6_Kaohsiung_Kezailia_pic2_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/6_Kaohsiung_Kezailia_pic2_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/6_Kaohsiung_Kezailia_pic2_web.jpg')
            "
            alt="蚵寮漁村小搖滾音樂祭幾位共同創辦人將過去籌備音樂祭的能量，轉為在地深耕動能。左起為曾芷玲、林賢郎、蔡登財、康憶慈。"
            >蚵寮漁村小搖滾音樂祭幾位共同創辦人將過去籌備音樂祭的能量，轉為在地深耕動能。左起為曾芷玲、林賢郎、蔡登財、康憶慈。記者劉學聖／攝影</ArticleColumnOne
          >
          <p class="content-2">
            從辦音樂祭到經營社區的藝文空間、做學堂，我們問蚵仔寮音樂祭的團隊，是否冀望透過這些活動與計畫，為這個小漁村帶來什麼？
          </p>
          <p class="content-2">
            「我們真的沒有什麼偉大的理想、沒有特別想帶給大家什麼，只是希望讓這個環境變得舒適，大家能夠活在當下、好好生活，搞不好5年、10年後會有變化，但那個火花是我現在沒辦法預想的，」曾芷玲說。
          </p>
          <p class="content-2">
            能夠在自己家鄉好好生活─這句話說起來容易，實踐起來卻很難，而也許，這也是蚵寮漁村小搖滾音樂祭團隊一直在找尋的初衷。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <div class="voice-wrapper">
            <div class="voice-text">聽蚵仔寮的聲音</div>
            <VoiceStoryPlay
              :voiceSrc="
                require('../../../assets/Kaohsiung/6_Kaohsiung_Kezailia_voice.mp3')
              "
              titleGA="聽蚵仔寮的聲音"
              :imgPlay="require('../../../assets/Kaohsiung/play_Kaohsiung.svg')"
              :imgStop="require('../../../assets/Kaohsiung/stop_Kaohsiung.svg')"
            />
          </div>
          <p class="content-1">
            2012年，一場音樂祭讓梓官區蚵仔寮小漁村動了起來，本來只預期2、3百人會來的音樂祭，最後卻迎來上千人，音樂祭辦到第3屆，更有上萬人專程來這個臨海的小漁村共襄盛舉，但當人潮散去、眾人仍在期待下一屆音樂祭時，主辦單位卻決定先將之後的音樂祭暫緩，因為他們「找不到初衷」。
          </p>
          <p class="content-1">
            到2020年，蚵寮漁村小搖滾音樂祭已經停辦5年了，我們來到蚵仔寮，找來幾位當年舉辦音樂祭的共同創辦人，請他們聊聊仍令他們熱血沸騰的那幾場音樂祭，也問他們，音樂祭讓蚵仔寮搖滾了，然後呢？
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
  name: 'ArticleDetail5',
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
  color: #2e95fb;
}
</style>
