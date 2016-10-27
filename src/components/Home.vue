<template>
  <div class="main-regiter-br">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contain-signup-p">
            <h1>SEE HOW EASY BASETAX REALLY IS</h1>
            <ul class="list-unstyled">
              <li>
              <img src="~assets/images/tick.png"
                alt="check"/>Track your income and expenses in seconds
              </li>
              <li>
                <img src="~assets/images/tick.png"
                alt="check"/>File tax return online in minutes
              </li>
              <li>
                <img src="~assets/images/tick.png"
                alt="check"/>Save hours of your time
              </li>
              <li>
                <img src="~assets/images/tick.png"
                alt="check"/>Keep the taxman happy
              </li>
            </ul>

            <div class="regist-signup border-r-10 text-center">

              <div class="row">
                <p class="text-success">
                  You are just getting started with your tax return for 2015-16 . Keep going!
                </p>

                <span class="line-sg"></span>

                <div class="col-md-5 text-success">
                  <div class="monney-hd-tb">
                    <span class="monney-medium">
                      <span class="pound-medium">£</span>19.90
                    </span>
                  </div>
                  <br>
                  <a v-link="{ path:'/payment/self-plan' }" class="btn btn-block btn-success">
                    Self Plan
                  </a>
                  <br>
                  <ul class="text-left landing-point">
                    <li>Do-it-yourself filling</li>
                    <li>User friendly tax forms</li>
                    <li>Online filing directly to HMRC</li>
                    <li>Receive confirmation from HMRC immediately</li>
                  </ul>
                </div>
                <div class="col-md-2 text-success" style="padding-top:15px;">
                  <h2>or</h2>
                </div>
                <div class="col-md-5 text-success">
                  <div class="monney-hd-tb">
                    <span class="monney-medium">
                      <span class="pound-medium">£</span>99.90
                    </span>
                  </div>
                  <br>
                  <a v-link="{ path:'/payment/assisted-filling-plan' }" 
                    class="btn btn-block btn-success">
                    Assisted Filling Plan
                  </a>
                  <br>
                  <ul class="text-left landing-point">
                    <li>Tax return prepared by qualified accountants</li>
                    <li>We fill in the tax return for you</li>
                    <li>Claim all allowable deductions</li>
                    <li>Livechat/telephone support</li>
                  </ul>
                </div>
              </div>
              <span class="line-sg"></span>
              <div class="form-control-sg">Register as new user?&nbsp;&nbsp;&nbsp;
                <a v-link="{ path: '/register' }">Sign Up</a>
              </div>

              <div class="form-control-sg">Already a Basetax user?&nbsp;&nbsp;&nbsp;
                <a v-link="{ path: '/login' }">Login</a>
              </div>

              <div class="form-control-sg">Free Record Keeping App (Apple IOS) &nbsp;&nbsp;
                <a href="https://itunes.apple.com/gb/app/basetax-record-keeping/id933060585?mt=8"
                target="blank">Download</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: 'home',
    data() {
      return {
      };
    },
  };
</script>