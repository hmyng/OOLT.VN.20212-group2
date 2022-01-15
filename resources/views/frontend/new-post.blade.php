@extends('frontend.layouts.master')

@section('title')
    <title>Post</title>
@endsection
@section('content')
    <section class="section wb">
        <div class="container">
            <div class="blog-title-area">
                <ol class="breadcrumb hidden-xs-down">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</li>
                </ol>
                <span class="color-aqua"><a href="blog-category-01.html" title="">Chia sẻ kinh nghiệm</a></span>
                <h3 style="font-size: 35px">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</h3>
                <div class="post-author--wrapper">
                    <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                    <div class="post-author--infor">
                        <a class="post-author--name" href="" style="color: #000000;">HoanhDZ</a>
                        <button type="button" onclick="follow(1)" class="post-author--follow-btn"><i id="follow-btn-icon"
                                                                                                   class="fa fa-plus"></i>
                            <span id="follow-btn">Theo dõi</span>
                        </button>
                        <br><span class="post-author--posting-time">23 giờ</span>
                    </div>
                    <div class="dropdown" style="position:absolute; right:0px">
                        <button type="button" class="post-alter--btn" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                        </button>
                        <div class="dropdown-menu  dropdown-menu-right">
                            <button onclick="" class="dropdown-item" href="/edit-post/{{$blog->id}}" style="color:#000000"><b>Chỉnh sửa bài
                                    viết</b></button>
                        </div>
                    </div>
                </div>
                <div id="post-image-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators/dots -->
                    <ul class="carousel-indicators">
                        <li data-target="#post-image-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#post-image-slider" data-slide-to="1"></li>
                    </ul>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{$blog->blog_display}}" alt="" class="d-block" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="{{$blog->blog_display}}" alt="" class="d-block" style="width:100%">
                        </div>
                        {{-- <div class="carousel-item">
                          <img src="ny.jpg" alt="New York" class="d-block" style="width:100%">
                        </div> --}}
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
            <h5 style="text-align: center">Một số hình ảnh vui nhộn trong lớp học</h5>
            <div class="blog-content">
                <b>Nội dung :</b>
                <p>Đ có kinh nghiệm gì đâu học đi em ê ko hối hận đấy :v</p>
            </div>
            <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> 100</i></span>
            <span class="blog-likes"><i class="fa fa-comment" aria-hidden="true"> 17</i></span>
            <div class="blog-likes-cmt">
                <button class="blog-likes-cmt--btn" onclick="liked(1)"><i id="like" class="fa fa-heart-o"
                                                                          aria-hidden="true"></i> Like
                </button>
                <button class="blog-likes-cmt--btn"><a href="#comments-section"><i class="fa fa-comment"
                                                                                   aria-hidden="true"></i> Comments</a>
                </button>
            </div>
            <div class="user-infor--wrapper">
                <div class="user-infor--content">
                    <img src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" class="user-infor--avatar">
                    <div class="user-infor">
                        <b>
                            <div class="user-infor--name" style=" color: #00B6F1;"><a href="">{{$author->user_account}}</a></div>
                        </b>
                        <div class="user-infor--items--wrapper">
                            <div class="user-infor--items" style="padding-left: 0px">Bài viết : <b>20</b></div>
                            <div class="user-infor--items">Likes : <b>200</b></div>
                            <div class="user-infor--items">Follower : <b>300</b></div>
                        </div>
                    </div>
                </div>
                <button type="button" onclick="follow(1)" class="user-infor--follow-btn"><i class="fa fa-plus"></i> Theo dõi</button>
            </div>
            <section id="comments-section">
                <form id="add-a-comment" onsubmit="submit_comment(event)">
                    <textarea placeholder="Để lại bình luận của bạn..." class="form-control mb-3 mt-2" rows="5"
                              id="add-comment-content" name="text" required></textarea>
                    <button type="submit" class="btn btn-primary comment_heading">Bình luận</button>
                </form>
                <div class="comments-items">
            <span class="comment-user">
                 <img src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" class="user-infor--avatar">
            </span>
                    <div class="comment-content">
                        <b>
                            <div class="user-infor--name" style=" color: #00B6F1;"><a href="">{{$author->user_account}}</a> <span
                                    class="comment-content--time">23 giờ</span></div>
                        </b>
                        <p>Oidoioi tramkam :< </p>
                    </div>
                </div>
                <div class="comments-items">
            <span class="comment-user">
                 <img src="{{asset('cloapedia/images/hoakhanh.png')}}" alt="" class="user-infor--avatar">
            </span>
                    <div class="comment-content">
                        <b>
                            <div class="user-infor--name" style=" color: #00B6F1;"><a href="">HoaKhanhHL</a> <span
                                    class="comment-content--time">1 giờ</span></div>
                        </b>
                        <p> Thật là Xư ba ra xi quá đi ^^ </p>
                    </div>
                </div>
                <div class="comments-items">
            <span class="comment-user">
                 <img src="{{asset('cloapedia/images/mario-icon.png')}}" alt="" class="user-infor--avatar">
            </span>
                    <div class="comment-content">
                        <b>
                            <div class="user-infor--name" style=" color: #00B6F1;"><a href="">Mario</a> <span
                                    class="comment-content--time">3 giờ</span></div>
                        </b>
                        <p>Úi dời game là dễ :v </p>
                    </div>
                </div>
            </section>
        </div>
        <script>
            function liked(blog_id) {
                let like = document.getElementById('like');
                axios.post('/web-api/like/' + blog_id).then(function (res) {
                    console.log(res);
                    if ($("#like").hasClass("fa-heart-o")) {
                        like.classList.remove('fa-heart-o');
                        like.classList.add('fa-heart');
                    } else {
                        like.classList.add('fa-heart-o');
                        like.classList.remove('fa-heart');
                    }
                }).catch(function (e) {
                    console.log(e)
                })
            }


            function follow(user_id) {
                let f = document.getElementById('follow-btn-icon');
                let content = document.getElementById('follow-btn')
                axios.post('/web-api/auth/follow/' + user_id).then(function (res) {
                    if ($("#follow-btn-icon").hasClass("fa-plus")) {
                        f.classList.remove('fa-plus');
                        f.classList.add('fa-check');
                        content.innerHTML = 'Bỏ theo dõi';
                    } else {
                        f.classList.add('fa-plus');
                        f.classList.remove('fa-check');
                        content.innerHTML = 'Theo dõi';
                    }
                }).catch(function (e) {
                    console.log(e)
                })

            }

            function submit_comment(event) {
                event.preventDefault();
                axios.post('/web-api/auth/comment', {
                    comment_content: 'this is a cmt',
                    blog_id:1
                }).then(function (res) {
                    console.log(res)
                }).catch(function (e) {
                    console.log(e)
                })
            }
        </script>


    </section>
@endsection
