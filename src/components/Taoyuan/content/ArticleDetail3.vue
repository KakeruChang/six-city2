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
      <h1 class="title">米干：帶有戰爭記憶的味道</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進中壢龍岡地區，會驚訝於此地密度極高的「米干店」，不管是忠貞誠米干、大鬍子米干，還是阿美米干，每家米干店都有各自的愛好者，依米漿濃度、食材不同，米干口感有的Q彈，或是軟爛，但不變的是，每一家米干店賣的米干，都是一道價格親民的料理。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Taoyuan/mob/4_Taoyuan_rice-noodles_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Taoyuan/pad/4_Taoyuan_rice-noodles_pic1.jpg')
            "
            :srcPc="
              require('../../../assets/Taoyuan/web/4_Taoyuan_rice-noodles_pic1.jpg')
            "
            alt="米干類似粄條，但比粄條細，依米漿濃度、食材不同，米干口感有的Q彈，或是軟爛。"
            >米干類似粄條，但比粄條細，依米漿濃度、食材不同，米干口感有的Q彈，或是軟爛。圖／聯合報系資料照</ArticleColumnOne
          >
        </ArticleContainer>
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            親民的價格，是因為每一口米干，都帶著一種戰爭的克難記憶。
          </p>
          <p class="content-2">
            米干源自雲南西南地區，是滇緬地區少數民族具代表性的美食，國共內戰後，原本在緬甸、寮國、泰國交界「金三角地區」的異域孤軍及眷屬撤退來台，在龍岡形成聚落。對撤退來台的國軍來說，唯有透過平價的米干，才能讓他們即便在最克難的狀態下，仍能回味家鄉的味道。
          </p>
          <p class="content-2">
            如今，當年跨海來台的異域孤軍已逐漸凋零，但米干店的招牌仍亮著，繼續向年輕的客人述說著曾在這片土地扎根的老兵的故事。
          </p>
          <p class="content-2">
            （資料來源：聯合報）
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進中壢龍岡地區，會驚訝於此地密度極高的「米干店」，不管是忠貞誠米干、大鬍子米干，還是阿美米干，每家米干店都有各自的愛好者，依米漿濃度、食材不同，米干口感有的Q彈，或是軟爛，但不變的是，每一家米干店賣的米干，都是一道價格親民的料理。
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

export default {
  name: 'ArticleDetail3',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer, ArticleColumnOne, PayWall },
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
