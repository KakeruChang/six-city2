<template>
  <div class="city-wrapper">
    <div class="city" v-for="(city, i) in cities" :key="city.title">
      <a
        class="city-block"
        :class="{ left: i % 2 === 0, right: i % 2 !== 0 }"
        :href="city.link"
        target="_blank"
        @click="clickHandler(city.name)"
      >
        <span class="city-name" :style="{ color: city.color }">
          {{ city.name }}
        </span>
        <div class="city-img-frame">
          <img class="city-img" :src="city.img" alt="" />
        </div>
        <h2 class="city-title">{{ city.title }}</h2>
        <p class="city-text">{{ city.text }}</p>
        <span class="city-related">
          <span class="btn-arrow">
            <img
              class="jump"
              :src="require('../../assets/Taipei/arrow.svg')"
              alt=""
            />
          </span>
          <span class="continue">
            <span>
              繼 續 閱 讀
            </span>
          </span>
        </span>
      </a>
    </div>
  </div>
</template>

<script>
import { sendGaMethods } from '@/mixins/masterBuilder.js'
import { sendFbPixel } from '@/mixins/fbPixel'

export default {
  name: 'AllCityLinks',
  mixins: [sendGaMethods],
  data() {
    return {
      cities: [
        {
          name: '台 北',
          img: require('../../assets/Cities/1_Taipei.png'),
          title: '在新與舊的碰撞中前進',
          text:
            '台北市這20年來改變了什麼？為什麼台北人有這麼多矛盾與衝突？《聯合報》從各種角度紀錄這座城市的脈動。',
          link: './Taipei',
          color: '#ff2300'
        },
        {
          name: '新 北',
          img: require('../../assets/Cities/2_New-Taipei.png'),
          title: '不只是回家睡覺的地方',
          text:
            '新北人常說，他們的生活圈都在台北，「家，只是回家睡覺的地方」。但近年來，許多新北人開始在新北尋找回來與留下的理由。',
          link: './New-Taipei',
          color: '#00f0d8'
        },
        {
          name: '桃 園',
          img: require('../../assets/Cities/3_Taoyuan.png'),
          title: '城市的樣貌不該只有一種',
          text:
            '桃園不斷推出新的城市規劃與建案，但在一昧拚發展的過程中，卻少有人靜下來思考，桃園要的到底是甚麼？桃園自己已經有什麼？',
          link: './Taoyuan',
          color: '#00edff'
        },
        {
          name: '台 中',
          img: require('../../assets/Cities/4_Taichung.png'),
          title: '空汙、網美、大甲媽  什麼是真台中',
          text:
            '台中人常形容自己的城市很「中間」，但真的嗎？《聯合報》尋找台中的城市切面，紀錄高速發展下台中人正努力的日常。',
          link: './Taichung',
          color: '#cbcb00'
        },
        {
          name: '台 南',
          img: require('../../assets/Cities/5_Tainan.png'),
          title: '走出傳統  台南混血新美學',
          text:
            '台南的城市面貌不斷由舊翻新，從老宅新生、第二美術館的落成等，但在傳統與創新並行的路上，台南如何賦予老城新價值？',
          link: './Tainan',
          color: '#dc4705'
        },
        {
          name: '高 雄',
          img: require('../../assets/Cities/6_Kaohsiung.png'),
          title: '從離鄉到回鄉  高雄讓我驕傲',
          text:
            '高雄真的留不住年輕人嗎？《聯合報》紀錄高雄人為這座城市找解方的努力，希望下個20年，更多北漂青年能夠回到這塊土地。',
          link: './Kaohsiung',
          color: '#4a96f9'
        }
      ]
    }
  },
  methods: {
    clickHandler(city) {
      this.sendGA({
        category: 'related',
        action: 'click',
        label: `article_${city}`
      })
      sendFbPixel('閱讀下一頁')
    }
  }
}
</script>

<style lang="scss" scoped>
.city-wrapper {
  display: flex;
  flex-wrap: wrap;
  background-color: #eeeeee;
}
.city {
  flex: 0 0 50%;
  max-width: 50%;
  @media screen and (max-width: 767.98px) {
    flex: 0 0 100%;
    max-width: 100%;
  }
}

