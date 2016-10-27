<template>
  <div id="footer-page-pay" class="block-ft-pay">
    <div class="container">
      <div class="col-md-3">
        <h4>Connect</h4>
        <ul class="list-unstyled">
          <li><a href="https://www.facebook.com/basetaxuk" target="_blank">Facebook</a></li>
          <li><a href="https://plus.google.com/118351154355754232374/posts" target="_blank">Google+</a></li>
          <li><a href="https://twitter.com/basetax" target="_blank">Twitter</a></li>
          <li><a href="https://www.gov.uk/log-in-register-hmrc-online-services" target="_blank">HMRC Online Services</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h4>Information</h4>
        <ul class="list-unstyled">
          <li><a href="#">Basetax Limited</a></li>
          <li><a href="#">Exchange at Somerset House</a></li>
          <li><a href="#">South Wing, Strand</a></li>
          <li><a href="#">London</a></li>
          <li><a href="#">WC2R 1LA</a></li>
          <li><a href="#">Company registered no: 09243228</a></li>
        </ul>
      </div>
      <div class="col-md-5">
        <h4>Newsletter</h4>
        <p class="m-b-10">New features &amp; important announcements</p>
        <form id="signup-form" method="post" action="#" class="form-inline input-signup" role="form">
          <div class="input-group">
            <input type="email" class="form-control" name="email-signup" id="email-signup" style="color: #fff" placeholder="EMAIL ADDRESS">
            <span class="input-group-btn">
              <button class="btn btn-get-star" type="submit">SIGN UP</button>
            </span>
          </div>
        </form>
        <p class="text-center text-small-end">WE PROMISE TO NEVER SHARE YOUR INFORMATION!</p>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="colophon" class="site-footer" role="contentinfo">
            <div class="site-info text-center">
              &copy; Copyright 2014-2016 <span class="color-green">Basetax Limited</span> - All Rights Reserved
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</template>

<script>
export default {
  name: 'Footer',
  data() {
    return {
    };
  },
};
</script>

<style></style>