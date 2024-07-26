<!-- Two Factor Auth Modal -->

<div class="modal fade" id="twoFactorAuth" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4 mt-0 mt-md-n2">
          <h3 class="mb-2 secondary-font">انتخاب روش احراز هویت</h3>
          <p class="text-muted">
            شما همچنین باید روشی را انتخاب کنید که توسط آن پروکسی در سرویس دایرکتوری احراز هویت می شود.
          </p>
        </div>
        <div class="row">
          <div class="col-12 mb-3">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content ps-3" for="customRadioTemp1" data-bs-target="#twoFactorAuthOne" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp1">
                <span class="d-flex align-items-start">
                                <i class="bx bx-cog bx-md me-3 mt-1"></i>
                                <span>
                                  <span class="custom-option-header">
                                    <span class="h4 mb-2">برنامه‌های احراز هویت</span>
                                  </span>
                                  <span class="custom-option-body">
                                    <span class="mb-0">کد را از برنامه‌ای مانند Google Authenticator یا Microsoft Authenticator دریافت کنید.</span>
                                  </span>
                                </span>
                              </span>
              </label>
            </div>
          </div>
          <div class="col-12">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content ps-3" for="customRadioTemp2" data-bs-target="#twoFactorAuthTwo" data-bs-toggle="modal">
                <input name="customRadioTemp" class="form-check-input d-none" type="radio" value="" id="customRadioTemp2">
                <span class="d-flex align-items-start">
                                <i class="bx bx-message bx-md me-3 mt-1"></i>
                                <span>
                                  <span class="custom-option-header">
                                    <span class="h4 mb-2">پیامک</span>
                                  </span>
                                  <span class="custom-option-body">
                                    <span class="mb-0">در صورت نیاز به استفاده از روش ورود به سیستم پشتیبان، ما یک کد از طریق پیامک ارسال می کنیم.</span>
                                  </span>
                                </span>
                              </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication App -->
<div class="modal fade" id="twoFactorAuthOne" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-2 mt-0 mt-md-n2">
          <h3 class="mb-0 secondary-font">افزودن برنامه احراز هویت</h3>
        </div>
        <h5 class="mb-2 pt-1 text-break">برنامه‌های احراز هویت</h5>
        <p class="mb-4">
          با استفاده از یک برنامه احراز هویت مانند Google Authenticator، Microsoft Authenticator، Authy یا 1Password، کد QR را اسکن کنید. یک کد 6 رقمی برای شما ایجاد می کند که در زیر وارد کنید.
        </p>
        <div class="text-center">
          <img src="../../assets/img/icons/misc/authentication-QR.png" alt="QR Code" width="140">
        </div>
        <div class="alert alert-warning alert-dismissible my-3" role="alert">
          <h5 class="alert-heading mb-2">ASDLKNASDA9AHS678dGhASD78AB</h5>
          <p class="mb-0">اگر در استفاده از کد QR مشکل دارید، ورود دستی را در برنامه خود انتخاب کنید</p>
        </div>
        <div class="mb-4">
          <input type="email" class="form-control" id="twoFactorAuthInput" placeholder="کد احراز هویت را وارد کنید">
        </div>
        <div class="col-12 text-end">
          <button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth">
            <i class="bx bx-left-arrow-alt bx-xs me-1 scaleX-n1-rtl"></i><span class="align-middle">بازگشت</span>
          </button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-middle">ادامه</span><i class="bx bx-right-arrow-alt bx-xs ms-1 scaleX-n1-rtl"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Authentication via SMS -->
<div class="modal fade" id="twoFactorAuthTwo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-simple">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h5 class="mb-2 pt-1">شماره موبایل خود را برای دریافت پیامک تایید کنید</h5>
        <p class="mb-4">
          شماره تلفن همراه خود را با کد کشور وارد کنید و ما یک کد تایید برای شما ارسال می کنیم.
        </p>
        <div class="mb-4">
          <input type="text" class="form-control text-start" id="twoFactorAuthInputSms" placeholder="747 875 3459" dir="ltr">
        </div>
        <div class="col-12 text-end">
          <button type="button" class="btn btn-label-secondary me-sm-3 me-1" data-bs-toggle="modal" data-bs-target="#twoFactorAuth">
            <i class="bx bx-left-arrow-alt bx-xs me-1 scaleX-n1-rtl"></i><span class="align-middle">بازگشت</span>
          </button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
            <span class="align-middle">ادامه</span><i class="bx bx-right-arrow-alt bx-xs ms-1 scaleX-n1-rtl"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Two Factor Auth Modal -->
<script>
  // Check selected custom option
  window.Helpers.initCustomOptionCheck();

</script>
