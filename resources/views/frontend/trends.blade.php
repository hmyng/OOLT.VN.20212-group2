@extends('frontend.layouts.master')

@section('title')
<title>Trends</title>
@endsection
 @section('content')
{{--<section class="section wb">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="/user/{{$blog->author_name->id}}" style="color: #000000;"><b> {{$blog->author_name->user_name}}</b></a>
                            <br><span class="post-author--posting-time">{{$blog->created_at->toDateString()}}</span>

                        </div>
                        <span class="post-category"><b>{{$blog->category_name->cat_name}}</b></span>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px"><a href="/new-post/{{$blog->id}}">{{$blog->blog_heading}}</a></h3>
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
</div>

</section> --}}
<section class="section wb" >
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua"><a href="/trends"
                                              title="">TRENDS</a></h3>
                </div><!-- end title -->
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="blog-box">
                                            <div class="blog-meta big-meta" >
                                                <h4 class="entry-title text-center" style="position: relative"><a href="/new-post/{{$blog->id}}" title="" >{{$blog->blog_heading}}</a></h4>
                                                <div class="text-center" style="padding: 0.5rem 0">
                                                    <small class="blog-title--content"><a href="#" title="">{{$blog->updated_at->toDateString()}}</a></small>
                                                    <small class="blog-title--content"><a href="/user/{{$blog->author_id}}" title="">by {{$blog->author_name->user_name}}</a></small>
                                                </div>
                                                <div class="post-media">
                                                    <a href="/new-post/{{$blog->id}}" title="">
                                                        <img src="{{$blog->blog_display}}" alt=""class="img-fluid">
                                                        {{-- <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""class="img-fluid"> --}}
                                                        <div class="hovereffect">
                                                            <span></span>
                                                        </div><!-- end hover -->
                                                    </a>
                                                </div><!-- end media -->
                                                <p style="margin-top: 0.5rem">{{$blog->description}} [...]</p>
                                                <a class="readmore-btn" href="/new-post/{{$blog->id}}">READ MORE</a>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                        <hr class="invis">
                        </div><!-- end col -->
                    @endforeach
                </div><!-- end row -->
                {{ $blogs->links('pagination::bootstrap-4') }}       
            </div><!-- end col -->
            
            {{-- <div class="col-4 aboutUs"> --}}
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <section id="about-us">
                        <h3 class="about--heading mx-5">ABOUT US</h3>
                        <div class="admin-infor--wrapper mx-5">
                            <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""
                                 class="admin-infor--avatar">
                            <span class="admin-infor--item"><b>Nguyễn Hoàng Anh</b></span>
                            <span class="admin-infor--name"><b>20194474</b></span>
                            <span class="admin-infor--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                        </div>
                        <div class="admin-infor--wrapper mx-5">
                            <img src="{{asset('cloapedia/images/hoakhanh.png')}}" alt=""
                                 class="admin-infor--avatar">
                            <span class="admin-infor--item"><b>Lê Thị Khánh Hòa</b></span>
                            <span class="admin-infor--name"><b>20194565</b></span>
                            <span class="admin-infor--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                        </div>
                        <div class="admin-infor--wrapper mx-5">
                            <img src="{{asset('cloapedia/images/TrangNgan.jpg')}}" alt=""
                                 class="admin-infor--avatar">
                            <span class="admin-infor--item"><b>Phan Thị Trang Ngân</b></span>
                            <span class="admin-infor--name"><b>20194474</b></span>
                            <span class="admin-infor--item">Sinh viên năm 3 lớp Việt Nhật 03 - K64</span>
                        </div>
                        <div class="admin-infor--wrapper mx-5">
                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="admin-infor--avatar">
                            <span class="admin-infor--item"><b>Uông Hồng Minh</b></span>
                            <span class="admin-infor--name"><b>20194474</b></span>
                            <span class="admin-infor--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                        </div>
                    </section>
                </div><!-- end col -->
            </div>

        </div><!-- end row -->
    <div class="dmtop">Scroll to Top</div>
</div>

</section>
@endsection