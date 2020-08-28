<template>
  <div class="progress">
    <span
      class="progress-item"
      :class="{ active: active === i }"
      v-for="(item, i) in length"
      :key="i"
    />
  </div>
</template>

<script>
export default {
  name: 'Progress',
  props: { active: { type: Number, default: 0 }, length: { type: Number } }
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
    top: 0;
    left: 9.5%;
  }
  @media screen and (max-width: 1024.98px) {
    height: 50vh;
    bottom: 12.89%;
    left: 4.5vw;
    justify-content: flex-end;
  }
  @media screen and (max-width: 413.98px) {
    left: 7.5vw;
    bottom: 10%;
  }

  z-index: 300;
}
.progress-item {
  height: 43.6px;
  @media screen and (max-width: 1024.98px) {
    height: 23px;
  }
  width: 1px;
  background-color: #fff;
  opacity: 0.5;
  &.active {
    opacity: 1;
  }
  margin: 3.9px 0;
}
</style>
