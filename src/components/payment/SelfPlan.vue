<template>
  <div class="main-regiter-br">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contain-signup-p">
            <h2>Self Plan Subscription</h2>
            <div class="regist-signup border-r-10">

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">Name</label>
                  <input type="text" id="name-extra" name="name" class="form-control">
                </div>
                <div id="error-name-extra" class="help-block red"></div>
              </div>

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">Email</label>
                  <input type="email" id="email-extra" name="email" class="form-control">
                </div>
                <div id="error-email-extra" class="help-block red"></div>
              </div>

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">Telephone</label>
                  <input type="text" id="tel-extra" class="form-control">
                </div>
                <div id="error-tel-extra" class="help-block red"></div>
              </div>

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">Amount (inc. VAT)</label>
                  <span class="input-group-addon">£</span>
                  <input type="text" id="amount-extra" class="form-control" readonly="readonly" value="19.90">
                </div>
              </div>

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">Card Number</label>
                  <input type="text" id="card-extra" name="number" class="form-control"
                  placeholder="Card Number">
                </div>
                <div id="error-card-number-extra" class="help-block red"></div>
              </div>

              <div class="form-group">
                <div class="input-group date-picker col-md-12">
                  <label class="input-group-addon control-label">Expiry month</label>
                  <input type="text" id="expiry-extra" name="date" placeholder="mm/yyyy"
                  class="form-control">
                </div>
                <div id="error-expiry-extra" class="help-block red"></div>
              </div>

              <div class="form-group">
                <div class="input-group col-md-12">
                  <label class="input-group-addon control-label">
                    <div class="center-tooltip" id="tooltip456">
                      <a id="tooltip123" rel="tooltip" data-toggle="tooltip" style="color: #555;"
                      title="Final three digits of the number printed on the back of your card (four digits on the front for AMEX cards).">
                      CVC *
                    </a>
                  </div>
                </label>
                <input type="text" id="cvc-extra" name="cvc" class="form-control" placeholder="CVC number">
              </div>
              <div id="error-cvc-extra" class="help-block red"></div>
            </div>

            <div class="form-group">
              <div class="text-center">
                <button id="btn-payment-extra" type="submit" class="btn btn-main-default btn-green submit-button" onclick="paymentExtra()">
                  Pay Now
                </button>
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
    name: 'SelfPlan',
    data() {
      return {
      };
    },
  };
</script>