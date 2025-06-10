
@extends('layouts.main-site')

@push('styles')
    
    
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">	
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- DatePicker CSS -->
    <link href="assets/css/datepicker.min.css" rel="stylesheet">
    <!-- TimePicker CSS -->
    <link href="assets/css/mdtimepicker.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="assets/color/theme-red.css">
@endpush

@push('scripts')
 
    <!-- Latest jQuery --> 
    <script src="assets/js/jquery-1.12.4.min.js"></script> 
    <!-- Latest compiled and minified Bootstrap --> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> 
    <!-- owl-carousel min js  --> 
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
    <!-- magnific-popup min js  --> 
    <script src="assets/js/magnific-popup.min.js"></script> 
    <!-- waypoints min js  --> 
    <script src="assets/js/waypoints.min.js"></script> 
    <!-- parallax js  --> 
    <script src="assets/js/parallax.js"></script> 
    <!-- countdown js  --> 
    <script src="assets/js/jquery.countdown.min.js"></script> 
    <!-- jquery.countTo js  -->
    <script src="assets/js/jquery.countTo.js"></script>
    <!-- imagesloaded js --> 
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js --> 
    <script src="assets/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="assets/js/slick.min.js"></script>
    <!-- DatePicker js -->
    <script src="assets/js/datepicker.min.js"></script>
    <!-- TimePicker js -->
    <script src="assets/js/mdtimepicker.min.js"></script>
    <!-- scripts js --> 
    <script src="assets/js/scripts.js"></script>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endpush


@section('title', 'Checkout')


@section('header')
    <!-- START HEADER -->
        <header class="header_wrap fixed-top header_with_topbar light_skin main_menu_uppercase">
        <div class="container">
            @include('partials.nav')
        </div>
    </header>
    <!-- END HEADER -->
@endsection


@section('content')

 <!-- START SECTION BREADCRUMB -->
<div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="assets/images/checkout_bg.jpg">
    <div class="container"><!-- STRART CONTAINER -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title">
            		<h1>Thanh toán</h1>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ol>
            </div>
        </div>
    </div><!-- END CONTAINER-->
</div>
<!-- END SECTION BREADCRUMB -->

<form method="post" action="{{ route('customer.proccess.checkout') }}">
<!-- CSRF Token for Security -->
@csrf
<!-- START SECTION SHOP -->
<div class="section">
	<div class="container">
        @include('partials.message-bag')

    
        <div class="row">
        	<div class="col-lg-6">
                <div  class="row">

                    <!-- Name -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="text" name="name" value="{{ old('name') }}" placeholder="Tên *">
                    </div>

                    <!-- Email -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="email" name="email" value="{{ old('email') }}" placeholder="Email *">
                    </div>

                    <!-- Phone Number -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="tel" name="phone_number" value="{{ old('phone_number') }}" placeholder="Số điện thoại *">
                    </div>

                    <!-- Address -->
                    <div class="form-group col-md-12">
                        <input class="form-control" required type="text" name="address" value="{{ old('address') }}" placeholder="Địa chỉ *">
                    </div>

                    <!-- Additional Information -->
                    <div class="form-group mb-0 mt-2 col-md-12">
                        <div class="heading_s1">
                            <h4>Thông tin bổ sung</h4>
                        </div>
                        <textarea rows="4" class="form-control" name="additional_info" placeholder="">{{ old('additional_info') }}</textarea>
                    </div> 
                </div>
            
            </div>
            <div class="col-lg-6">
                <div class="order_review">
                <h4>Đơn đặt hàng của bạn</h4>
                <table class="table">
                    <thead>
                        <tr><th>Sản phẩm</th><th>Thành tiền</th></tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $item)
                        <tr>
                            <td>{{ $item['name'] }} x {{ $item['quantity'] }}</td>
                            <td>{{ number_format($item['price'] * $item['quantity'], 0) }}₫</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr><th>Tạm tính</th><td>{{ number_format($subtotal, 0) }}₫</td></tr>
                        <tr><th>Phí vận chuyển ({{ $distance }} km)</th><td>{{ number_format($shippingFee, 0) }}₫</td></tr>
                        <tr><th>Tổng cộng</th><td><strong>{{ number_format($total, 0) }}₫</strong></td></tr>
                    </tfoot>
                </table>

                <h4>Phương thức thanh toán</h4>
                <div>
                    <input type="radio" name="payment_method" value="cod" id="cod" checked>
                    <label for="cod">Thanh toán khi nhận hàng</label>
                </div>
                <div class="mt-2">
                    <input type="radio" name="payment_method" value="bank" id="bank">
                    <label for="bank">Chuyển khoản ngân hàng</label>
                </div>

                <!-- QR Code hiển thị khi chọn chuyển khoản -->
                <div id="bank-transfer-details" class="mt-3" style="display: none;">
                    <h5>Thông tin chuyển khoản</h5>
                    <p><strong>Ngân hàng:</strong> MB Bank</p>
                    <p><strong>Số tài khoản:</strong> 123456789</p>
                    <p><strong>Chủ tài khoản:</strong> CANTEEN</p>
                    <p><strong>Nội dung chuyển khoản:</strong> CANTEEN-{{ now()->timestamp }}</p>
                    <img src="{{ asset('images/qr-bank.png') }}" alt="QR Chuyển khoản" width="200">
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Đặt hàng</button>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.querySelectorAll('input[name="payment_method"]').forEach(function (el) {
                        el.addEventListener('change', function () {
                            document.getElementById('bank-transfer-details').style.display = (this.value === 'bank') ? 'block' : 'none';
                        });
                    });
                });
            </script>

        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</form>

@endsection



 