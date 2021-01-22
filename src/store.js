import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    folderRoute: 'newmedia/2021/cities',
    timeLimitTrigger: false,
    aim: new Date(2021, 0, 30, 0, 0, 0, 0),
    checkIdentyTrigger: false,
    memberIdentity: 0,
    isVisible: false
  },
  getters: {},
  mutations: {
    TIME_LIMIT(state) {
      state.timeLimitTrigger = true
    },
    CHECK_IDENTITY(state, payload) {
      const { identity, isFree } = payload

      state.memberIdentity = identity
      state.isVisible = isFree
    },
    TRIG_CHECK_IDENTITY(state) {
      state.checkIdentyTrigger = true
    }
  },
  actions: {
    timeLimit(context) {
      context.commit('TIME_LIMIT')
    },
    async checkIdentity(context) {
      context.commit('TRIG_CHECK_IDENTITY')

      const url = 'https://vip.udn.com/newmedia/active/api/project?flag=Six'

      const res = await fetch(url)
      const result = await res.json()

      context.commit('CHECK_IDENTITY', result)
    }
  }
})
