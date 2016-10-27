<template>
  <app-header></app-header>
  <app-content></app-content>
  <app-footer></app-footer>
</template>

<script>
import AppHeader from './components/layouts/Header';
import AppContent from './components/layouts/Content';
import AppFooter from './components/layouts/Footer';

export default {
  name: 'App',
  data() {
    return {
    };
  },
  replace: false,
  components: {
    AppHeader,
    AppContent,
    AppFooter,
  },
};
</script>
<style src="./assets/css/reset_set_me.css"></style>
<style src="./assets/css/style.css"></style>
<style src="./assets/css/responsive.css"></style>
