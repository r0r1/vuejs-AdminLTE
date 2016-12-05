<template>
  <app-header></app-header>
  <app-sidebar></app-sidebar>
  <app-content :title="title"></app-content>
  <app-footer></app-footer>
</template>

<script>
import AppHeader from './pages/layouts/Header';
import AppSidebar from './pages/layouts/Sidebar';
import AppContent from './pages/layouts/Content';
import AppFooter from './pages/layouts/Footer';
import Menus from './../config/menus';

export default {
  name: 'App',
  data() {
    return {
      login: true,
      title: null,
      menus: Menus,
    };
  },
  replace: false,
  components: {
    AppHeader,
    AppSidebar,
    AppContent,
    AppFooter,
  },
};
</script>

<style src="../static/adminLte/css/skins/_all-skins.min.css"></style>
<style src="../static/adminLte/css/AdminLTE.min.css"></style>
