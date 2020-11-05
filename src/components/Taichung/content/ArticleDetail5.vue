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
      <h1 class="title">網美心中的打卡城市</h1>
    </ArticleContainer>
    <ArticleContainer
      backgroundColor="transparent"
      :cssProperty="{ paddingTop: 0 }"
    >
      <p class="content-1">
        日前有個朋友跟我說，她前陣子去台中玩了一趟，行程是「網美景點一日遊」，一天跑完如孵空間、審計新村、清水伐木場等IG打卡熱點，還去了如田樂漢堡等熱門餐廳。我聽完心想：「哇！原來台中市現在是這樣玩？」
      </p>
      <p class="content-1">
        詢問台中在地人，他們只淡淡地說：「很多地方大家都來狂拍照、狂打卡，我們自己都覺得莫名其妙，在地人本來聽都沒聽過的地方，突然就紅起來了」。全台最大的美食APP社群
        《menu美食誌》2017年曾統計「最多打卡」、「最多照片分享」的城市排名，台中僅次於首都台北，在六都中排名第二。
      </p>

      <h2 class="timeline-title">台中市打卡＆美照熱點變遷圖</h2>
      <ul class="timeline-list">
        <li
          class="timeline-list-li"
          v-for="item in timeline"
          :key="item.content"
        >
          <div class="timeline-list-wrapper">
            <div>
              <span class="timeline-time">{{ item.time }}</span
              ><span class="timeline-content">{{ item.content }}</span>
            </div>
            <div class="timeline-content" style="font-size:20px">
              {{ item.note }}
            </div>
            <BasePicture
              v-if="item.img"
              :srcMob="item.img.mob"
              :srcPad="item.img.pad"
              :srcPc="item.img.web"
              alt=""
            />
          </div>
        </li>
      </ul>
    </ArticleContainer>

    <ArticleContainer v-if="!isHide">
      <h2>廢墟鬼屋 變身網美拍照聖地</h2>
      <p class="content-2">
        位於台中火車站附近的「千越大樓」，原本是台中市相當著名的商場，有冰宮、舞廳等年輕文化，但因產權、都市更新等問題閒置超過20年，還被票選為全台十大鬼屋。
      </p>
      <p class="content-2">
        近年隨著年輕藝術團隊「逃亡計劃 Escape PLAN
        ''X''」入駐，將廢棄大樓成功轉型為全台最大棟的塗鴉大樓，還將部分樓層改造為住宿空間，一推出就被搶空，成為台中現在熱門網美打卡點之一。
      </p>
      <p class="content-2">
        團隊成員都是台中人，千越大樓面臨拆除重建時，因部分產權希望將建築活化改造，邀請團隊進駐，開啟了千越大樓的「變身」之路，透過塗鴉改造閒置空間，以色彩鮮豔的塗鴉、豐富的裝置藝術打破原本死氣沈沈的廢棄建築印象，吸引不少人前來拍照打卡。
      </p>
      <ArticleColumnOne
        v-if="!isHide"
        :srcMob="
          require('../../../assets/Taichung/mob/6_Taichung_photo_pic9_mob.jpg')
        "
        :srcPad="
          require('../../../assets/Taichung/pad/6_Taichung_photo_pic9_web.jpg')
        "
        :srcPc="
          require('../../../assets/Taichung/web/6_Taichung_photo_pic9_web.jpg')
        "
        alt="台中市千越大樓從陰森的廢棄建築，搖身一變為拍照熱點。"
        >台中市千越大樓從陰森的廢棄建築，搖身一變為拍照熱點。圖／取自「逃亡計劃
        Escape PLAN ''X''」粉絲專頁</ArticleColumnOne
      >
      <p class="content-2">
        團隊說，現在來千越大樓的族群除了網美、觀光客，在地人如台中市攝影協會也會定期來參訪拍攝，還有學校校外教學、家庭週末帶小孩來郊遊等，住宿更是每逢假日必滿，「大家都覺得很新鮮」；團隊與原居民關係也都保持的不錯，「長輩們都蠻鼓勵我們在這裡的所有藝術創作與行動」。
      </p>
      <p class="content-2">
        「廢墟就如同一個城市的『祖產』，但城市會不斷改變和更新，能否活用這些資產，創造未來？」團隊說，千越大樓像是青年藝術家的一個小小避風港，也讓社會大眾看見廢墟能夠為城市帶來什麼樣的價值，希望千越大樓的經驗能在城市思考未來發展時，給一些不同的啟發。
      </p>

      <h2 style="padding-top:48px">今天爆紅明天沒落</h2>

      <p class="content-2">
        千越大樓因為有藝文團隊進駐，在團隊的規劃與經營下，大家在拍照之餘，還有機會認識這個拍照景點背後的歷史與過去，以及藝術改造帶來的價值，但台中現在許多熱門的打卡景點、新興商圈，人潮拍完就走、民眾膩了就開發下一個，看在台中人眼裡不免憂心。
      </p>
      <p class="content-2">
        走過一次「台中網美景點一日遊」的友人Chi，事後回想那一天走過的地點，「照片拍起來很美、有意境，但拍完之後，就不知道要幹嘛了，很空虛」，餐廳至少還有東西吃，但很多景點真的只有拍照，也不知道這些地方背後有什麼故事。
      </p>
      <p class="content-2">
        「你有沒有覺得，台中的商圈、景點變化的特別快速？」在台中市區開咖啡店的X先生（化名）憂心忡忡地對我說，有熱門打卡景點帶來人潮當然很好，但多是短期效應。
      </p>
      <p class="content-2">
        X先生觀察，除非是餐飲業的如宮原眼科，或是自然景點如大坑步道，這些本身就有「功能性」，有天大家不拍照了，還是會去吃東西、爬山，但其他地方很容易因為沒有夠豐富的特色，變成一次性拍照景點，商家難持續經營，景點或商圈就此沒落。
      </p>
      <p class="content-2">
        例如東海藝術街，曾經是台中必訪的景點，店家寥寥無幾；彩虹眷村紅極一時，但周圍沒有形成文化聚落，拍照後沒有其他地點或特色讓人潮留下，現在也逐漸退燒。
      </p>
      <ArticleQuote
        borderColor="transparent"
        color="#000000"
        text="但大家好像不在意，反正再開發新的就好，同一套模式一直複製"
      />
      <p class="content-2">
        X先生曾想過，這是不是城市發展觀光，要維持新鮮感的常態？或是社群時代下求新求變的「日常」，但看著台北如華山藝文園區或松山菸廠，都可以持續保溫、去過還會想再去，台中似乎還沒找到對的方法，抓住那稍縱即逝的熱潮。
      </p>
    </ArticleContainer>
  </div>
