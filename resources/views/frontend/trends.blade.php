@extends('frontend.layouts.master')

@section('title')
<title>Trends</title>
@endsection
@section('content')
<section class="section wb">
    <div class="container">
        <span class="trends-header"><b>TRENDS</b></span>
        <hr class="invis">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b> {{$blog->author_name->user_name}}</b></a>
                            <br><span class="post-author--posting-time">{{$blog->created_at->toDateString()}}</span>
                        </div>
                        <span class="post-category"><b>{{$blog->category_name->cat_name}}</b></span>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px"><a href="#">{{$blog->blog_heading}}</a></h3>
                        <p style="margin: 0px">{{$blog->blog_content}}</p>
                    </div>
                    <div class="content-post-image--container">
                        <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                        <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true">{{$blog->count_like}}</i></span>
                        <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> {{$blog->count_comment}}</i></span>
                        <div class="content-like-cmt-bar container-fluid">
                            - <div class="row">
                                <div class="button-container col-6">
                                    <button id="like-button" class=""><i class="fa fa-heart-o" aria-hidden="true"></i> Like</button>
                                </div>
                                <div class="button-container col-6">
                                    <button id="cmt-button" class=""><i class="fa fa-comment-o" aria-hidden="true"></i> Comment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="dmtop">Scroll to Top</div>
</section>
@endsection