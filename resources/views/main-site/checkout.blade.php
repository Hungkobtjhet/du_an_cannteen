
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Thanh toán</h1>
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                    <li class="breadcrumb-item active">Thanh toán</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">

        <div class="row">
            <!-- Danh sách sản phẩm -->
            <div class="col-lg-6">
                <h4>Chọn sản phẩm</h4>
                <div class="product_list">
                    @foreach($products as $product)
                    <div class="card mb-3 p-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6>{{ $product->name }}</h6>
                                <p class="mb-0">{{ number_format($product->price,0,',','.') }}₫</p>
                            </div>
                            <div>
                                <input type="number" min="1" value="1" class="form-control d-inline-block quantity-input" style="width: 80px;">
                                <button class="btn btn-success btn-add-to-cart" 
                                        data-id="{{ $product->id }}" 
                                        data-name="{{ $product->name }}" 
                                        data-price="{{ $product->price }}">
                                    + Thêm
                                </button>
                                <button class="btn btn-warning btn-buy-now" 
                                        data-id="{{ $product->id }}"
                                        data-name="{{ $product->name }}"
                                        data-price="{{ $product->price }}">
                                    Mua ngay
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Form Thanh Toán -->
            <div class="col-lg-6">
                <form id="checkout-form" method="POST" action="{{ route('customer.proccess.checkout') }}">
                    @csrf
                    <h4>Thông tin nhận hàng</h4>
                    <input class="form-control mb-2" type="text" name="name" placeholder="Tên *" required>
                    <input class="form-control mb-2" type="email" name="email" placeholder="Email *" required>
                    <input class="form-control mb-2" type="tel" name="phone_number" placeholder="Số điện thoại *" required>
                    <input class="form-control mb-2" type="text" name="address" placeholder="Địa chỉ *" required>
                    <textarea class="form-control mb-2" name="additional_info" placeholder="Ghi chú đơn hàng (nếu có)"></textarea>

                    <h4>Phương thức thanh toán</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_option" id="payment_cod" value="cod" checked>
                        <label class="form-check-label" for="payment_cod">Thanh toán khi nhận hàng hoặc tại nhà hàng</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_option" id="payment_bank" value="bank">
                        <label class="form-check-label" for="payment_bank">Chuyển khoản ngân hàng</label>
                    </div>

                    <!-- QR chuyển khoản -->
                    <div id="qr-payment" class="mt-3" style="display:none;">
                        <h6>Quét mã QR để chuyển khoản</h6>
                        <img src="{{ asset('storage/qr-code.png') }}" alt="Mã QR chuyển khoản" style="max-width: 200px;">
                        <p class="mb-1"><strong>Ngân hàng:</strong> ABC Bank</p>
                        <p class="mb-1"><strong>Chủ tài khoản:</strong> Nguyễn Văn A</p>
                        <p class="mb-1"><strong>Nội dung:</strong> Thanh toán đơn hàng <span id="order-code">###</span></p>
                        <p><strong>Số tiền:</strong> <span id="total-amount">0</span>₫</p>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Xác nhận đặt hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.fly-to-cart {
    position: absolute;
    width: 50px;
    z-index: 999;
    transition: all 1s ease-in-out;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const qr = document.getElementById('qr-payment');
    const codRadio = document.getElementById('payment_cod');
    const bankRadio = document.getElementById('payment_bank');
    const totalAmount = document.getElementById('total-amount');

    codRadio.addEventListener('change', () => qr.style.display = 'none');
    bankRadio.addEventListener('change', () => qr.style.display = 'block');

    // Thêm vào giỏ hàng với hiệu ứng bay
    document.querySelectorAll('.btn-add-to-cart').forEach(btn => {
        btn.addEventListener('click', function () {
            const img = document.createElement('img');
            img.src = '/assets/images/icon_cart.png'; // icon giỏ hàng
            img.className = 'fly-to-cart';
            img.style.top = (this.getBoundingClientRect().top + window.scrollY) + 'px';
            img.style.left = (this.getBoundingClientRect().left + window.scrollX) + 'px';
            document.body.appendChild(img);
            img.style.top = '20px';
            img.style.left = '90%';
            setTimeout(() => img.remove(), 1000);

            // TODO: AJAX thêm vào giỏ hàng backend ở đây
            alert('Đã thêm vào giỏ hàng (code AJAX xử lý sau)');
        });
    });

    // Mua ngay
    document.querySelectorAll('.btn-buy-now').forEach(btn => {
        btn.addEventListener('click', function () {
            const price = parseInt(this.dataset.price);
            document.getElementById('order-code').innerText = 'MUA-' + Math.floor(Math.random() * 10000);
            totalAmount.innerText = price.toLocaleString();
            bankRadio.checked = true;
            qr.style.display = 'block';
            window.scrollTo({top: document.getElementById('checkout-form').offsetTop - 50, behavior: 'smooth'});
        });
    });
});
</script>


<!-- END SECTION SHOP -->
</form>

@endsection



 