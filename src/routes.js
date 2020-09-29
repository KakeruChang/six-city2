import Taipei from './components/Taipei/Taipei'
import NewTaipei from './components/NewTaipei/NewTaipei.vue'
import Taoyuan from './components/Taoyuan/Taoyuan.vue'

const routes = [
  {
    path: '/Taipei',
    component: Taipei
  },
  {
    path: '/Taipei/:id',
    component: Taipei
  },
  {
    path: '/New-Taipei',
    component: NewTaipei
  },
  {
    path: '/New-Taipei/:id',
    component: NewTaipei
  },
  {
    path: '/Taoyuan',
    component: Taoyuan
  },
  {
    path: '/Taoyuan/:id',
    component: Taoyuan
  },
  {
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
