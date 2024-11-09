@extends('site.index')
@section('styles')
<style>
    .toc {
        background: #f9f9f9;
        border: 1px solid #aaa;
        padding: 10px;
        margin-bottom: 1em;
        width: auto;
        display: table;
        font-size: 95%;
    }

    .toc ul {display: block;padding: 0;list-style-type: none;margin-top: 10px;}

    .toc li ul {padding-left: 15px;margin-top: 0px;}
    .toc_title {font-weight: 700;color: #000;}
</style>
@endsection
@section('content')
<!-- Start About  -->
<div class="page-title-area bg-1">
    <div class="container">
        <div class="page-title-content">
            <h1>{{$post->title}}</h1> 
            <ul>
                <li>
                    <a href="{{route('site.index')}}">Trang Chủ</a>
                </li> 
                <li>
                    <a href="{{route('site.posts')}}">Tin Tức</a>
                </li> 
                <li class="active">{{$post->title}}</li>
            </ul>
        </div>
    </div>
</div>
<div class="blog-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="blog-details-content">
                        <img src="{{ $post->photo }}" alt="{{$post->title}}">
                        <div class="rh_content entry-content">
                            <?php
                                $tocGenerator = new \TOC\TocGenerator();  
                                $htmlOut = "<div class='toc'>";
                                $htmlOut .= "<p class='toc_title' style='margin-bottom:0'>Mục lục <span class='toc_toggle'>[<a href='javascript:;'>Ẩn</a>]</span></p>";
                                $htmlOut .= $tocGenerator->getHtmlMenu($post->content);
                                $htmlOut .= "</div>";
                                echo $htmlOut;  
                            ?>
                            {!! $post->content !!}
                        </div>

                        <div class="tag-sshare mt-4">
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul class="tags">
                                        <li>
                                            <span>Tags:</span>
                                        </li>
                                        @foreach($post->tags as $tag)
                                        <li>
                                            <a href="#">{{$tag->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="share-opt">
                                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="small">
                                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="widget-sidebar ml-15">
                    <div class="sidebar-widget src-forms">
                        <form class="src-form">
                            <input type="text" class="form-control" placeholder="Tìm kiếm...">
                            <button class="src-btn">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>
                    <div class="sidebar-widget recent-post">
                        <h3>Xem Thêm Nhà đất</h3>
                        <?php 
                            $projects = App\Models\Project::get();
                        ?>
                        @foreach($projects as $project)
                            <article class="item">
                                <a href="{{route('site.project_detail', $project->slug )}}" class="thumb">
                                    <img src="{{$project->photo}}">
                                </a>
                                <div class="info">
                                    <h4 class="title usmall">
                                        <a href="{{route('site.project_detail', $project->slug )}}">{{$project->name}}</a>
                                    </h4>
                                    <span class="price_thumb">
                                        Giá: {{$project->price}} 
                                    </span>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="sidebar-widget tags">
                        <h3>Tag</h3>
                        <ul>
                            <?php
                                $tags = App\Models\Tag::get();    
                            ?>
                            @foreach($tags as $tag)
                            <li>
                                <a href="#">{{$tag->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.toc_toggle').click(function() {
            $('.toc ul').slideToggle();
            $(".toc_title a").text(($(".toc_title a").text() == 'Hiện') ? 'Ẩn' : 'Hiện');
        });
    });
</script>
@endsection