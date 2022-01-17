@extends('frontend.layouts.master')

@section('title')
    <title>Post</title>
@endsection
@section('content')
    <div class="container">
        <section class="section wb">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="blog-title-area">
                        {{-- <ol class="breadcrumb hidden-xs-down">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</li>
                        </ol> --}}
                        <span class="color-aqua" style="font-size: 16px"><a href="{{$blog->cat_id}}" title="">{{$blog->category_name->cat_name}}</a></span>
                        <h3 style="font-size: 1.7rem">{{$blog->blog_heading}}</h3>
                        <div class="post-author--wrapper">
                            <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                            <div class="post-author--infor">
                                <a class="post-author--name" href="/user/{{$blog->author_id}}"
                                   style="color: #000000;">{{$author->user_account}}</a>
                                <button type="button" onclick="follow({{$blog->author_id}})"
                                        class="post-author--follow-btn"><i id="follow-btn-icon"
                                                                           class="fa fa-plus follow-btn-icon"></i>
                                    <span class="follow-btn">Theo dõi</span>
                                </button>
                                <br><span class="post-author--posting-time">{{$blog->created_at->toDateString()}}</span>
                            </div>
                            <div class="dropdown" style="position:absolute; right:0px">
                                <button type="button" class="post-alter--btn" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu  dropdown-menu-right">
                                    <a class="dropdown-item" href="/edit-post/{{$blog->id}}" style="color:#000000"><b>Chỉnh
                                            sửa bài
                                            viết</b></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content">
                        {{-- <b></b> --}}
                        <img src="{{$blog->blog_display}}" alt="" class="img-fluid">
                        <p class="pt-3">{{$blog->blog_content}}</p>
                    </div>
                    <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"
                                                id="like-count"> {{count($likes)}}</i></span>
                    <span class="blog-likes"><i class="fa fa-comment" aria-hidden="true"
                                                id="cmt-count"> {{count($comments)}}</i></span>
                    <span class="blog-likes"><i class="fa fa-eye"
                                                aria-hidden="true"> {{$blog->blog_seen_num}}</i></span>
                    <div class="blog-likes-cmt">
                        <button class="blog-likes-cmt--btn" onclick="liked({{$blog->id}})"><i id="like"
                                                                                              class="fa fa-heart-o"
                                                                                              aria-hidden="true"></i>
                            Like
                        </button>
                        <button class="blog-likes-cmt--btn"><a href="#comments-section"><i class="fa fa-comment"
                                                                                           aria-hidden="true"></i>
                                Comments</a>
                        </button>
                    </div>
                    <div class="user-infor--wrapper">
                        <div class="user-infor--content">
                            <img src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" class="user-infor--avatar">

                            <div class="user-infor">
                                <b>
                                    <div class="user-infor--name" style=" color: #00B6F1;"><a
                                            href="/user/{{$blog->author_id}}">{{$author->user_account}}</a></div>
                                </b>
                                {{-- <div class="user-infor--items--wrapper">
                                    <div class="user-infor--items" style="padding-left: 0px">Bài viết : <b>20</b></div>
                                    <div class="user-infor--items">Likes : <b>{{count($likes)}}</b></div>
                                    <div class="user-infor--items">Follower : <b>300</b></div>
                                </div> --}}
                            </div>
                        </div>
                        <button type="button" onclick="follow({{$blog->author_id}})" class="user-infor--follow-btn"><i
                                class="fa fa-plus follow-btn-icon"></i> <span class="follow-btn">Theo dõi</span>
                        </button>
                    </div>
                    <section id="comments-section">
                        <form id="add-a-comment" onsubmit="submit_comment(event, {{$blog->id}})">
                            <textarea placeholder="Để lại bình luận của bạn..." class="form-control mb-3 mt-2" rows="5"
                                      id="add-comment-content" name="text" required></textarea>

                            <button type="submit" class="btn btn-primary comment_heading">Bình luận</button>
                        </form>
                        @foreach($comments as $comment)
                            <div class="comments-items">

                            <span class="comment-user">
                                <img src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" class="user-infor--avatar">
                            </span>
                                <div class="comment-content">
                                    <b>
                                        <div class="user-infor--name" style=" color: #00B6F1;"><a
                                                href="/user/{{$comment->commenter->id}}">{{$comment->commenter->user_account}}</a>
                                            <span
                                                class="comment-content--time">23 giờ</span></div>
                                    </b>
                                    <p>{{$comment->comment_content}} </p>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div> {{--end col--}}
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


        </section>
    </div>{{--end-col--}}


    </section>


    <script>
        function liked(blog_id) {
            axios.post('/web-api/auth/like/' + blog_id).then(function (res) {
                console.log(res);
                $("#like").toggleClass('fa-heart-o');
                $("#like").toggleClass('fa-heart');
                $('#like-count').html(res['data']['count']);
            }).catch(function (e) {
                console.log(e)
            })
        }

        function follow(user_id) {
            let f = $('.follow-btn-icon');
            let content = $('.follow-btn')
            axios.post('/web-api/auth/follow/' + user_id).then(function (res) {
                f.toggleClass("fa-plus");
                f.toggleClass("fa-check");
                if ($(".follow-btn-icon").hasClass("fa-plus")) {
                    content.text('Theo dõi');
                } else {
                    content.text('Bỏ theo dõi');
                }
            }).catch(function (e) {
                console.log(e)
            })
        }

        function submit_comment(event, blog_id) {
            event.preventDefault();
            axios.post('/web-api/auth/comment', {
                comment_content: $('#add-comment-content').val(),
                blog_id: blog_id
            }).then(function (res) {
                console.log(res)
                location.reload();
            }).catch(function (e) {
                console.log(e)
            })
        }
    </script>


    </section>
@endsection
