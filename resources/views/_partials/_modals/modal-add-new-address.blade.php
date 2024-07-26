<!-- Add New Address Modal -->
<div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4 mt-0 mt-md-n2">
          <h3 class="address-title secondary-font">افزودن آدرس جدید</h3>
          <p class="address-subtitle">آدرس جدید را برای تحویل سریع اضافه کنید</p>
        </div>
        <form id="addNewAddressForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-2 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioHome">
                                  <span class="custom-option-body">
                                    <i class="bx bx-home"></i>
                                    <span class="custom-option-title my-2">خانه</span>
                                    <span> زمان تحویل (9 صبح - 9 شب) </span>
                                  </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioHome" checked>
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-2 mb-3">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOffice">
                                  <span class="custom-option-body">
                                    <i class="bx bx-briefcase"></i>
                                    <span class="custom-option-title my-2"> دفتر </span>
                                    <span> زمان تحویل (9 صبح - 5 عصر) </span>
                                  </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioOffice">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressFirstName">نام</label>
            <input type="text" id="modalAddressFirstName" name="modalAddressFirstName" class="form-control" placeholder="جان">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLastName">نام خانوادگی</label>
            <input type="text" id="modalAddressLastName" name="modalAddressLastName" class="form-control" placeholder="اسنو">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressCountry">کشور</label>
            <select id="modalAddressCountry" name="modalAddressCountry" class="select2 form-select" data-allow-clear="true">
              <option value="">انتخاب</option>
              <option value="Australia">استرالیا</option>
              <option value="Bangladesh">بنگلادش</option>
              <option value="Belarus">بلاروس</option>
              <option value="Brazil">برزیل</option>
              <option value="Canada">کانادا</option>
              <option value="China">چین</option>
              <option value="France">فرانسه</option>
              <option value="Germany">آلمان</option>
              <option value="India">هندوستان</option>
              <option value="Indonesia">اندونزی</option>
              <option value="Israel">اسرائیل</option>
              <option value="Italy">ایتالیا</option>
              <option value="Japan">ژاپن</option>
              <option value="Korea">کره جنوبی</option>
              <option value="Mexico">مکزیک</option>
              <option value="Philippines">فیلیپین</option>
              <option value="Russia">روسیه</option>
              <option value="South Africa">آفریقای جنوبی</option>
              <option value="Thailand">تایلند</option>
              <option value="Turkey">ترکیه</option>
              <option value="Ukraine">اوکراین</option>
              <option value="United Arab Emirates">امارات</option>
              <option value="United Kingdom">انگلستان</option>
              <option value="United States">ایالات متحده</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress1">خط آدرس 1</label>
            <input type="text" id="modalAddressAddress1" name="modalAddressAddress1" class="form-control" placeholder="خیابان آزادی">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalAddressAddress2">خط آدرس 2</label>
            <input type="text" id="modalAddressAddress2" name="modalAddressAddress2" class="form-control" placeholder="کوی گلزار">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">نشان اختصاصی</label>
            <input type="text" id="modalAddressLandmark" name="modalAddressLandmark" class="form-control" placeholder="ساختمان بنفشه">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressCity">شهر</label>
            <input type="text" id="modalAddressCity" name="modalAddressCity" class="form-control" placeholder="تبریز">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressLandmark">استان</label>
            <input type="text" id="modalAddressState" name="modalAddressState" class="form-control" placeholder="آذربایجان شرقی">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddressZipCode">کد پستی</label>
            <input type="text" id="modalAddressZipCode" name="modalAddressZipCode" class="form-control text-start" placeholder="99950" dir="ltr">
          </div>
          <div class="col-12">
            <label class="switch">
              <input type="checkbox" class="switch-input" checked>
              <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="bx bx-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="bx bx-x"></i>
                              </span>
                            </span>
              <span class="switch-label">استفاده به عنوان آدرس صورتحساب؟</span>
            </label>
          </div>
          <div class="col-12 text-center mt-4">
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
<!--/ Add New Address Modal -->
