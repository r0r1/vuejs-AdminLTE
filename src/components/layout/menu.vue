<template>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/image/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview" v-for="row in menus">
          <a v-link="{ path: row.link }">
            <i class="fa {{ row.icon }}"></i> 
            <span>{{ row.name }}</span> 
            <i v-show="row.child.length" class="fa fa-angle-left pull-right"></i>
          </a>
          
          <ul v-show="row.child.length" class="treeview-menu">
            <li v-for="child in row.child">
              <a v-link="{ path: child.link }">
                <i class="fa {{ child.icon }}"></i> {{ child.name }}
              </a>
            </li>
          </ul> 
         
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
</template>

<script>
  module.exports = {
    name: 'Menu',
    data: function(){
      return {
        menus: this.$parent.$data.menus || []
      }
    }
  }
</script>