<template>
  <div class="main-regiter-br">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contain-signup-p">
            <h2>Log in</h2>
            <h3 id="file_tax_return">File tax return service</h3>
            <div v-if="errors.length > 0">
                <div class="alert alert-danger" v-for="msg in errors">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <p>{{ msg }}</p>
                </div>
            </div>
            <form class="regist-signup border-r-10" novalidate="novalidate">
              <div class="form-group">
                <input id="email" type="email" class="email-sg" placeholder="Email address" v-model="email">
                <span style="color: #ff0000;" id="error-email-login"></span>
              </div>
              <div class="form-group">
                <input id="password" type="password" class="password-sg" placeholder="Password/Passcode" v-model="password">
                <span style="color: #ff0000;" id="error-login"></span>
              </div>
              <button class="btn-block btn-login" id="btn-login" @click="submit()" 
                style="position: relative;" type="button">
                Log in
              </button>
              <li></li>
              <li></li>
              <li class="m-forgot">
                <a data-toggle="modal" data-target=".forgot-password" class="forgot-pass p-forgot">
                  Forgotten your password?
                </a>
              </li>
              <li>
                <a class="forgot-pass p-forgot" v-link="{path: '/register'}">
                  Register as new user
                </a>
              </li>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import auth from './../../services/AuthService';

  export default {
    name: 'Login',
    data() {
      return {
        email: null,
        password: null,
        errors: [],
      };
    },
    methods: {
      submit() {
        this.errors = [];
        const credentials = {
          email: this.email,
          password: this.password,
        };
        auth.login(this, credentials);
      },
    },
  };
</script>