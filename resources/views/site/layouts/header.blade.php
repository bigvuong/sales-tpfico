<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{route('site.index')}}">
                        <img src={{asset('public/site/images/logo-tpfico.png')}} class="main-logo" alt="logo" style="height:55px">
                        <img src={{asset('public/site/images/white-logo-2.png')}} class="white-logo" alt="logo" style="height:55px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('site.index')}}">
                    <img src={{asset('public/site/images/logo-tpfico.png')}} class="main-logo" alt="logo" style="height:55px">
                    <img src={{asset('public/site/images/white-logo-2.png')}} class="white-logo" alt="logo" style="height:55px">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{route('site.index')}}" class="nav-link ">
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.about')}}" class="nav-link ">
                                Giới Thiệu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.posts')}}" class="nav-link ">
                                Tin Tức
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('site.contact')}}" class="nav-link">Liên Hệ</a>
                        </li>
                    </ul>


                    <div class="others-options">
                        <form class="search-form">
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button type="submit" class="src-btn">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Start Dark Mode Area -->
    <div class="switch-wrapper">
        <div class="container-fluid">
            <div class="switch-btn">
                <label>
                    <input class="switch" type="checkbox" id="darkSwitch">
                    <div>
                        <div class="moon">
                            <img src={{asset('public/site/images/dark.png')}} alt="">
                        </div>
                        <div class="sun">
                            <img src={{asset('public/site/images/light.png')}} alt="">
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
