import Vue from 'vue';
import App from './App';
import VueRouter from 'vue-router';
import Router from './routes';
import VueResource from 'vue-resource';

Vue.use(VueResource);
// install router
Vue.use(VueRouter);

// routing
export const router = new VueRouter({
  hashbang: false,
  history: true,
  linkActiveClass: 'active',
  mode: 'html5',
});

router.map(Router);

router.beforeEach((transition) => {
  if (transition.to.auth) {
    transition.redirect('/login');
  } else {
    transition.next();
  }
});

router.start(App, 'body');
