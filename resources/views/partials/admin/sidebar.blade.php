        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <div class="d-flex sidebar-profile">
                  <div class="sidebar-profile-image">
                    <img src=" {{ $loggedInUser && $loggedInUser->profile_picture ? asset('storage/profile-picture/' . $loggedInUser->profile_picture) : asset('assets/images/user-icon.png') }}" alt="image">
                    <span class="sidebar-status-indicator"></span>
                  </div>
                  <div class="sidebar-profile-name">
                    <p class="sidebar-name">
                      {{ $loggedInUser->first_name }}
                    </p>
                    <p class="sidebar-designation">
                      Chào mừng
                    </p>
                  </div>
                </div>
              </li>


              <li class="nav-item {{ request()->route()->named('admin.index') ? 'active-nav' : '' }} ">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fa fa-desktop menu-icon"></i>
                    <span class="menu-title">Trang tổng quan</span>
                </a>
            </li>
            
 
 
            <li class="nav-item {{ request()->route()->named('admin.pos.index') ? 'active-nav' : '' }}">
              <a class="nav-link" href="{{ route('admin.pos.index') }}">
                <i class="fa fa-shopping-cart menu-icon" ></i>
                  <span class="menu-title">Điểm bán hàng</span>
              </a>
          </li>
          
          
      
          <li class="nav-item {{ Request::is('admin/order*') ? 'active-nav' : '' }}">
            <a class="nav-link" href="{{ route('admin.orders.index') }}">
                <i class="fa fa-file menu-icon"></i>
                <span class="menu-title">Quản lý đơn hàng</span>
            </a>
        </li>
        <li class="nav-item {{ request()->route()->named('admin.table-bookings') ? 'active-nav' : '' }}">
          <a class="nav-link" href="{{ route('admin.table-bookings') }}">
              <i class="fa fa-folder-open menu-icon"></i>
              <span class="menu-title">Quản lý đặt chỗ</span>
          </a>
        </li>        
        <li class="nav-item {{ Request::is('admin/blog*') ? 'active-nav' : '' }}">
            <a class="nav-link" href="{{ route('admin.blog.index') }}">
                <i class="far fa-newspaper menu-icon"></i>
                <span class="menu-title">Quản lý blog</span>
            </a>
        </li>
        


        @if ($loggedInUser->role == "global_admin")

        <li class="nav-item {{ request()->route()->named('admin.users.index') ? 'active-nav' : '' }}">
          <a class="nav-link" href="{{ route('admin.users.index') }}">
              <i class="fa fa-users menu-icon"></i>
              <span class="menu-title">Quản lý quản trị viên</span>
          </a>
        </li>
              
        <li class="nav-item">
            <a class="nav-link collapsed" data-toggle="collapse" href="#site-settings" aria-expanded="false" aria-controls="site-settings">
                <i class="fa fa-cog menu-icon"></i>
                <span class="menu-title">Cài đặt trang web</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="site-settings" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.menus.index') }}">Thực đơn</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.categories.index') }}">Loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.testimonies.index') }}">Testimony</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.terms.edit') }}">Điều khoản & Điều kiện</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.privacy-policy.edit') }}">Chính sách bảo mật</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.general-settings') }}">Cài đặt chung</a>
                    </li>
                </ul>
            </div>
        </li>
        @endif
    


              <li class="nav-item {{ request()->route()->named('admin.view.myprofile') ? 'active-nav' : '' }}">
                <a class="nav-link" href="{{ route('admin.view.myprofile') }}">
                  <i class="fa fa-user menu-icon"></i>
                  <span class="menu-title">Hồ sơ của tôi</span>
                </a>
              </li>

              <li class="nav-item {{ request()->route()->named('change.password.form') ? 'active-nav' : '' }}">
                <a class="nav-link" href="{{ route('change.password.form') }}">
                  <i class="fa fa-lock menu-icon"></i>
                  <span class="menu-title">Thay đổi mật khẩu</span>
                </a>
              </li>     


              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                  <i class="fa fa-globe menu-icon"></i>
                  <span class="menu-title">Trang web chính</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fa fa-power-off menu-icon"></i>
                    <span class="menu-title">Đăng xuất</span>
                </a>
            </li>
              
            </ul>
  
          </nav>
