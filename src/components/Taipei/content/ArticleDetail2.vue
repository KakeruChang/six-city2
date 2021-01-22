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
      <h1 class="title">台北人的使命感：</h1>
      <h1 class="title">讓台灣被世界看見</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            台北人常被冠上許多負面詞彙：驕傲、自以為是、天龍人…身處台灣首都，不少台北人會覺得自己與眾不同、與其他縣市的人不能相提並論，而深諳台灣調酒、文化產業的廖薏淳認為，
            <span style="font-weight:900;"
              >正是這種「與眾不同的自覺」，讓台北人對於台灣，比其他縣市的人多了一種「使命感」。</span
            >
          </p>
          <p class="content-1">
            「台北人在做事情的時候，其實是有使命感，是在想說，我想把台北打造成一個國際上大家會認同、會想來玩，或是可以被更多不同的人看到的地方，」廖薏淳是台灣年度調酒活動Bar
            Surfing共同創辦人，也是文創產業投資公司「天使放大」執行長，她指出，台北人意識到自己是帶動台灣前進的火車頭，台北的娛樂、文化產業因此需要不斷精進、升級，拉近與國際一線城市的距離，而台北人也得快速習得各項生存技能，才能跟上這座硬體、軟體都不斷升級的城市。
          </p>
        </ArticleContainer>

        <ArticleYoutube
          src="https://www.youtube.com/embed/f-T99eiTfVA"
          :articleMargin="false"
        />

        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            當許多人對酒吧的印象仍停留在「喝到飽、喝到醉」的無限暢飲酒吧時，近6、7年來，台北的酒吧已漸漸升級至提供更精緻飲酒體驗的特色調酒酒吧，而「品味調酒」便成為台北人必學的新技能──透過一次次感受各類酒精在味蕾的碰撞與交融，找到最適合自己的品飲風格。
          </p>
          <p class="content-2">
            「你喜歡濃一點的還是淡一點的？酸一點的還是甜一點的？」當源自歐美的調酒文化剛引進台北時，許多客人仍沒辦法講出自己喜歡的調酒類型，但這幾年來，台北人已能將各式調酒的名字掛在嘴邊，調酒酒吧也透過與客人不斷溝通、試驗的過程中，逐漸把調酒文化融入台北人的夜生活。
          </p>
          <p class="content-2">
            廖薏淳自2017年開始舉辦Bar
            Surfing活動，深刻感受到台北特色酒吧的激烈戰況，在2019年，Bar
            Surfing首度跨出台北，加入台中和台南的特色酒吧，但這兩個縣市的酒吧文化仍未如台北興盛，「台北有60家特色酒吧加入串聯活動，而台中、台南兩個縣市加起來也只有20家」。
          </p>
          <p class="content-2">
            隨著台北人已漸漸熟悉瑪格麗特、琴湯尼、馬丁尼等經典調酒，台北的酒吧也從販售酒水的空間，進階為提供藝文或高端體驗的場所，隱藏在暗門後的BAR
            PUN等秘密酒吧、劇場酒吧LORE、會員制酒吧等特色酒吧一間間開幕，將台北的酒吧文化帶往下一個階段。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taipei/mob/3_Taipei_sense_of_calling_pic1.jpg')
            "
            :srcPad="
              require('../../../assets/Taipei/pad/3_Taipei_sense_of_calling_pic1.jpg')
            "
            :srcPc="
              require('../../../assets/Taipei/web/3_Taipei_sense_of_calling_pic1.jpg')
            "
            alt="BAR PUN是近年在台北興起的秘密酒吧，提供台北人更進階、高端的品飲體驗。"
            >BAR
            PUN是近年在台北興起的秘密酒吧，提供台北人更進階、高端的品飲體驗。記者徐兆玄／攝影</ArticleColumnOne
          >
          <p class="content-2">
            這幾年來，亞洲 50
            大酒吧的入圍名單上可見到愈來愈多台北的酒吧，到2020年，台北已有5家酒吧擠進名單中。「台灣酒吧擅長展現在地風味，」廖薏淳表示，台灣特色酒吧常在調酒中加入茶、熱帶水果等台灣原生的元素，這些台灣在地風味都讓世界看見台灣的潛力。
          </p>
          <p class="content-2" style="font-weight:bold;">
            「台北人有一個自覺，作為首都，必須做到國民外交，」廖薏淳指出，除了力求與國際接軌，台北也正以最在地的方式，讓台灣被世界看見。
          </p>
          <p class="content-2">
            廖薏淳觀察，在發展文化產業時，台灣其他縣市仍以在地客群為主，台北的文化產業則會考慮到國際客群，例如台北近年興起的城市散步導覽、密室逃脫等活動都會推出英語或多語服務，而台北的酒吧在介紹調酒之餘，也會將台北的美介紹給外國客人，「我們都是想把台北文化帶到國際、被國際看到」。
          </p>
          <p class="content-2">
            身處台灣首都，台北人掌握更多的文化資源、也被賦予更高的期待，而台北人正努力發揮首都子民的使命感，讓台北在跟上世界的腳步的同時，也帶領台灣在國際舞台上找到屬於自己的位子。
          </p>
          <p class="content-2">※ 提醒您：禁止酒駕 飲酒過量有礙健康</p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            台北人常被冠上許多負面詞彙：驕傲、自以為是、天龍人…身處台灣首都，不少台北人會覺得自己與眾不同、與其他縣市的人不能相提並論，而深諳台灣調酒、文化產業的廖薏淳認為，
            <span style="font-weight:900;"
              >正是這種「與眾不同的自覺」，讓台北人對於台灣，比其他縣市的人多了一種「使命感」。</span
            >
          </p>
          <p class="content-1">
            「台北人在做事情的時候，其實是有使命感，是在想說，我想把台北打造成一個國際上大家會認同、會想來玩，或是可以被更多不同的人看到的地方，」廖薏淳是台灣年度調酒活動Bar
            Surfing共同創辦人，也是文創產業投資公司「天使放大」執行長，她指出，台北人意識到自己是帶動台灣前進的火車頭，台北的娛樂、文化產業因此需要不斷精進、升級，拉近與國際一線城市的距離，而台北人也得快速習得各項生存技能，才能跟上這座硬體、軟體都不斷升級的城市。
          </p>
        </ArticleContainer>
      </template>
    </PayWall>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleYoutube from '../../common/ui/ArticleYoutube'
import PayWall from '@/components/PayWall'

export default {
  name: 'ArticleDetail2',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleYoutube, PayWall },
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
