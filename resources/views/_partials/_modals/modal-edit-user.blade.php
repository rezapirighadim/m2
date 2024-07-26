<!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-simple modal-edit-user">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4 mt-0 mt-md-n2">
          <h3 class="secondary-font">ویرایش اطلاعات کاربر</h3>
          <p>به‌روزرسانی اطلاعات کاربر یک بررسی حریم خصوصی دریافت می کند.</p>
        </div>
        <form id="editUserForm" class="row g-3" onsubmit="return false">
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserFirstName">نام</label>
            <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="جان">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLastName">نام خانوادگی</label>
            <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="اسنو">
          </div>
          <div class="col-12">
            <label class="form-label" for="modalEditUserName">نام کاربری</label>
            <input type="text" id="modalEditUserName" name="modalEditUserName" class="form-control text-start" placeholder="john.doe.007" dir="ltr">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserEmail">ایمیل</label>
            <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control text-start" placeholder="example@domain.com" dir="ltr">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserStatus">وضعیت</label>
            <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
              <option selected>وضعیت</option>
              <option value="1">فعال</option>
              <option value="2">غیرفعال</option>
              <option value="3">معلق</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditTaxID">شناسه مالیاتی</label>
            <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserPhone">شماره تلفن</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask text-start" placeholder="202 555 0111" dir="ltr">
              <span class="input-group-text" dir="ltr">+98</span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserLanguage">زبان</label>
            <select id="modalEditUserLanguage" name="modalEditUserLanguage" class="select2 form-select" multiple>
              <option value="">انتخاب</option>
              <option value="english" selected>انگلیسی</option>
              <option value="spanish">اسپانیایی</option>
              <option value="french">فرانسوی</option>
              <option value="german">آلمانی</option>
              <option value="dutch">هلندی</option>
              <option value="hebrew">عبری</option>
              <option value="sanskrit">سانسکریت</option>
              <option value="hindi">هندی</option>
            </select>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalEditUserCountry">کشور</label>
            <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">
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
            <label class="switch">
              <input type="checkbox" class="switch-input">
              <span class="switch-toggle-slider">
                              <span class="switch-on"></span>
                              <span class="switch-off"></span>
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
<!--/ Edit User Modal -->
