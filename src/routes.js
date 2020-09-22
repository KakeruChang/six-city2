import Taipei from './components/Taipei/Taipei'

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
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
