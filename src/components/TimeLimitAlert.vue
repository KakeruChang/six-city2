<template>
  <transition name="vanishDown">
    <div
      v-if="isExist"
      class="time-limit-area"
      ref="timeLimitArea"
      :style="{ top: `${areaTop}px` }"
    >
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
  props: {
    innerHeight: { type: Number },
    displacement: { type: Number }
  },
  data() {
    return {
      startTime: new Date(),
      startHeight: 0,
      trigger: false,
      triggerHeight: false,
      hide: false,
      areaTop: 0,
      removeTrigger: true,
      isOver5Seconds: false
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
        } else if (
          window.pageYOffset - this.startHeight >
          0.5 * window.innerHeight
        ) {
          this.hide = true
          if (this.isOver5Seconds) {
            this.$store.dispatch('timeLimit')
          }
        }
      }
    },
    countAreaPosition() {
      if (this.$refs.timeLimitArea) {
        this.areaTop =
          this.innerHeight -
          this.$refs.timeLimitArea.offsetHeight +
          this.displacement
      } else if (!removeTrigger) {
        window.removeEventListener('scroll', this.countAreaPosition, false)
        this.removeTrigger = true
      }
    },
    countTimeStart() {
      setTimeout(() => {
        this.isOver5Seconds = true
      }, 5000)
    }
  },
  computed: {
    countdown() {
      const difference = differenceInSeconds(
        this.$store.state.aim,
        this.startTime
      )

      const days = Math.floor(difference / (60 * 60 * 24))
      const hours = Math.floor(difference / (60 * 60) - days * 24)
      const minutes = Math.floor(difference / 60 - days * 24 * 60 - hours * 60)
      const seconds = difference % 60

      return { days, hours, minutes, seconds }
    },
    isOverTime() {
      const difference = differenceInSeconds(
        this.$store.state.aim,
        this.startTime
      )
      if (difference < 0) {
        return true
      }
      return false
    },
    isExist() {
      if (!this.isOverTime) {
        if (this.isOver5Seconds) {
          if (!this.hide) {
            return true
          }
          return false
        }
        return true
      }
      return false
    }
  },
  mounted() {
    this.getServerTime()
    window.addEventListener('scroll', this.getHeight, false)
    this.countAreaPosition()
    window.addEventListener('scroll', this.countAreaPosition, false)

    this.countTimeStart()
  },
  destroyed() {
    window.removeEventListener('scroll', this.getHeight, false)
    window.removeEventListener('scroll', this.countAreaPosition, false)
  }
}
</script>

<style lang="scss" scoped>
.time-limit-area {
  background-color: #fff;
  z-index: 5000;
  position: absolute;
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
