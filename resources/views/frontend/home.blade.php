@extends('frontend.layouts.master')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <div id="wrapper">
        <section class="section first-section">
            <div class="container">
                <div id="post-image-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators/dots -->
                    <ul class="carousel-indicators">
                        <li data-target="#post-image-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#post-image-slider" data-slide-to="1"></li>
                        <li data-target="#post-image-slider" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            {{-- <img src="upload/Ezreal.jpg" alt="" class="d-block" style="width:100%"> --}}
                            <div class="masonry-box post-media">
                                <img src="upload/Ezreal.jpg" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html" title="">Chia sẻ kinh nghiệm</a></span>
                                            <h4><a href="single.html" title="">How to A+ môn CSDL lớp thầy Phương ?</a>
                                            </h4>
                                            <small><a href="single.html" title="">31/12/2021</a></small>
                                            <small><a href="blog-author.html" title="">HoanhDZ</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        </div>
                        <div class="carousel-item">
                            {{-- <img src="upload/Ezreal_20.jpg" alt="" class="d-block" style="width:100%"> --}}
                            <div class="masonry-box post-media">
                                <img src="upload/Ezreal_20.jpg" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html"
                                                                      title="">Tiếng Nhật</a></span>
                                            <h4><a href="single.html" title="">How to Manten N2 mà k cần học ?</a></h4>
                                            <small><a href="single.html" title="">30/12/2021</a></small>
                                            <small><a href="blog-author.html" title="">UHM</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            {{-- <img src="upload/Ezreal_20.jpg" alt="" class="d-block" style="width:100%"> --}}
                            <div class="masonry-box post-media">
                                <img src="upload/Ezreal.jpg" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html"
                                                                      title="">Tiếng Nhật</a></span>
                                            <h4><a href="single.html" title="">How to Manten N3 mà k cần học ?</a></h4>
                                            <small><a href="single.html" title="">30/12/2021</a></small>
                                            <small><a href="blog-author.html" title="">HoaKhanhHL</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <a class="carousel-control-prev" href="#post-image-slider" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#post-image-slider" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            @foreach($categories as $category)
                            @if($category->id <= 2)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="section-title">
                                        <h3 class="color-aqua"><a href="blog-category-01.html"
                                                                  title="">{{$category->cat_name}}</a></h3>
                                    </div><!-- end title -->

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            @foreach($category->list_blog as $blog)
                                                <div class="blog-box">
                                                    <div class="blog-meta big-meta" >
                                                        <h4 class="entry-title text-center" style="position: relative"><a href="/new-post/{{$blog->id}}" title="" >{{$blog->blog_heading}}</a></h4>
                                                        <div class="text-center" style="padding: 0.5rem 0">
                                                            <small class="blog-title--content"><a href="/new-post/{{$blog->id}}" title="">{{$blog->created_at->toDateString()}}</a></small>
                                                            <small class="blog-title--content"><a href="/user/{{$blog->author_id}}" title="">by {{$blog->author_info->user_account}}</a></small>
                                                        </div>
                                                        <div class="post-media">
                                                            <a href="/new-post/{{$blog->id}}" title="">
                                                                <img src="{{$blog->blog_display}}" alt="link ảnh bị lỗi"class="img-fluid">
                                                                {{-- <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""class="img-fluid"> --}}
                                                                <div class="hovereffect">
                                                                    <span></span>
                                                                </div><!-- end hover -->
                                                            </a>
                                                        </div><!-- end media -->
                                                        <p style="margin-top: 0.5rem">{{$blog->blog_content}} [...]</p>
                                                        <a class="readmore-btn" href="/new-post/{{$blog->id}}">READ MORE</a>
                                                    </div><!-- end meta -->
                                                </div><!-- end blog-box -->
                                                <hr class="invis">
                                            @endforeach
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div><!-- end col -->
                                @endif
                            @endforeach
                        </div>
                    </div>
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
                    {{-- </div> --}}

                </div><!-- end row -->

                <hr class="invis1">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/blog-banner.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <hr class="invis">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($categories as $category)
                        @if($category->id > 2)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="section-title">
                                    <h3 class="color-aqua"><a href="blog-category-01.html"
                                                              title="">{{$category->cat_name}}</a></h3>
                                </div><!-- end title -->

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @foreach($category->list_blog as $blog)
                                            <div class="blog-box">
                                                <div class="blog-meta big-meta" >
                                                    <h4 class="entry-title text-center" style="position: relative"><a href="/new-post/{{$blog->id}}" title="" >{{$blog->blog_heading}}</a></h4>
                                                    <div class="text-center" style="padding: 0.5rem 0">
                                                        <small class="blog-title--content"><a href="single.html" title="">{{$blog->updated_at->toDateString()}}</a></small>
                                                        <small class="blog-title--content"><a href="/user/{{$blog->author_id}}" title="">by {{$blog->author_info->user_account}}</a></small>
                                                    </div>
                                                    <div class="post-media">
                                                        <a href="single.html" title="">
                                                            <img src="{{$blog->blog_display}}" alt="link ảnh bị lỗi "class="img-fluid">
                                                            {{-- <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""class="img-fluid"> --}}
                                                            <div class="hovereffect">
                                                                <span></span>
                                                            </div><!-- end hover -->
                                                        </a>
                                                    </div><!-- end media -->
                                                    <p style="margin-top: 0.5rem">{{$blog->blog_content}} [...]</p>
                                                    <a class="readmore-btn" href="/new-post/{{$blog->id}}">READ MORE</a>
                                                </div><!-- end meta -->
                                            </div><!-- end blog-box -->
                                            <hr class="invis">
                                        @endforeach
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col -->
                            @endif
                        @endforeach
                    </div>
                </div>
                <hr class="invis1">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="upload/blog-banner.jpg" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

@endsection

