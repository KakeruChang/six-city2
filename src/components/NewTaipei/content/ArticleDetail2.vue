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
      <h1 class="title">留一天給汐止</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        新北市通往台北市的交通變方便後，每天一大早，一輛輛滿載新北人的捷運、火車、公車往台北市開去，便利的交通模糊了城市間的界線、加快了新北市各地人口流動的速度，也沖淡了新北人對於家鄉的認同感；但近年來，許多新北市的年輕人不願見到自己與家鄉的連結愈來愈少，開始選擇回到新北市，從探索周遭的巷弄開始，好好認識自己的家鄉。
      </p>
      <p class="content-1">
        「汐止人生活很大一部分共通記憶跟狀態都是在通勤，就是去台北，或是去台北上班，然後回來睡覺」，從小在新北市汐止區長大的張文韋曾覺得自己是個不夠格的汐止人，對台北可能比對汐止還要熟，「如果再不做點什麼，就會不知道自己是從哪裡來」，正是這種危機意識感，激發張文韋在2017年和4位同樣來自汐止的夥伴成立「返腳咖工作室」，透過發行汐止地方誌、成立街道博物館、舉辦共學等方式，耙梳汐止的歷史與特色，好好認識自己的家鄉，也希望藉此幫助更多汐止人重新找到和家鄉的連結。
      </p>
      <p class="content-1">
        返腳咖工作室夥伴廖佩璇指出，以前工作室的夥伴都把時間花在台北，「但現在每到周末，我們會特地把一天留給汐止」。周末不去台北、留在汐止，難嗎？說起來容易，實際做起來卻不簡單，下定決心要留一天給汐止後，工作室夥伴才發現自己對家鄉有多不熟，只能先從探訪汐止老街上的老店、整理汐止的歷史脈絡開始，理出汐止人對家鄉的共同印象。
      </p>
    </ArticleContainer>

    <ArticleYoutube
      src="https://www.youtube.com/embed/2gNa-T6cto8"
      :articleMargin="false"
    />

    <ArticleContainer v-if="!isHide">
      <p class="content-2">
        但理著理著，返腳咖工作室也看到汐止記憶的斷層。外地人想到汐止時，第一個聯想到的常常是淹水的畫面，「大家都覺得汐止人應該可以聊很多淹水的故事」，張文韋表示，「可是淹水已經過了快20年了，比較年輕這代，你要我們講太多淹水的故事，我們也講不出來」。
      </p>
      <p class="content-2">
        拿掉淹水的印象後，汐止還剩下什麼？返腳咖工作室希望找到當代汐止人的共同生活記憶，讓大家對汐止的印象，也能隨著汐止的變化不斷往前推進。
      </p>
      <p class="content-2">
        「移動」是返腳咖工作室為第一期地方誌定的主題，現在的汐止人有很大部分時間都在移動，白天從汐止通勤到台北上學、上班，晚上再回汐止睡覺，移動的汐止人，多了關於移動和通勤的日常，也擁有許多從晴天的台北回到雨天的汐止的共同記憶。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/New-Taipei/mob/3_New_Taipei_Xizhi_pic1_mob.jpg')
        "
        :srcPad="
          require('../../../assets/New-Taipei/pad/3_New_Taipei_Xizhi_pic1_web.jpg')
        "
        :srcPc="
          require('../../../assets/New-Taipei/web/3_New_Taipei_Xizhi_pic1_web.jpg')
        "
        alt="每個周末，返腳咖工作室團隊都會把一天留給汐止，重新找到與家鄉的連結。"
        >每個周末，返腳咖工作室團隊都會把一天留給汐止，重新找到與家鄉的連結。記者林澔一／攝影</ArticleColumnOne
      >
      <p class="content-2">
        「從台北回汐止的時候，那個回家的感覺是，如果你在陰天騎車回去，過了邊界，就會開始下雨，原本在台北是小雨，到汐止會變大雨，原本是雷雨的話就會變豪雨，百試不厭」，張文韋表示，「我們希望透過這本刊物，去觸碰那些常常在來來去去的汐止人，或是有點不好意思說自己是汐止人的汐止人，要成為汐止人，不一定要對這個地方的歷史倒背如流，只要擁有當代在汐止生活的知識和經驗，這樣子的汐止人也是汐止人。」
      </p>
      <p class="content-2">
        除了透過發行地方誌，拼湊當代汐止人的共同生活面貌，返腳咖工作室也正努力為未來的汐止藍圖鋪路，他們走入社區，與汐止的學校合作進行地方教育、串聯熱愛汐止的汐止人，藉此在汐止打造有機的網絡，一起想像如何讓汐止變得更好、更適合在這裡生活。
      </p>
      <p class="content-2">
        「如果沒有返腳咖夥伴，若遇到與汐止有關的公共議題，因為沒有其他人支持，我可能想像不到參與的可能」，張文韋指出，「但因為有了返腳咖，你會知道在汐止有一群人可以一起揪來做事情，不是只有你一個人」。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail2',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleYoutube },
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
  line-height: 1.4;
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
</style>
