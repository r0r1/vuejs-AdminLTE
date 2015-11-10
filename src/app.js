var Vue = require('vue');
var Router = require('vue-router');
var App = require('./components/container.vue');

// install router
Vue.use(Router);

// routing
var router = new Router();

router.map({
  '*' : {
    component: require('./components/not-found.vue')
  },
  '/': {
    component: require('./components/dashboard.vue')
  }
});

router.start(App, '#app');