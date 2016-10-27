<template>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          {{ title }}
        </h1>
      </section>
      <!-- Main content -->
      <section class="content">
        <router-view>
        </router-view>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</template>

<script>
  export default {
    name: 'UserContent',
    data() {
      return {
      };
    },
  };
</script>