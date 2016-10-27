<template>
  <div class="main-regiter-br">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contain-signup-p">
            <h2>JOIN THOUSANDS OF OTHER HAPPY USERS!</h2>
            <div class="regist-signup border-r-10">
              <div class="form-group">
                <input id="name" type="text" class="fullname-sg"
                  placeholder="First name, Last name">
              </div>

              <div class="form-group">
                <input id="email" type="email" class="email-sg" placeholder="Email address">
                <span id="error-email"></span>
              </div>

              <div class="form-group">
                <input id="pass" type="password" class="password-sg" placeholder="Password requirement: min 6 characters">
              </div>

              <div class="form-group">
                <input id="confPassword" type="password" class="cpassword-sg"
                placeholder="Confirm password">
                <span id="error-pass"></span>
              </div>

              <div class="form-group" style="color: #58595b">
                <select id="user-type" type="text" class="email-sg" placeholder="user-type"
                style="width: 100%;height: 34px;padding: 6px 25px 6px 12px;font-size: 14px;"
                data-placeholder="Select user type">
                <option disabled selected value="0" class="text-muted">Select user type</option>
                <option id="sole-trader" value="1">Sole trader</option>
                <option id="partnership" value="2">Partnership</option>
                <option id="limited-liability-partnership" value="3">Limited Liability
                  Partnership
                </option>
                <option id="limited-company" value="4">Limited Company</option>
                <option id="individual" value="5">Individual - file personal tax return</option>
              </select>

              <span id="error-user-type"></span>
            </div>

            <div class="form-control-sg">
              Basetax is recognised by HMRC as a software provider for 
              <a href="http://www.hmrc.gov.uk/softwaredevelopers/mobile-apps/record-keeping.htm"
              target="_blank">
                record keeping
              </a> 
              and 
              <a href="https://www.gov.uk/government/publications/self-assessment-commercial-software-suppliers/self-assessment-online-commercial-software-suppliers"
              target="_blank">
                self assessment.
              </a>
            </div>

            <button class="btn-block btn-login" onclick="register()">Sign Up</button>

            <span class="line-sg"></span>

            <div class="form-control-sg">Already a Basetax user?&nbsp;&nbsp;&nbsp;
              <a v-link="{ path: '/login' }">Login</a>
            </div>

            <div class="form-control-sg">
              Free Record Keeping App (Apple IOS) &nbsp;&nbsp;
              <a href="https://itunes.apple.com/gb/app/basetax-record-keeping/id933060585?mt=8"
                target="blank">
                Download
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
  export default {
    name: 'Register',
  };
</script>