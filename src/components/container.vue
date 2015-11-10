<template>
  <app-header></app-header>
  <app-menu></app-menu>
  <app-content title="Dashboard"></app-content>
  <app-footer></app-footer>
</template>

<script>
  
  module.exports = {
    name : 'Container',
    replace: false,
    components: {
      'app-header' : require('./layout/header.vue'),
      'app-menu': require('./layout/menu.vue'),
      'app-content': require('./layout/content.vue'),
      'app-footer': require('./layout/footer.vue')
    }
  }
</script>