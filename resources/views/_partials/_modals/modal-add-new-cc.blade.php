<!-- Add New Credit Card Modal -->
<div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
    <div class="modal-content p-3 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-4 mt-0 mt-md-n2">
          <h3 class="secondary-font">افزودن کارت جدید</h3>
          <p>کارت جدید را برای تکمیل پرداخت اضافه کنید</p>
        </div>
        <form id="addNewCCForm" class="row g-3" onsubmit="return false">
          <div class="col-12">
            <label class="form-label w-100" for="modalAddCard">شماره کارت</label>
            <div class="input-group input-group-merge">
              <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask text-start" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" dir="ltr">
              <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <label class="form-label" for="modalAddCardName">نام</label>
            <input type="text" id="modalAddCardName" class="form-control" placeholder="جان اسنو">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardExpiryDate">تاریخ انقضا</label>
            <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask text-start" placeholder="YY/MM" dir="ltr">
          </div>
          <div class="col-6 col-md-3">
            <label class="form-label" for="modalAddCardCvv">کد CVV</label>
            <div class="input-group input-group-merge">
              <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask text-start" maxlength="4" placeholder="654" dir="ltr">
              <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="شماره CVV کارت"></i></span>
            </div>
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
              <span class="switch-label">ذخیره کارت برای پرداخت های بعدی؟</span>
            </label>
          </div>
          <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
            <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
              انصراف
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
