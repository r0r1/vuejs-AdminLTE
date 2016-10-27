<template>
  <header></header>
  <sidebar></sidebar>
  <content :title="title"></content>
  <footer></footer>
</template>

<script>
import Header from './components/layouts/Header';
import Sidebar from './components/layouts/Sidebar';
import Content from './components/layouts/Content';
import Footer from './components/layouts/Footer';
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
    Header,
    Sidebar,
    Content,
    Footer,
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
