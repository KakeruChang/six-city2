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
      <h1 class="title">找到讓自己留在家鄉的方法</h1>
    </ArticleContainer>
    <PayWall>
      <template v-slot:isPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進高雄靠山的小鎮、臨海的小漁村，會發現「離鄉」是每位庄腳人最常掛在嘴邊的話題，駛向都市的列車帶走了一批批年輕人，曾經熱鬧、充滿活力的庄腳，如今只剩下老化的人口、荒廢的田地，以及亟待轉型的產業。
          </p>
          <p class="content-1">
            「留在這裡什麼攏嘸，去外面打拼卡實在！」長輩總會說，留在家鄉沒有任何機會，要年輕人趕快離鄉去外面闖。
          </p>
          <p class="content-1">
            但家鄉真的什麼都沒有嗎？近年來，許多高雄年輕人開始「走反路」，把離鄉的路走成回鄉的路，他們以搖滾樂唱出屬於家鄉的故事、辦音樂季讓腳下的土地再次動起來，用各種熱血的方式，為自己找到留在家鄉的方法，也策動在地能量，讓更多人能夠在家鄉看到未來。
          </p>
          <ArticleQuote
            borderColor="transparent"
            color="#eeeeee"
            refer="台青蕉樂團團長 王繼維"
            text="好康的都在都市，那庄腳到底剩下什麼？"
          />
          <p class="content-1">
            你問旗山人，他會跟你講，對不起，我們蕉農是沒有文化，香蕉是沒有文化的。
          </p>
          <p class="content-1">
            當旗山沒有了香蕉外銷的黃金歲月，其實地方對於自己的認同跟地方的失落其實很明顯。旗山人對於自己的家鄉，會覺得沒有當年的那種光榮感，在地人的意識也開始薄弱。
          </p>
          <p class="content-1">
            每個人都在懷疑自己的時候，這個地方就會失去原本的樣貌。地方還是需要有對於自己地方認同的共識，這個共識是什麼，其實我們就是用香蕉來找答案。
          </p>
        </ArticleContainer>
        <ArticleYoutube
          src="https://www.youtube.com/embed/FzelSegS3pA"
          :articleMargin="false"
        />
        <ArticleContainer v-if="!isHide">
          <p class="content-2">
            這10年來，大家在思考，怎麼重新面對這個地方的香蕉產業跟文化。產業需要被改變，這邊的人需要被留住，有很多不同的地方文化是需要被延續。
          </p>
          <p class="content-2">
            旗山其實比較特殊，它是一個山與平原的交界，所以這邊會有農業、商業，也會有南來北往的交通所匯集的族群跟地方文化，這邊在100年前有糖業、80年前有香蕉，接著70年代就開始走下坡，到現在開始有一點觀光上的起色，它其實就是在一個時代變遷下，一直在面對跟改變轉型的一個小鎮。
          </p>
          <p class="content-2">
            我們就是在想怎麼樣去累積地方產業的特性，然後透過一些行動，讓人能夠留下來。
          </p>
          <p class="content-2">
            地方本來就是有它的表情，產生出來的產業應該是要有屬於地方的表情。從香蕉開始就會延伸到其他東西，地方的一些文化資產、地方的生活氛圍，比如說什麼樣才叫做蕉農的style，它是一個生活感、是一個這邊會存有的文化。
          </p>
          <p class="content-2">
            香蕉本來就是一個代表正向的水果，全世界都知道香蕉叫happy
            fruit，可是台灣只要談到農業，就會變得很悲情，悲情的話，就沒有辦法討論這個產業的其他可能性。
          </p>
          <ArticleColumnOne
            v-if="!isHide"
            :srcMob="
              require('../../../assets/Kaohsiung/mob/5_Kaohsiung_Stay_Hometown_pic1_mob.jpg')
            "
            :srcPad="
              require('../../../assets/Kaohsiung/pad/5_Kaohsiung_Stay_Hometown_pic1_web.jpg')
            "
            :srcPc="
              require('../../../assets/Kaohsiung/web/5_Kaohsiung_Stay_Hometown_pic1_web.jpg')
            "
            alt="台青蕉樂團團長王繼維努力凝聚旗山人的共識，也為自己找到留在家鄉的方式。"
            >台青蕉樂團團長王繼維努力凝聚旗山人的共識，也為自己找到留在家鄉的方式。記者劉學聖／攝影</ArticleColumnOne
          >
          <p class="content-2">
            我們只是用不同的方式，可能用做出產品來跟社會對話，或是做出香蕉蛋糕、做出音樂等等。我們自己就是用這個方式讓自己留下來，自己先證明這件事情，別人才有可能留下來。
          </p>
          <p class="content-2">
            音樂應該是我們記錄生活的方式，就像在寫日記一樣，我只是把日記也出版出來，讓更多人看到這個當下的紀錄。
          </p>
          <p class="content-2">
            透過了解地方文化，我們重新再認識既熟悉又陌生的這塊土地，熟悉是因為你常常跟它相處，可是陌生就是因為還不夠了解，因為我們有太多的過去是沒有被理解的。
          </p>
          <p class="content-2">
            我們創作的內容大概只佔我們生活全貌的20%，因為太多故事在這個地方發生，有一些東西就大概都是以方圓40公里發生的事情給你的靈感。
          </p>
          <p class="content-2">
            我們是希望創造這樣的機會，讓地方的能量重新被看見，也讓人可以在這邊看到未來。
          </p>
        </ArticleContainer>
      </template>
      <template v-slot:isNotPaid>
        <ArticleContainer
          backgroundColor="transparent"
          :cssProperty="{ paddingTop: 0 }"
        >
          <p class="content-1">
            走進高雄靠山的小鎮、臨海的小漁村，會發現「離鄉」是每位庄腳人最常掛在嘴邊的話題，駛向都市的列車帶走了一批批年輕人，曾經熱鬧、充滿活力的庄腳，如今只剩下老化的人口、荒廢的田地，以及亟待轉型的產業。
          </p>
          <p class="content-1">
            「留在這裡什麼攏嘸，去外面打拼卡實在！」長輩總會說，留在家鄉沒有任何機會，要年輕人趕快離鄉去外面闖。
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
import ArticleQuote from '../../common/ui/ArticleQuote'
import ArticleYoutube from '../../common/ui/ArticleYoutube'

export default {
  name: 'ArticleDetail4',
  props: {
    isHide: {
      type: Boolean
    }
  },
  components: {
    ArticleContainer,
    ArticleColumnOne,
    ArticleQuote,
    ArticleYoutube,
    PayWall
  },
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
