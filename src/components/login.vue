<template>
  <div class="login-box">
    <div class="login-logo">
      <a v-link="{ path: '/' }"><b>Admin</b> LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form v-on:submit.prevent="login()">
        
        <div v-if="!success && messages != ''">
          <div class="alert alert-danger"> 
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ messages }}
          </div>
        </div>

        <div v-if="success && messages != ''">
          <div class="alert alert-success"> 
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            {{ messages }}
          </div>
        </div>

        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" v-model="email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" v-model="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
    </template>

    <script>
      module.exports = {
        name: 'Login',
        data: function(){
          return{
            messages: '',
            success: false,
            body_class: 'hold-transition login-page'
          }
        },
        methods: {
          login: function(){
            this.$parent.$data.login = false;
            this.$parent.$data.body_class = "sidebar-mini skin-blue-light";
          }
        }
      }
    </script>