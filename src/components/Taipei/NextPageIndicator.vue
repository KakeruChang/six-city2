<template>
  <div :style="{ backgroundColor }">
    <template v-if="activeWithInside !== contentWithInsideLength">
      <div class="indicator-wrapper">
        <span>{{ `${Math.round((1 - progressToNextPage) * 100)}%` }}</span>
      </div>
      <div class="indicator-wrapper">
        <div class="indicator-line">
          <span
            class="red-line"
            :style="{ height: `${(1 - progressToNextPage) * 100}%` }"
          />
          <span
            class="gray-line"
            :style="{ height: `${progressToNextPage * 100}%` }"
          />
        </div>
      </div>
      <div class="indicator-wrapper">
        <span @click="scrollToNext">
          <NmdArrow iconColor="#afafaf" />
        </span>
      </div>
      <div class="indicator-wrapper">
        <span
          class="indicator-text pointer"
          @click="scrollToNext"
          style="color:#ff2300;margin-top:16px;"
          >下一篇</span
        >
      </div>
      <div class="indicator-wrapper">
        <span
          class="indicator-text pointer"
          @click="scrollToNext"
          style="color:#171717;margin-top:5px;"
          >{{ nextTitle }}</span
        >
      </div>
    </template>
    <div class="indicator-wrapper">
      <span class="indicator-page"
        >{{ activeWithInside }}/{{ contentWithInsideLength }}</span
      >
    </div>
  </div>
</template>

<script>
import NmdArrow from '../common/accessories/NmdArrow'
import content from '../../data/data-taipei'

export default {
  name: 'NextPageIndicator',
  components: { NmdArrow },
  props: {
    nextTitle: {
      type: String
    },
    backgroundColor: {
      type: String,
      default: '#fff'
    },
    active: {
      type: Number
    },
    progressToNextPage: {
      type: Number
    }
  },
  data() {
    return { content }
  },
  methods: {
    scrollToNext() {
      this.$emit('scrollToNext')
    }
  },
  computed: {
    contentWithInsideLength() {
      let count = 0
      this.content.forEach(item => {
        if (item.titleOut) {
          count += 1
        }
      })
      return count
    },
    activeWithInside() {
      let minus = 0
      for (let i = 0; i < this.active; i += 1) {
        if (!this.content[i].titleOut) {
          minus += 1
        }
      }

      return this.active + 1 - minus
    }
  }
}
</script>
<style lang="scss" scoped>
.indicator-wrapper {
  display: flex;
  justify-content: center;
}
.indicator-line {
  display: flex;
  flex-direction: column;
  height: 180px;
  align-items: center;
}
.gray-line {
  width: 2px;
  background-color: rgb(176, 176, 176);
}
.red-line {
  width: 6px;
  border-radius: 5px;
  background-color: #ff2300;
}
.indicator-text {
  font-size: 20px;
  line-height: 1.7;
}
.indicator-page {
  margin-top: 35px;
  font-family: aria-text-g2, sans-serif;
  font-size: 18px;
  line-height: 1.89;
  color: #afafaf;
}
.pointer {
  cursor: pointer;
}
</style>
