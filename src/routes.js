import Taipei from './components/Taipei/Taipei'
import NewTaipei from './components/NewTaipei/NewTaipei.vue'
import Taoyuan from './components/Taoyuan/Taoyuan.vue'
import Tainan from './components/Tainan/Tainan.vue'

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
    path: '/Taipei/*',
    redirect: '/Taipei'
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
    path: '/New-Taipei/*',
    redirect: '/New-Taipei'
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
    path: '/Taoyuan/*',
    redirect: '/Taoyuan'
  },
  {
    path: '/Tainan',
    component: Tainan
  },
  {
    path: '/Tainan/:id',
    component: Tainan
  },
  {
    path: '/Tainan/*',
    redirect: '/Tainan'
  },
  {
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
