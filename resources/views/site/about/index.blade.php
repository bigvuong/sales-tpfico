@extends('site.index')
@section('content')
<!-- Start About  -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Giới Thiệu</h2>
            <ul>
                <li>
                    <a href="{{route('site.index')}}">Trang Chủ</a>
                </li>
                <li class="active">Giới Thiệu</li>
            </ul>
        </div>
    </div>
</div>
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

@endsection
