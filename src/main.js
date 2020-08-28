import Vue from 'vue'
import VueRouter from 'vue-router'
import { rwdMethods } from '@/mixins/masterBuilder.js'
import VueYoutube from 'vue-youtube'
import 'intersection-observer'

import App from './App.vue'
import store from './store'
import routes from './routes'

import '@/assets/style/main.scss'
import '@/assets/style/font.scss'

Vue.use(VueYoutube)
Vue.use(VueRouter)

const router = new VueRouter({
  routes,
  base: '/',
  mode: 'hash'
})

Vue.config.productionTip = false
Vue.prototype.$anchorList = []

new Vue({
  store,
  router,
  render: h => {
    return h(App)
  },
  mixins: [rwdMethods]
}).$mount('#app')

/* rec.udn.com追蹤碼 */
window.onload = () => {
  document.getElementsByTagName('iframe')[0].style.top = 0
}
