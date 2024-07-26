@php
$pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('assets/js/modal-create-app.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-enable-otp.js')}}"></script>
<script src="{{asset('assets/js/modal-share-project.js')}}"></script>
<script src="{{asset('assets/js/modal-two-factor-auth.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">نمونه‌های مودال</h4>

<div class="row mb-4">
  <!--  Pricing -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-bar-chart-alt-2"></i>
        <h5>قیمت گذاری</h5>
        <p>نمونه پاپ‌آپ مودال گزینه‌های قیمت‌گذاری زیبا، با استفاده آسان در هر صفحه.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Pricing -->

  <!--  Add New Credit Card -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-credit-card"></i>
        <h5>افزودن کارت اعتباری جدید</h5>
        <p>جزئیات کارت اعتباری را به صورت سریع جمع‌آوری کنید، با پشتیبانی از ماسک ورودی داخلی و اعتبارسنجی فرم.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Add New Credit Card -->

  <!--  Add New Address -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-buildings"></i>
        <h5>افزودن آدرس جدید</h5>
        <p>فرم آماده استفاده برای جمع‌آوری اطلاعات آدرس کاربر با اعتبارسنجی و پشتیبانی از ورودی سفارشی.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Add New Address -->

  <!--  Refer & Earn -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-gift"></i>
        <h5>ارجاع و کسب درآمد</h5>
        <p>از مودال ارجاع و کسب درآمد برای تشویق کاربران کنونی به ارجاع دوستان و همکاران خود استفاده کنید.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Refer & Earn -->

  <!--  Edit User -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-user"></i>
        <h5>ویرایش کاربر</h5>
        <p>اطلاعات کاربر را به آسانی ویرایش کنید، دارای اعتبارسنجی فرم داخلی و کنترل‌های سفارشی.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Edit User -->

  <!--  Enable OTP -->
  <div class="col-12 col-sm-6 col-lg-4 mb-md-0 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-mobile-alt"></i>
        <h5>فعال کردن OTP</h5>
        <p>از این مودال برای افزایش امنیت برنامه خود با فعال کردن احراز هویت توسط OTP استفاده کنید.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Enable OTP -->

  <!--  Share Project -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-lg-0">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-file"></i>
        <h5>به اشتراک گذاری پروژه</h5>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#shareProject">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Share Project -->

  <!--  Create App -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-lg-0">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-md bx-cube"></i>
        <h5>ایجاد برنامه</h5>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createApp">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Create App -->

  <!--  Two Factor Auth -->
  <div class="col-12 col-sm-6 col-lg-4">
    <div class="card">
      <div class="card-body text-center">
        <i class="mb-3 bx bx-lock bx-md"></i>
        <h5>احراز هویت دو مرحله‌ای</h5>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#twoFactorAuth">
          نمایش
        </button>
      </div>
    </div>
  </div>
  <!--/  Two Factor Auth -->
</div>
<!-- All Modals -->
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-refer-earn')
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-enable-otp')
@include('_partials/_modals/modal-share-project')
@include('_partials/_modals/modal-create-app')
@include('_partials/_modals/modal-two-factor-auth')
@endsection
