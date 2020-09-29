<template>
  <div style="width: 100%">
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{
        paddingBottom: 10,
        paddingTop: paddingTopArt0 && 0,
        paddingBottom: '10px'
      }"
    >
      <h1 class="title">走入歷史的中壢大時鐘</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        被中壢人稱為「中壢大時鐘」的桃園市中壢第一公有零售市場（第一市場），曾乘載不少中壢人的回憶，但受到時間的摧殘，第一市場的建築物老舊，多處龜裂漏水、耐震力不足，已於2017年遭到拆除，未來將改建成新的樣貌。
      </p>
      <p class="content-1">
        第一市場於日據時代就設立，由於建築外觀有座獅子會捐贈的附有花臺的大時鐘，不少人因此以「大時鐘」作為第一市場代名詞，年輕人與人相約見面時，也常會以「大時鐘」當作地標。
      </p>
      <p class="content-1">
        第一市場於1975年在現地改建成地下、地上各一樓建築，1991年再增建2至5樓。在百貨公司和大賣場出現前，第一市場供應了中壢人的民生所需，除了五金雜貨、裁縫、命理館等傳統攤商，還曾開過冰宮、舞廳、KTV、酒店等各式娛樂場所，俗稱「中壢三寶」的牛肉麵、花生糖和鐮刀都發跡於此。
      </p>
      <p class="content-1">
        第一市場曾是中壢的一部活歷史，見證了中壢百年來的發展，每一個攤商的擺設、所使用的桌子、櫃子也都是歷史的印記，儘管未來第一市場將以新面貌重現，原有大時鐘地標意象也將融入新建的市場，但過往在第一市場曾有的濃濃人情味和歷史的記憶將難以再次重現。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'

export default {
  name: 'ArticleDetail0',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: { ArticleContainer },
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
