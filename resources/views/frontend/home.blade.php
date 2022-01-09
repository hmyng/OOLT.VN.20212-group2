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
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-aqua"><a href="blog-category-01.html" title="">Chia sẻ kinh nghiệm</a></h3>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">The golden rules you need to know for a
                                                positive life</a></h4>
                                        <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                        {{-- <small><a href="blog-category-01.html" title="">Chia sẻ kinh nghiệm</a></small> --}}
                                        <small><a href="single.html" title="">24-12-2021</a></small>
                                        <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-heart" aria-hidden="true"> 100</i></span></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-comment" aria-hidden="true"> 17</i></span></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">The golden rules you need to know for a
                                                positive life</a></h4>
                                        <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                        {{-- <small><a href="blog-category-01.html" title="">Chia sẻ kinh nghiệm</a></small> --}}
                                        <small><a href="single.html" title="">24-12-2021</a></small>
                                        <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-heart" aria-hidden="true"> 100</i></span></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-comment" aria-hidden="true"> 17</i></span></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <h3 class="color-pink"><a href="blog-category-01.html" title="">Kiến thức IT</a></h3>
                        </div><!-- end title -->
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">What is your favorite leather jacket
                                                color</a></h4>
                                        <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                        {{-- <small><a href="blog-category-01.html" title="">Fashion</a></small> --}}
                                        <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                        <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-heart" aria-hidden="true"> 100</i></span></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-comment" aria-hidden="true"> 17</i></span></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">Is summer, have you bought a cane</a></h4>
                                        <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                        {{-- <small><a href="blog-category-01.html" title="">Fashion</a></small> --}}
                                        <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                        <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-heart" aria-hidden="true"> 100</i></span></small>
                                        <small class="blog-meta--like-cmt"><span class="blog-likes"><i
                                                    class="fa fa-comment" aria-hidden="true"> 17</i></span></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <section id="about-us">
                            <h3 class="about--heading mx-5">ABOUT US</h3>
                            <div class="admin-infor--wrapper mx-5">
                                <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt="" class="admin-infor--avatar">
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

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <h3 class="color-green"><a href="blog-category-01.html" title="">Tiếng Nhật</a></h3>
                            </div><!-- end title -->

                            <div class="blog-box row">
                                <div class="col-md-4 ">
                                    <div class="post-media ">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt=""
                                                 class="img-fluid post-media-image">
                                            {{-- <div class="hovereffect"></div> --}}
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-7">
                                    <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without
                                            dying</a></h4>
                                    <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                    <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                    <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                                   aria-hidden="true"> 100</i></span></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                                   aria-hidden="true"> 17</i></span></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4 ">
                                    <div class="post-media ">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt=""
                                                 class="img-fluid post-media-image">
                                            {{-- <div class="hovereffect"></div> --}}
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-7">
                                    <h4><a href="single.html" title="">5 Beautiful buildings you need to visit without
                                            dying</a></h4>
                                    <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                    <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                    <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                                   aria-hidden="true"> 100</i></span></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                                   aria-hidden="true"> 17</i></span></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media ">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt=""
                                                 class="img-fluid post-media-image">
                                            {{-- <div class="hovereffect"></div> --}}
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-7">
                                    <h4><a href="single.html" title="">Let's make an introduction to the glorious world
                                            of history</a></h4>
                                    <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                    <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                    <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                                   aria-hidden="true"> 100</i></span></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                                   aria-hidden="true"> 17</i></span></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media ">
                                        <a href="single.html" title="">
                                            <img src="{{asset('cloapedia/images/UHM.png')}}" alt=""
                                                 class="img-fluid post-media-image">
                                            {{-- <div class="hovereffect"></div> --}}
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-7">
                                    <h4><a href="single.html" title="">Did you see the most beautiful sea in the
                                            world?</a></h4>
                                    <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                    <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                    <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                                   aria-hidden="true"> 100</i></span></small>
                                    <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                                   aria-hidden="true"> 17</i></span></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->

                        <hr class="invis">

                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="section-title">
                            <h3 class="color-yellow"><a href="blog-category-01.html" title="">Chia sẻ tài liệu</a></h3>
                        </div><!-- end title -->

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="hovereffect"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="single.html" title="">We are guests of ABC Design Studio - Vlog</a></h4>
                                <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                               aria-hidden="true"> 100</i></span></small>
                                <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                               aria-hidden="true"> 17</i></span></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="hovereffect"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a href="single.html" title="">Nostalgia at work</a></h4>
                                <p>Giới hạn kí tự kiểu gì cho mấy cái blog cân nhau nhớ :v</p>
                                <small><a href="blog-category-01.html" title="">11-12-2021</a></small>
                                <small><a href="blog-author.html" title="">by Hoanh</a></small>
                                <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-heart"
                                                                                               aria-hidden="true"> 100</i></span></small>
                                <small class="blog-meta--like-cmt"><span class="blog-likes"><i class="fa fa-comment"
                                                                                               aria-hidden="true"> 17</i></span></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                    </div><!-- end col -->
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
            </div><!-- end container -->
        </section>

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection

