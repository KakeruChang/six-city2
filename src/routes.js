import Taipei from './components/Taipei/Taipei'
import NewTaipei from './components/NewTaipei/NewTaipei.vue'
import Taoyuan from './components/Taoyuan/Taoyuan.vue'
import Tainan from './components/Tainan/Tainan.vue'
import Kaohsiung from './components/Kaohsiung/Kaohsiung.vue'
import Taichung from './components/Taichung/Taichung.vue'
import AllCities from './components/All/AllCities.vue'

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
    path: '/Kaohsiung',
    component: Kaohsiung
  },
  {
    path: '/Kaohsiung/:id',
    component: Kaohsiung
  },
  {
    path: '/Kaohsiung/*',
    redirect: '/Kaohsiung'
  },
  {
    path: '/Taichung',
    component: Taichung
  },
  {
    path: '/Taichung/:id',
    component: Taichung
  },
  {
    path: '/Taichung/*',
    redirect: '/Taichung'
  },
  {
    path: '/',
    component: AllCities
  },
  {
    path: '*',
    redirect: '/'
  }
]

export default routes
