<nav class="navbar navbar-expand-lg"> 
    <a class="navbar-brand" href="{{ route('home') }}">
        <img class="logo_canteen1" src="assets/images/logo-canteen1.png" alt="logo"height="150px>
        <img class="logo_canteen1" src="assets/images/logo-canteen1.png" alt="logo" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
        <span class="ion-android-menu"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li>  <a href="{{ route('home') }}" class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">Trang chủ</a> </li>
            <li>  <a href="{{ route('menu') }}" class="nav-link {{ Request::is('menu*') ? 'active' : '' }}">Thực đơn</a> </li>
            <li>  <a href="{{ route('blogs') }}" class="nav-link {{ Request::is('blog*') ? 'active' : '' }}">BLOG</a> </li>
            <li>  <a href="{{ route('about') }}" class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}">Giới thiệu</a> </li>
            <li> <a href="{{ route('contact') }}" class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}">Liên hệ</a> </li>
            @if (Auth::check())
                <li> <a href="{{ route('admin.index') }}" class="nav-link"> Quản trị</a> </li>
                <li> <a  data-bs-toggle="modal" data-bs-target="#logoutModal" href="#" class="nav-link">Đăng xuất</a> </li>
            @endif


        </ul>
        
    </div>
    <ul class="navbar-nav attr-nav align-items-center">
        <li><a class="nav-link {{ Request::routeIs('cart') ? 'active' : '' }}" href="{{ route('customer.cart') }}" ><i class="linearicons-cart"></i><span class="cart_count" id="cart_count">{{ $customer_total_cart_items }}</span></a></li>
    </ul>
    @if($firstRestaurantPhoneNumber)  
    <div class="header_btn d-sm-block d-none">
        <a href="tel:{{ $firstRestaurantPhoneNumber->phone_number }}" class="btn btn-default rounded-0 ml-2 btn-sm"><i class="fa fa-phone"></i> GỌI CHO CHÚNG TÔI</a>
    </div>  
    @endif

</nav>

