@extends('site.index')
@section('content')
<!-- Start About  -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Liên Hệ</h2>
            <ul>
                <li>
                    <a href="{{route('site.index')}}">Trang Chủ</a>
                </li>
                <li class="active">Liên Hệ</li>
            </ul>
        </div>
    </div>
</div>

<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-form">
                    <h2>Liên hệ với chúng tôi</h2>

                    <form id="contactForm" novalidate="true">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Họ và Tên*</label>
                                    <input type="text" name="name" id="name" class="form-control" required="" data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" name="email" id="email" class="form-control" required="" data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" name="phone_number" id="phone_number" required="" data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Lời Nhắn</label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="4" required="" data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;">
                                    Gửi Ngay
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="contacts-info">
                    <h2>Thông Tin Liên Hệ</h2>
                    <p>Bạn cần tư vấn các gói vay phù hợp cho nhu cầu tiêu dùng. Hãy liên hệ ngay với chúng tôi để được phục vụ tốt nhất.</p>

                    <ul class="address">
                        <li class="location">
                            <i class="ri-map-pin-fill icon"></i>
                            <span>Địa chỉ:</span>
                            112 Nguyễn Hữu Thọ - Hải Châu - Đà Nẵng
                        </li>
                        <li>
                            <i class="ri-phone-fill icon"></i>
                            <span>Điện Thoại:</span>
                            <a href="tel:0775525685">0775525685</a>
                        </li>
                        <li>
                            <i class="ri-mail-fill icon"></i>
                            <span>Email:</span>
                            <a href="mailto:phanlyly.97@gmail.com">phanlyly.97@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