$city-block-size-l: 400px;
$city-block-size-m: 360px;
$city-block-size-s: 300px;
$city-block-size-xs: 270px;
.city-block {
  display: block;
  text-decoration: none;
  position: relative;
  width: $city-block-size-l;
  @media screen and (max-width: 1024.98px) and (min-width: 768px) {
    width: $city-block-size-s;
  }
  @media screen and (max-width: 767.98px) and (min-width: 414px) {
    width: $city-block-size-m;
  }
  @media screen and (max-width: 413.98px) {
    width: $city-block-size-xs;
  }
  &.left {
    margin: 0 40px 0 auto;
    @media screen and (max-width: 1024.98px) and (min-width: 768px) {
      margin: 0 18px 0 auto;
    }
    @media screen and (max-width: 767.98px) {
      margin: 0 auto;
    }
    @media screen and (max-width: 320px) {
      margin: 0 14px 0 36px;
    }
  }
  &.right {
    margin: 0 auto 0 40px;
    @media screen and (max-width: 1024.98px) and (min-width: 768px) {
      margin: 0 auto 0 18px;
    }
    @media screen and (max-width: 767.98px) {
      margin: 0 auto;
    }
    @media screen and (max-width: 320px) {
      margin: 0 14px 0 36px;
    }
  }
}

.city-name {
  position: absolute;
  opacity: 0.95;
  font-family: source-han-serif-tc, serif;
  $city-name-size: 75px;

  @media screen and (max-width: 1024.98px) and (min-width: 414px) {
    $city-name-size: 60px;
  }
  @media screen and (max-width: 413.98px) {
    $city-name-size: 50px;
  }
  font-size: $city-name-size;
  font-weight: 900;
  line-height: 1.33;
  z-index: 1;
  left: calc(-#{$city-name-size}* 0.6);
  top: calc(-#{$city-name-size}* 3 / 4);
  @media screen and (max-width: 1024.98px) and (min-width: 768px) {
    left: calc(-#{$city-name-size}* 0.4);
  }
  @media screen and (max-width: 767.98px) and (min-width: 414px) {
    left: calc(-#{$city-name-size}* 0.3);
  }
  @media screen and (max-width: 413.98px) {
    left: calc(-#{$city-name-size}* 0.4);
    top: calc(-#{$city-name-size}* 0.9);
  }
}
.city-img-frame {
  overflow: hidden;
  width: 100%;
  height: 250px;
  @media screen and (max-width: 1024.98px) and (min-width: 768px) {
    height: 187.5px;
  }
  @media screen and (max-width: 767.98px) and (min-width: 414px) {
    height: 225px;
  }
  @media screen and (max-width: 413.98px) {
    height: 168.8px;
  }
  border-radius: 5px;
}
.city-img {
  width: 100%;
  height: 100%;
  transform: scale(1);
  transition: all 0.5s linear;
  &:hover {
    transform: scale(1.2);
  }
}
.city-title {
  margin: 15px 0 6px 0;
  font-size: 24px;
  font-weight: bold;
  line-height: 1.5;
  text-align: left;
  color: #171717;
}
.city-text {
  margin-bottom: 6px;
  font-size: 20px;
  line-height: 1.7;
  color: #171717;
}
.city-related {
  display: flex;
  width: 180px;
  margin-bottom: 130px;
  @media screen and (max-width: 767.98px) and (min-width: 414px) {
    margin-bottom: 108px;
  }
  @media screen and (max-width: 413.98px) {
    margin-bottom: 97px;
  }
}
.continue {
  width: 96px;
  height: 48px;
  margin-left: 13px;
  font-size: 18px;
  line-height: 1.89;
  color: #706f6f;
  display: flex;
  align-items: center;
}

.btn-arrow {
  text-decoration: none;
  display: flex;
  justify-content: center;
  line-height: 80%;
  width: 48px;
  height: 48px;
  padding: 10px;
  border: 1px solid #afafaf;
  padding: 15.5px;
  border-radius: 50%;
  transition: all 0.25s ease-out;
}
@keyframes jump {
  0% {
    transform: translateX(0%);
  }
  50% {
    transform: translateX(50%);
  }
  100% {
    transform: translateX(0%);
  }
}
.jump {
  animation: jump 1s linear alternate infinite;
}
</style>
