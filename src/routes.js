// import ArticleDetail from './components/ArticleDetail.vue'

const Fake = { template: '<span></span>' }

const routes = [
  {
    path: '/Taipei',
    component: { template: '<span></span>' }
  },
  {
    path: '/Taipei/:id',
    component: { template: '<span></span>' }
  },
  {
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
