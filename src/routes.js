// import ArticleDetail from './components/ArticleDetail.vue'

const Fake = { template: '<span></span>' }

const routes = [
  {
    path: '/Taipei'
  },
  {
    path: '/Taipei/:id'
  },
  {
    path: '*',
    redirect: '/Taipei'
  }
]

export default routes
