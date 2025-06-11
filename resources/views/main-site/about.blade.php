
@extends('layouts.main-site')

@push('styles')
    
    <!-- Animation CSS -->
    <link rel="stylesheet" href="/assets/css/animate.css">	
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet"> 
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/assets/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/linearicons.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.css">
    <link rel="stylesheet" href="/assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slick-theme.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- DatePicker CSS -->
    <link href="/assets/css/datepicker.min.css" rel="stylesheet">
    <!-- TimePicker CSS -->
    <link href="/assets/css/mdtimepicker.min.css" rel="stylesheet">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="/assets/color/theme-red.css">
@endpush

@push('scripts')
    <!-- Latest jQuery --> 
    <script src="/assets/js/jquery-1.12.4.min.js"></script> 
    <!-- Latest compiled and minified Bootstrap --> 
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script> 
    <!-- owl-carousel min js  --> 
    <script src="/assets/owlcarousel/js/owl.carousel.min.js"></script> 
    <!-- magnific-popup min js  --> 
    <script src="/assets/js/magnific-popup.min.js"></script> 
    <!-- waypoints min js  --> 
    <script src="/assets/js/waypoints.min.js"></script> 
    <!-- parallax js  --> 
    <script src="/assets/js/parallax.js"></script> 
    <!-- countdown js  --> 
    <script src="/assets/js/jquery.countdown.min.js"></script> 
    <!-- jquery.countTo js  -->
    <script src="/assets/js/jquery.countTo.js"></script>
    <!-- imagesloaded js --> 
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- isotope min js --> 
    <script src="/assets/js/isotope.min.js"></script>
    <!-- jquery.appear js  -->
    <script src="/assets/js/jquery.appear.js"></script>
    <!-- jquery.dd.min js -->
    <script src="/assets/js/jquery.dd.min.js"></script>
    <!-- slick js -->
    <script src="/assets/js/slick.min.js"></script>
    <!-- DatePicker js -->
    <script src="/assets/js/datepicker.min.js"></script>
    <!-- TimePicker js -->
    <script src="/assets/js/mdtimepicker.min.js"></script>
    <!-- scripts js --> 
    <script src="/assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@endpush


@section('title', 'About')


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
        <div class="breadcrumb_section background_bg overlay_bg_50 page_title_light" data-img-src="/assets/images/about_bg.jpg">
            <div class="container"><!-- STRART CONTAINER -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title">
                            <h1>Về chúng tôi</h1>
                        </div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Về chúng tôi</li>
                        </ol>
                    </div>
                </div>
            </div><!-- END CONTAINER-->
        </div>
        <!-- END SECTION BREADCRUMB -->

<!-- START SECTION ABOUT -->
<div class="section">
	<div class="container">
    	<div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_box box_shadow1">
                    <div class="heading_s1">
                        <span class="sub_heading font_style1">Về chúng tôi</span>
                        <h2>{{ config('site.name') }}</h2>
                    </div>
                    <p>Chào mừng đến với {{ config('site.name') }}, nơi chúng tôi mang đến cho bạn hương vị sống động và phong phú của ẩm thực Việt Nam. Món đặc sản của chúng tôi là Phở – tinh hoa ẩm thực Việt với nước dùng thanh ngọt, bánh phở mềm và thịt bò hoặc gà thơm ngon, ăn kèm rau thơm tươi mát.</p>
                    <p>Tại {{ config('site.name') }}, Chúng tôi chuyên phục vụ các món ăn chính thống và sáng tạo được chế biến từ những nguyên liệu tươi ngon nhất. Hãy đến và trải nghiệm những điều tuyệt vời nhất của truyền thống ẩm thực Việt cùng chúng tôi!</p>
                </div>
            </div>
            
        	<div class="col-lg-6">	
                <div class="fancy_style1 overlay_bg_20">
                    <img src="assets/images/about_img5.jpg" alt="about_img5" />
                    <a href="https://youtu.be/Ok-OcPmMl74?si=BPFDKOujWPzK50RK" class="btn btn-ripple ripple_center video_popup animation" data-animation="fadeInUp" data-animation-delay="0.6s">
                        <span class="ripple"><i class="ion-play"></i></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END SECTION ABOUT --> 
        <!-- START SECTION CTA -->
        <div class="section background_bg" data-img-src="/assets/images/cta_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                        <div class="heading_s1 heading_light">
                            <span class="sub_heading font_style1">Trải nghiệm hương vị đích thực</span>
                            <h2>{{ config('site.name') }}: Hương vị truyền thống</h2>
                        </div>
                        <p class="text-white">Bắt đầu cuộc hành trình ẩm thực với {{ config('site.name') }}, nơi chúng tôi tôn vinh hương vị phong phú và đa dạng của Việt Nam. Phở là món ăn đặc trưng của chúng tôi, tinh túy ẩm thực Việt với hương vị đậm đà, khó quên.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION CTA -->


<!-- START SECTION FEATURES -->
<div class="section pb_70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Traditional African Meals -->
            <div class="col-lg-4 col-md-6">
                <div class="icon_box icon_box_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                    <div class="icon">
                        <i class="flaticon-dining-table"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase">Ẩm thực Việt Nam </h5>
                        <p>Thưởng thức hương vị của các bữa ăn truyền thống Việt Nam, được chế biến cẩn thận để bảo tồn di sản ẩm thực phong phú của chúng tôi.</p>
                    </div>
                </div>
            </div>

            <!-- Homemade Goodness -->
            <div class="col-lg-4 col-md-6">
                <div class="icon_box icon_box_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                    <div class="icon">
                        <i class="flaticon-contact"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase"></h5>
                        <p>Các bữa ăn của chúng tôi được chế biến cẩn thận, kết hợp công thức nấu ăn tự làm và nguyên liệu tươi để bạn có cảm giác như đang ở nhà.</p>
                    </div>
                </div>
            </div>

            <!-- Satisfying Every Bite -->
            <div class="col-lg-4 col-md-6">
                <div class="icon_box icon_box_style1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                    <div class="icon">
                        <i class="flaticon-restaurant"></i>
                    </div>
                    <div class="icon_box_content">
                        <h5 class="text-uppercase">Thỏa mãn từng miếng ăn</h5>
                        <p>Thưởng thức những bữa ăn không chỉ ngon mà còn được chế biến để khiến bạn hoàn toàn hài lòng với từng miếng ăn.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END SECTION FEATURES -->

         
 
@endsection


 