<template>
  <transition name="fade">
    <div v-if="!isOverTime && !hide" class="time-limit-area">
      <div class="title">
        <h1>聯合報數位版</h1>
        <h1>限時免費試閱</h1>
      </div>
      <div class="count-time">
        <span class="unit">倒數計時</span> {{ countdown.days
        }}<span class="unit">天</span> {{ countdown.hours
        }}<span class="unit">時</span> {{ countdown.minutes
        }}<span class="unit">分</span> {{ countdown.seconds
        }}<span class="unit">秒</span>
      </div>
      <div class="icon-area"><NmdArrow iconColor="#afafaf" /></div>
      <div class="icon-area">繼續閱讀</div>
    </div>
  </transition>
</template>

<script>
import { parseISO, differenceInSeconds, addSeconds } from 'date-fns'
import NmdArrow from './common/accessories/NmdArrow.vue'

export default {
  name: 'TimeLimitAlert',
  components: { NmdArrow },
  data() {
    return {
      startTime: new Date(),
      aim: new Date(2021, 0, 30, 6, 0, 0, 0),
      startHeight: 0,
      trigger: false,
      triggerHeight: false,
      hide: false
    }
  },
  methods: {
    async getServerTime() {
      const res = await fetch('https://newmedia.udn.com.tw/active/api/servers')
      const data = await res.json()
      this.startTime = parseISO(data.serverTime)
      setInterval(() => {
        this.startTime = addSeconds(this.startTime, 1)
      }, 1000)
    },
    getHeight() {
      if (!this.trigger) {
        this.trigger = true
      } else {
        if (!this.triggerMemo) {
          this.startHeight = window.pageYOffset
          this.triggerMemo = true
        } else {
          if (
            window.pageYOffset - this.startHeight >
            0.5 * window.innerHeight
          ) {
            this.hide = true
            this.$store.dispatch('timeLimit')
          }
        }
      }
    }
  },
  computed: {
    countdown() {
      const difference = differenceInSeconds(this.aim, this.startTime)

      const days = Math.floor(difference / (60 * 60 * 24))
      const hours = Math.floor(difference / (60 * 60) - days * 24)
      const minutes = Math.floor(difference / 60 - days * 24 * 60 - hours * 60)
      const seconds = difference % 60

      return { days, hours, minutes, seconds }
    },
    isOverTime() {
      const difference = differenceInSeconds(this.aim, this.startTime)
      if (difference < 0) {
        return true
      }
      return false
    }
  },
  mounted() {
    this.getServerTime()
    window.addEventListener('scroll', this.getHeight, false)
  },
  destroyed() {
    window.removeEventListener('scroll', this.getHeight, false)
  }
}
</script>

<style lang="scss" scoped>
.fade-leave-active {
  transition: opacity 1s;
}
.fade-leave-to {
  opacity: 0;
}
.time-limit-area {
  background-color: #fff;
  z-index: 5000;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}
.count-time {
  font-size: 16px;
  font-weight: 500;
  margin: 10px 0 40px;
  text-align: center;
  color: #ca292f;
  .unit {
    color: #000;
  }
}
.icon-area {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}
.title {
  margin: 40px 15px 0 15px;
  display: flex;
  justify-content: center;
  h1 {
    font-family: source-han-serif-tc, sans-serif;
    font-size: 32px;
    font-weight: bold;
    color: #000000;
    margin: 0;
    text-align: center;
    margin: 0 3.5px;
  }
  @media screen and (max-width: 767px) {
    flex-direction: column;
  }
}
</style>
