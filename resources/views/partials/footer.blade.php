 
<!-- START FOOTER -->
<footer class="footer_dark pattern_top background_bg overlay_bg_80" data-img-src="assets/images/footer_bg.jpg">
	<div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                	<div class="widget">
                        <div class="footer_logo text-center">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('blog-images/logo-canteen.png') }}" alt="CANTEEN Logo" style="max-height: 200px;">
                            </a>
                        </div>
                        <p>Tại {{ config('site.name') }}, Chúng tôi tự hào mang đến cho bạn hương vị đích thực của Việt Nam. Các món ăn được chế biến khéo léo và lòng hiếu khách nồng hậu của chúng tôi tạo nên trải nghiệm ẩm thực mà bạn sẽ không bao giờ quên.</p>
                    </div>
                    <div class="widget">
                        <ul class="social_icons social_white social_style1 rounded_social">
                                @foreach($socialMediaHandles as $handle)
                                <li>
                                    @if($handle->social_media === 'facebook')
                                        <a href="{{ "https://www.facebook.com/" . $handle->handle }}" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                    @elseif($handle->social_media === 'instagram')
                                        <a href="{{ "https://www.instagram.com/" . $handle->handle }}" target="_blank"><i class="fa fa-instagram"></i></a>
                                    @elseif($handle->social_media === 'youtube')
                                        <a href="{{ "https://www.youtube.com/" .$handle->handle }}" target="_blank"><i class="fa fa-youtube"></i></a>
                                    @elseif($handle->social_media === 'tiktok')
                                        <a href="{{ "https://www.tiktok.com/@" . $handle->handle }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    @endif
                                </li>
                                @endforeach                      
                        </ul>
                    </div>
        		</div>
                <div class="col-xl-3 col-md-3 col-sm-12">
                	<div class="widget">
                        <h6 class="widget_title">Liên kết</h6>
                        <ul class="widget_links">
                            <li><a href="{{ route('home') }}">Trang chủ</a></li>
                            <li><a href="{{ route('menu') }}">Thực đơn</a></li>
                            <li><a href="{{ route('about') }}">Giới thiệu</a> </li>
                            <li><a href="{{ route('contact') }}">Liên hệ </a></li>
                            
                            @if($whatsAppNumber)
                            <li> <a href="https://wa.me/{{ $whatsAppNumber->phone_number }}" target="_blank" ><i class="fa fa-whatsapp"></i>Trò chuyện với chúng tôi trên Whatsapp</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-sm-12">
                <div class="widget">
                    <h6 class="widget_title">Thông tin liên hệ</h6>
                    <ul class="contact_info contact_info_light">
                        @if($firstRestaurantAddress)
                            <li><i class="ti-location-pin"></i> <p>{{ $firstRestaurantAddress->address }}</p></li>
                        @endif

                        <li><i class="ti-email"></i> <a href="mailto:canteen@cvibe.net">canteen@cvibe.net</a></li>

                        <li><i class="ti-mobile"></i> <p></p></li>
                    </ul>

                    <!-- Google Map -->
                    <div style="text-align: right; margin-top: 10px;">
                        <a href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+Kinh+t%E1%BA%BF+-+C%C3%B4ng+ngh%E1%BB%87+B%E1%BA%AFc+Khoa+(CTECH)/@20.8903871,105.8592607,17z" target="_blank" style="display: inline-block;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465.9431091349764!2d105.85926067630054!3d20.890387141513415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135b306c30f20b3%3A0xf0806e188cd4daea!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEvhu7kgdGh14bqtdCAtIEPDtG5nIG5naOG7hyBCw6FjaCBLaG9hIChDVEVDSCk!5e0!3m2!1svi!2s!4v1748585590110!5m2!1svi!2s" 
                                width="100%" 
                                height="200" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </a>
                    </div>
                </div>
                </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bottom_footer border-top-tran">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0 text-center"><script>document.write(new Date().getFullYear());</script> &copy;   Đã đăng ký Bản quyền | <span class="text_default">{{ config('site.name') }}</span></p>
                        </div>
                        <div class="col-md-6">
                            <ul class="list_none footer_link text-center text-md-right">
                                <li><a href="{{ route('privacy.policy') }}">Chính sách bảo mật</a></li>
                                <li><a href="{{ route('terms.conditions') }}">Điều khoản &amp; Điều kiện</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
