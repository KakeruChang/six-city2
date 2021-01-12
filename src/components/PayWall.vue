<template>
  <div>
    <transition name="wall">
      <div v-if="isVisible">
        <slot name="isPaid" />
      </div>
      <div v-else>
        <slot name="isNotPaid" />
        <div class="wall">
          <h2 class="title">成為付費訂戶 閱讀全文</h2>
          <p class="hint">
            歡迎成為聯合報數位版付費訂戶，即可看完整內容，還有聯合報數位版的精選重點新聞、深度內容，讓你獨家看到飽！
          </p>
          <div class="btn-wrapper">
            <a class="btn" href="https://vip.udn.com/vip/order" target="_blank">
              <span class="text">
                付費訂閱
              </span>
            </a>
          </div>
          <div class="login">
            已經是訂戶嗎？
            <a
              class="link"
              href="https://vip.udn.com/member/login"
              target="_blank"
              >登入會員</a
            >
          </div>
        </div>
      </div>
    </transition>
  </div>
</template>

<script>
import { parseISO, isAfter } from 'date-fns'

export default {
  name: 'PayWall',
  computed: {
    isVisible() {
      if (!this.$store.state.isFree) {
        if (this.$store.state.memberIdentity === 2) {
          return true
        }
        return false
      }
      return true
    }
  },
  methods: {
    checkIsVisible() {
      if (!this.$store.state.checkIdentyTrigger) {
        this.$store.dispatch('checkIdentity')
      }
    }
  },
  mounted() {
    this.checkIsVisible()
  }
}
</script>

<style lang="scss" scoped>
.wall {
  background-color: #fff;
  width: 720px;
  margin: 0 auto 104px;
  @media screen and (max-width: 768px) {
    width: 576px;
  }
  @media screen and (max-width: 608px) {
    width: calc(100vw - 32px);
  }
}
.title {
  padding-top: 50px;
  font-family: source-han-serif-tc, sans-serif;
  font-size: 36px;
  font-weight: bold;
  color: #171717;
  text-align: center;
  @media screen and (max-width: 576px) {
    font-size: 28px;
  }
  @media screen and (max-width: 375px) {
    font-size: 24px;
    padding-top: 27px;
  }
}
.hint {
  font-size: 20px;
  line-height: 1.7;
  text-align: center;
  color: #706f6f;
  margin: 20px 100px 40px;
  @media screen and (max-width: 768px) {
    margin: 20px 60px 40px;
  }
  @media screen and (max-width: 576px) {
    font-size: 16px;
    margin: 20px 45px 40px;
  }
  @media screen and (max-width: 375px) {
    margin: 10px 20px 20px;
  }
}
.btn-wrapper {
  display: flex;
  justify-content: center;
}
.btn {
  text-decoration: none;
  width: 280px;
  height: 60px;
  border-radius: 3px;
  background-color: #ca292f;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  @media screen and (max-width: 576px) {
    width: 250px;
  }
  @media screen and (max-width: 375px) {
    width: 200px;
  }
}
.login {
  padding: 30px 0 36px;
  font-size: 16px;
  color: #3d3d3d;
  text-align: center;
  .link {
    color: #ca292f;
  }
}

// v-transition
.wall-leave {
  opacity: 1;
}
.wall-leave-active {
  transition: opacity 0.5s;
}
.wall-leave-to {
  opacity: 0;
}
.wall-enter {
  opacity: 0;
}
.wall-enter-active {
  transition: opacity 0.5s;
}
.wall-enter-to {
  opacity: 1;
}
</style>
