import Taipei from './components/Taipei/Taipei'
import NewTaipei from './components/NewTaipei/NewTaipei.vue'

const Fake = { template: '<span></span>' }

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
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
