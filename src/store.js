import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: { timeLimitTrigger: false },
  getters: {},
  mutations: {
    TIME_LIMIT(state) {
      state.timeLimitTrigger = true
    }
  },
  actions: {
    timeLimit(context) {
      context.commit('TIME_LIMIT')
    }
  }
})
