<template>
  <user-header></user-header>
  <user-sidebar></user-sidebar>
  <user-content :title="title"></user-content>
  <user-footer></user-footer>
</template>

<script>
import UserHeader from './components/user/layouts/Header';
import UserSidebar from './components/user/layouts/Sidebar';
import UserContent from './components/user/layouts/Content';
import UserFooter from './components/user/layouts/Footer';
import Menus from './../config/user-menus';

export default {
  name: 'AppUser',
  data() {
    return {
      login: true,
      title: null,
      menus: Menus,
    };
  },
  replace: false,
  components: {
    UserHeader,
    UserSidebar,
    UserContent,
    UserFooter,
  },
};
</script>

<!-- <style src="../static/plugins/jvectormap/jquery-jvectormap-1.2.2.css"></style> -->
<style src="../static/plugins/ionslider/ion.rangeSlider.css" scoped></style>
<style src="../static/plugins/ionslider/ion.rangeSlider.skinNice.css" scoped></style>
<style src="../static/plugins/bootstrap-slider/slider.css" scoped></style>
<style src="../static/adminLte/css/AdminLTE.min.css" scoped></style>
<style src="../static/adminLte/css/skins/_all-skins.min.css" scoped></style>
<style src="../static/patches.css"></style>
