@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-3 col-xs-12">
            <div class="rb-layout-item rb-medium-size-50 rb-xsmall-size-100 rb-size-25">
                <div class="rb-card rb-card-stats rb-theme-default">
                    <div class="rb-card-header rb-card-header-icon rb-card-header-blue">
                        <div class="card-icon"><i class="fad fa-envelope"></i></div>
                        <div class="rb-card-right">
                            <p class="category">Tin Nhắn Mới</p>
                            <h3 class="title"> <span>0</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="rb-layout-item rb-medium-size-50 rb-xsmall-size-100 rb-size-25">
                <div class="rb-card rb-card-stats rb-theme-default">
                    <div class="rb-card-header rb-card-header-icon rb-card-header-rose">
                        <div class="card-icon"><i class="fad fa-boxes"></i></div>
                        <div class="rb-card-right">
                            <p class="category">Dự Án</p>
                            <h3 class="title"> <span>{{$projects}}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="rb-layout-item rb-medium-size-50 rb-xsmall-size-100 rb-size-25">
                <div class="rb-card rb-card-stats rb-theme-default">
                    <div class="rb-card-header rb-card-header-icon rb-card-header-orange">
                        <div class="card-icon"><i class="fad fa-newspaper"></i></div>
                        <div class="rb-card-right">
                            <p class="category">Bài viết</p>
                            <h3 class="title"> <span>{{$posts}}</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-xs-12">
            <div class="rb-layout-item rb-medium-size-50 rb-xsmall-size-100 rb-size-25">
                <div class="rb-card rb-card-stats rb-theme-default">
                    <div class="rb-card-header rb-card-header-icon rb-card-header-green">
                        <div class="card-icon"><i class="fad fa-calendar-check"></i></div>
                        <div class="rb-card-right">
                            <p class="category">Đối Tác</p>
                            <h3 class="title"> <span>0</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
