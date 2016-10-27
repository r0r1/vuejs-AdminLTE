<template>
  <nav id="nav-top">
    <div class="container-h nav-top-content cleared">
      <div class="nav-mb cleared">
        <div class="rmm-button"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></div>
      </div>
      <div class="main-header-nav cleared">
        <ul class="nb-ab cleared list-unstyled">
          <li><a v-link="{ path: '/' }">Home</a></li>
          <li><a v-link="{ path: '/about' }">About</a></li>
          <li><a v-link="{ path: '/pricing' }">Pricing</a></li>
          <li><a v-link="{ path: '/login' }" v-if="!user.authenticated">Login</a></li>
          <li><a v-link="{ path: '/register' }" v-if="!user.authenticated">Register</a></li>
          <li><a v-link="{ path: '/logout' }" @click="logout()" v-if="user.authenticated">Logout</a></li>

        </ul>
      </div>
    </div>
  </nav>

  <div id="bar-header">
    <div class="container-h nav-top-content">
      <ul class="list-heading-lg cleared list-unstyled">
        <li>
          <a href="#">
            <img class="img-responsive" src="~assets/images/basetax-logo.png">
          </a>
        </li>
        <li>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Free bookkeeping software to raise invoices, track your income and expenses">
            <h3>Bookkeeping Software</h3>

            <p>Track Income &amp; Expenses</p>
          </a>
        </li>
        <li>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Prepare your self assessment and submit to HMRC online">
            <h3>Tax Return</h3>

            <p>File Self Assessment</p>
          </a>
        </li>
        <li>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="Get accountancy and tax expertise and advice from qualified accountants">
            <h3>Accountant</h3>

            <p>Get Specialist Advice</p>
          </a>
        </li>
        <li>
          <a href="#" data-toggle="tooltip" data-placement="bottom" title="PAYE service takes care of all of the payroll needs of a small UK business">
            <h3>Payroll</h3>

            <p>Payroll &amp; Employees</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import auth from './../../services/AuthService';

export default {
  name: 'Header',
  data() {
    return {
      user: auth.user,
    };
  },
  methods: {
    logout() {
      auth.logout();
    },
  },
};
</script>

<style>

</style>