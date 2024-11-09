@extends('site.index')
@section('styles')
<style>
    label.label {
        color:#fff;
    }
</style>
@endsection
@section('content')
<!-- Start Banner Area -->
<div class="banner-area bg-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner-rent-title">
                    <div class="h1 text-center text-white mb-6  wow animate__animated animate__fadeInUp delay-0-4s">Khám phá ngay các gói vay tiêu dùng tại TPBank</div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="banner-rent-sale-form style-two wow animate__animated animate__fadeInUp delay-0-6s">
                    <ul class="social-link">
                        <li class="call">
                            <a href="tel:0775525685">
                                <i class="ri-phone-fill"></i>
                            </a>
                        </li>
                        <li class="wow animate__animated animate__fadeInUp delay-0-2s">
                            <a href="https://facebook.com/" target="_blank">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li class="wow animate__animated animate__fadeInUp delay-0-4s">
                            <a href="https://twitter.com/" target="_blank">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li class="wow animate__animated animate__fadeInUp delay-0-6s">
                            <a href="mailto:phanlyly.97@gmail.com" target="_blank">
                                <i class="ri-mail-send-fill"></i>
                            </a>
                        </li>
                        <li class="wow animate__animated animate__fadeInUp delay-0-8s">
                            <a href="https://instagram.com/" target="_blank">
                                <i class="ri-instagram-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Area -->
<!-- Start About  -->
<div class="about-dt-area pt-70 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="dt-about-img">
                    <img src="{{asset('public/site/images/about.png')}}" alt="Image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="dt-about-content">
                    <div class="about-title mb-2">
                        <i class="fal fa-building"></i> Giới thiệu
                    </div>
                    <h2 class="">TP Fico Ly Ly Sales</h2>
                    <p>TP Fico chuyên cung cấp các gói vay tiêu dùng thủ tục nhanh chóng, lãi suất thấp cho khách các vùng lân cận của tỉnh Quảng Nam và thành phố Đà Nẵng.</p>
                    <p>Chúng tôi luôn mong muốn mang đến cho quý khách hàng những gói vay thích hợp, sự hài lòng của quý khách là động lực để công ty ngày càng phát triển.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

@endsection
