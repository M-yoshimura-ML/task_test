import Router from 'vue-router'
import ContactUs from './components/contact/ContactUs.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/contact-us',
      name: 'ContactUs',
      component: ContactUs
    },
  ]
});