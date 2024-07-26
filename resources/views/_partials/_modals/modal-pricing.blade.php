@push('pricing-script')
<script src="{{asset('assets/js/pages-pricing.js')}}"></script>
@endpush
<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content bg-body p-2 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
        <div class="pricing-plans">
          <h3 class="text-center mb-3 mt-0 mt-md-n2 secondary-font">پلن مناسب را برای سایت خود پیدا کنید</h3>
          <p class="text-center">
            با ما شروع کنید - گزینه‌ای عالی برای افراد و تیم‌ها. یک پلن اشتراک متناسب با نیازهای خود انتخاب کنید.
          </p>
          <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 py-5">
            <label class="switch switch-primary ms-sm-5 ps-sm-5 me-0">
              <span class="switch-label ps-0 ps-sm-2">ماهانه</span>
              <input type="checkbox" class="switch-input price-duration-toggler" checked>
              <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
                            </span>
              <span class="switch-label">سالانه</span>
            </label>
            <div class="mt-n5 ms-n5 ml-2 mb-2 d-none d-sm-block">
              <i class="bx bx-subdirectory-left bx-sm rotate-90 text-muted"></i>
              <span class="badge badge-sm bg-label-primary rounded-pill">دریافت 2 ماه رایگان</span>
            </div>
          </div>
          <div class="row mx-0 gy-3">
            <!-- Starter -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-start text-uppercase">برای شروع</h5>

                  <div class="text-center position-relative mt-n1 mb-4 pb-3">
                    <div class="d-flex align-items-center">
                      <h1 class="price-toggle text-primary price-yearly mb-0"><small>تومان</small> 49</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none"><small>تومان</small> 99</h1>
                      <sub class="h5 text-muted pricing-duration mb-1 mb-md-0 ms-1"> / ماهانه</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">588 تومان / سال</small>
                  </div>

                  <p>تمامی موارد پایه برای کسب و کار های در حال شروع</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1 lh-1-85">
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      تا 10 کاربر
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      150+ اجزاء
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      پشتیبانی پایه در گیت‌هاب
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                      <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                      به‌روزرسانی‌های ماهانه
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                      <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                      یکپارچه سازی
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                      <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                      پشتیبانی کامل
                    </li>
                  </ul>

                  <a href="auth-register-basic.html" class="btn btn-primary d-grid w-100">شروع کنید</a>
                </div>
              </div>
            </div>

            <!-- Exclusive -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card border border-2 border-primary">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
                    <h5 class="text-start text-uppercase mb-0">حرفه‌ای / 15% تخفیف</h5>
                    <span class="badge bg-primary rounded-pill">محبوب</span>
                  </div>

                  <div class="text-center position-relative mt-n1 mb-4 pb-3">
                    <div class="d-flex align-items-center">
                      <h1 class="price-toggle text-primary price-yearly mb-0"><small>تومان</small> 99</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none"><small>تومان</small> 199</h1>
                      <sub class="h5 text-muted pricing-duration mb-1 mb-md-0 ms-1"> / ماهانه</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">1,188 تومان / سال</small>
                  </div>
                  <p>گزینه‌ای مناسب برای کسب و کارهای در حال رشد</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1 lh-1-85">
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      تا 10 کاربر
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      150+ اجزاء
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      پشتیبانی پایه در گیت‌هاب
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      به‌روزرسانی‌های ماهانه
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                      <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                      یکپارچه سازی
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-secondary me-2">
                                      <i class="bx bx-x fs-5 lh-1"></i>
                                    </span>
                      پشتیبانی کامل
                    </li>
                  </ul>

                  <a href="auth-register-basic.html" class="btn btn-primary d-grid w-100">شروع کنید</a>
                </div>
              </div>
            </div>

            <!-- Enterprise -->
            <div class="col-xl mb-lg-0 lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="text-start text-uppercase">سازمان</h5>

                  <div class="text-center position-relative mt-n1 mb-4 pb-3">
                    <div class="d-flex align-items-center">
                      <h1 class="price-toggle text-primary price-yearly mb-0"><small>تومان</small> 149</h1>
                      <h1 class="price-toggle text-primary price-monthly mb-0 d-none"><small>تومان</small> 499</h1>
                      <sub class="h5 text-muted pricing-duration mb-1 mb-md-0 ms-1"> / ماهانه</sub>
                    </div>
                    <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">1,788 تومان / سال</small>
                  </div>
                  <p>ویژگی های پیشرفته برای سازمان ها و ادارات</p>

                  <hr>

                  <ul class="list-unstyled pt-2 pb-1 lh-1-85">
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      تا 10 کاربر
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      150+ اجزاء
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      پشتیبانی پایه در گیت‌هاب
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      به‌روزرسانی‌های ماهانه
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      یکپارچه سازی
                    </li>
                    <li class="mb-2">
                                    <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-primary me-2">
                                      <i class="bx bx-check bx-xs"></i>
                                    </span>
                      پشتیبانی کامل
                    </li>
                  </ul>

                  <a href="auth-register-basic.html" class="btn btn-primary d-grid w-100">شروع کنید</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
<!--/ Pricing Modal -->