</template>

<script>
import ArticleContainer from '../../common/ui/ArticleContainer'
import ArticleColumnOne from '../../common/ui/ArticleColumnOne'
import ArticleQuote from '../../common/ui/ArticleQuote'
import BasePicture from '@/components/common/accessories/BasePicture.vue'

export default {
  name: 'ArticleDetail5',
  props: {
    isHide: {
      type: Boolean
    }
  },
  data() {
    return {
      timeline: [
        {
          time: '1990年代：',
          content: '東海大學路思義教堂、東海藝術街',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic1_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic1_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic1_web.jpg')
          }
        },
        {
          time: '2010年之後：',
          content: '彩虹眷村',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic2_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic2_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic2_web.jpg')
          }
        },
        {
          time: '2013年後：',
          content: '勤美誠品、宮原眼科',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic3_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic3_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic3_web.jpg')
          }
        },
        {
          time: '2015年後：',
          content: '高美濕地',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic4_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic4_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic4_web.jpg')
          }
        },
        {
          time: '2017年後：',
          content: '清水伐木場、台中歌劇院',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic5_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic5_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic5_web.jpg')
          }
        },
        {
          time: '2018年後：',
          content: '審計新村、大坑步道',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic6_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic6_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic6_web.jpg')
          }
        },
        {
          time: '2019年後：',
          content: '千越大樓、孵空間',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic7_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic7_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic7_web.jpg')
          }
        },
        {
          time: '2020年最新：',
          content: '筏子溪門戶迎賓水岸廊道',
          img: {
            mob: require('../../../assets/Taichung/mob/6_Taichung_photo_pic8_mob.jpg'),
            pad: require('../../../assets/Taichung/pad/6_Taichung_photo_pic8_web.jpg'),
            web: require('../../../assets/Taichung/web/6_Taichung_photo_pic8_web.jpg')
          }
        },
        {
          time: '下一個熱點在哪？',
          note: '（若有遺漏或有私房景點推薦，歡迎讀者們踴躍留言補充）'
        }
      ]
    }
  },
  components: { ArticleContainer, ArticleColumnOne, ArticleQuote, BasePicture },
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

h2 {
  font-size: 24px;
  font-weight: bold;
  line-height: 1.5;
}
.timeline-title {
  color: #fff4a8;
  margin: 80px 0 23px !important;
}
.timeline-list {
  position: relative;
  &::before {
    content: '';
    position: absolute;
    left: 0;
    top: 7.5px;
    bottom: 0;
    background-color: #d8d8d8;
    width: 0.5px;
  }
}
.timeline-list-li {
  position: relative;
  &::after {
    content: '';
    border-radius: 50%;
    position: absolute;
    width: 15px;
    height: 15px;
    left: -7.5px;
    top: 7.5px;
    background-color: #ffffff;
  }
}
.timeline-list-wrapper {
  margin: 0 0 60px 30px;
}

.timeline-time {
  margin-bottom: 10px;
  color: #fff4a8;
  font-size: 24px;
}
.timeline-content {
  margin-bottom: 10px;
  color: #eeeeee;
  font-size: 24px;
}
</style>
