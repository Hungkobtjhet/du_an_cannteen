
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
                    <div class="heading_s1">
                        <h4>Đơn đặt hàng của bạn</h4>
                    </div>
                    <div class="table-responsive order_table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tổng thanh toán</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart as $item)
                                <tr>
                                    <td>{{ $item['name'] }} <span class="product-qty">x {{ $item['quantity'] }}</span></td>
                                    <td>{!! $site_settings->currency_symbol !!}{{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Tổng tiền</th>
                                    <td class="product-subtotal">{!! $site_settings->currency_symbol !!}{{ number_format($subtotal, 2) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="heading_s1">
                            <h4>Phương thức thanh toán</h4>
                        </div>
                        <div class="payment_option">

                            <!-- Thanh toán khi nhận hàng -->
                            <div class="custome-radio">
                                <input class="form-check-input" type="radio" name="payment_option" id="cod" value="cod" checked>
                                <label class="form-check-label" for="cod">Thanh toán khi nhận hàng</label>
                            </div>

                            <!-- Chuyển khoản ngân hàng -->
                            <div class="custome-radio mt-2">
                                <input class="form-check-input" type="radio" name="payment_option" id="bank" value="bank">
                                <label class="form-check-label" for="bank">Chuyển khoản ngân hàng</label>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start">
                            <button onclick="window.location.href='{{ route('customer.cart') }}'" type="button" class="btn btn-secondary btn-block">Quay lại giỏ hàng</button>
                        </div>
                        <div class="col-6 text-end">
                            <button type="submit" class="btn btn-default btn-block">Đặt hàng</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION SHOP -->
</form>

@endsection



 