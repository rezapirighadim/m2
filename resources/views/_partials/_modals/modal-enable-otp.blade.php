<!-- Enable OTP Modal -->
<div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4 mt-0 mt-md-n2">
          <h3 class="mb-4 secondary-font">فعال کردن رمز عبور یکبار مصرف</h3>
        </div>
        <h6>شماره موبایل خود را برای دریافت پیامک تایید کنید</h6>
        <p>شماره موبایل خود را به همراه کد کشور وارد کنید و ما یک کد تایید برای شما ارسال خواهیم کرد.</p>
        <form id="enableOTPForm" class="row g-3 mt-3" onsubmit="return false">
          <div class="col-12">
            <label class="form-label" for="modalEnableOTPPhone">شماره تلفن</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalEnableOTPPhone" name="modalEnableOTPPhone" class="form-control phone-number-otp-mask text-start" placeholder="202 555 0111" dir="ltr">
              <span class="input-group-text" dir="ltr">+98</span>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
              انصراف
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Enable OTP Modal -->
