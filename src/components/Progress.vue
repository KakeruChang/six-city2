<template>
  <div class="progress" :style="{ top: `${top}px` }">
    <span
      class="progress-item"
      :class="{ active: active === i }"
      :style="{ height: barLength }"
      v-for="(item, i) in length"
      @click="clickProgress(i)"
      :key="i"
    />
  </div>
</template>

<script>
export default {
  name: 'Progress',
  props: {
    active: { type: Number, default: 0 },
    length: { type: Number },
    displayAreaFromTop: {
      type: Number
    },
    barLength: {
      type: String,
      default: '43px'
    }
  },
  methods: {
    clickProgress(i) {
      this.$emit('progressClicked', i)
    }
  },
  computed: {
    top() {
      // const { innerWidth } = window
      const innerHeight = require('ios-inner-height')
      let adjustment = 0

      if (innerWidth >= 1025) {
        adjustment = 0
      } else if (innerWidth < 1025 && innerWidth > 768) {
        adjustment = innerWidth * 0.55
      } else if (innerWidth <= 768 && innerWidth >= 576) {
        adjustment = innerWidth * 0.6
      } else if (innerWidth < 576 && innerWidth >= 414) {
        adjustment = innerWidth * 0.65
      } else if (innerWidth < 414 && innerWidth >= 375) {
        adjustment = innerWidth * 0.7
        if (innerHeight > 670) {
          adjustment = innerWidth * 0.75
        }
      } else if (innerWidth < 375 && innerWidth >= 335) {
        adjustment = innerWidth * 0.75
        if (innerHeight < 600) {
          adjustment = innerWidth * 0.65
        }
      } else if (innerWidth < 335) {
        adjustment = innerWidth * 0.75
      }

      return this.displayAreaFromTop + adjustment
    }
  }
}
</script>
<style lang="scss" scope>
.progress {
  height: 100vh;
  display: flex;
  position: fixed;
  flex-direction: column;
  justify-content: center;
  @media screen and (min-width: 1025px) {
    left: 9.5%;
  }
  @media screen and (max-width: 1024.98px) {
    height: 50vh;
    left: 3.5vw;
    justify-content: flex-end;
  }
  @media screen and (max-width: 768px) {
    left: 4.5vw;
  }
  @media screen and (max-width: 576px) {
    left: 8.5vw;
  }
  @media screen and (max-width: 414px) {
    left: 6vw;
  }
  @media screen and (max-width: 374.98px) {
    left: 8vw;
  }
  @media screen and (max-width: 374.98px) and(max-height:600px) {
    left: 7vw;
  }
  @media screen and (max-width: 334.98px) {
    left: 8vw;
  }

  z-index: 300;
}
.progress-item {
  cursor: pointer;
  width: 1px;

  background-color: #5b5b5b;
  &.active {
    background-color: #fff;
  }
  margin: 3.9px 0;
}
</style>
