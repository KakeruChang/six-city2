<template>
  <div class="impression-wrapper">
    <ArticleContainer backgroundColor="transparent">
      <p>
        「台北就是天龍國啊！」<br />
        「新北只是我『回家睡覺的地方』。」<br />
        「桃園噢，就是一個去搭飛機時會經過的城市。」<br />
        「台中很像沒什麼特色，但住起來真的很舒服。」<br />
        「台南的特色就是『吃』！還有很多寺廟。」<br />
        「高雄以前有很多移入人口，現在則有很多北漂青年。」
      </p>
      <p>
        若問台灣人對於六都的印象，得到的常是上面的答案，這些答案呈現了城市的某種面貌，卻也忽略了城市的其他可能性。
      </p>
      <p>
        近年來，隨著「返鄉」、「認識在地」熱潮興起，好多年輕人回到家鄉深耕，透過發行地方誌、舉辦在地音樂祭、設立獨立書店等方式，希望讓更多人看見故鄉的不同面貌，但當這些在地年輕人正大聲說：「我們的城市不只這樣而已！」礙於眾人對不同城市的印象已根深柢固，大家很難想像，原來這些城市還有這麼多可能性。
      </p>
      <p>
        《聯合報》邀請在不同產業深耕、熱愛家鄉的在地青年一起回顧，這20年間，六都有什麼改變了、什麼沒有變？他們眼中的六都有什麼新面貌？下個20年，這些在地青年又希望透過各種熱血的方式，把自己的家鄉帶往何處？
      </p>
      <p>邀請你一起打開感官，感受六都在這20年的變化。</p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '@/components/common/ui/ArticleContainer'

export default {
  name: 'Impression',
  components: { ArticleContainer }
}
</script>

<style>
.impression-wrapper {
  background-color: #eeeeee;
}
</style>
