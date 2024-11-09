@extends('site.index')
@section('content')
<!-- Start About  -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h2>Tin Tức</h2> 
            <ul>
                <li>
                    <a href="{{route('site.index')}}">Trang Chủ</a>
                </li> 
                <li class="active">Tin Tức</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            @foreach($posts as $post)
            <div class="col-lg-4">
                <div class="single-blog wow animate__animated animate__fadeInUp delay-0-2s  animated">
                    <a href="{{route('site.post_detail', $post->slug)}}">
                        <img src="{{$post->photo}}" alt="Image">
                    </a>
                    <div class="blog-content">
                        <ul>
                            <li>	
                                <i class="ri-calendar-line"></i>
                                {{date('d-m-Y', strtotime($post->created_at))}}
                            </li>
                        </ul>
                        <h3>
                            <a href="{{route('site.post_detail', $post->slug)}}">{{$post->title}}</a>
                        </h3>
                        <p>{{ Str::limit($post->description, 150) }}</p>
                        <a href="{{route('site.post_detail', $post->slug)}}" class="default-btn">
                            Đọc Tiếp
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection