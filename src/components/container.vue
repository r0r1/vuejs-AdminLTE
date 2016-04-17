<template>
  <div v-if="!login">
    <app-header></app-header>
    <app-menu></app-menu>
    <app-content :title="title"></app-content>
    <app-footer></app-footer>
  </div>

  <div v-if="login">
    <app-login></app-login>
  </div>

</template>

<script>
  module.exports = {
    name : 'Container',
    data: function(){
      return {
        login: true,
        title: null,
        body_class: "hold-transition login-page", 
        menus: require('./../../config/menus.js') || []
      }
    },
    replace: false,
    components: {
      'app-header' : require('./layout/header.vue'),
      'app-menu': require('./layout/menu.vue'),
      'app-content': require('./layout/content.vue'),
      'app-footer': require('./layout/footer.vue'),
      'app-login': require('./login.vue')
    }
  }
  
</script>