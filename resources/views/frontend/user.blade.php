@extends('frontend.layouts.master')

@section('title')
<title>User</title>
@endsection
@section('content')
<section class="section wb container">
    {{-- <div class="container"> --}}
    <div class="profile-wrapper">
        <div class="profile-items--container">
            <img class="profile-item-avatar" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
            <div class="profile-item-name"><b>{{$user->user_name}}</b> <i class="fa fa-check profile-item-check-icon" aria-hidden="true"></i></div>
            <div class="profile-item-infor">
                <span>Bài đã đăng: <b>{{$user->count_blog}}</b></span>
                <span>Lượt Like: <b>{{count($sumOfLikes)}}</b></span>
                <span>Followers: <b>{{count($followers)}}</b></span>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-4">
            <div class="sidebar-container sticky-top">
                 <h3 class="sidebar-header">Giới thiệu <i class="fa fa-user" aria-hidden="true"></i></h3>
                 <img class="profile-item-avatar" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" style="margin: 0.5rem 0;">
                @auth()
                <button  class="sidebar-follow-btn" onclick="follow({{$user->id}})"><i  class="fa {{$user->checkFollow ? 'fa-check' : 'fa-plus'}} follow-btn-icon" aria-hidden="true"></i>
                    <span class="follow-btn">{{$user->checkFollow ? 'Bỏ theo dõi' : 'Theo dõi'}}</span>
                 </button>
                @endauth
                 <div class="sidebar-item">Tên đầy đủ: <b> {{$user->user_name}}</b></div>
                 <div class="sidebar-item">Nickname: <b> {{$user->user_account}}</b></div>
                 <div class="sidebar-item">Vai trò: <b> Người dùng</b></div>
            </div>
            </div>
            <div class="col-8">
            <div class="content-container ">
                <h3 class="content-header">Bài viết <i class="fa fa-pencil" aria-hidden="true" style="font-size: 20px"></i></h3>
                {{-- demo bài đăng trên timeline --}}
                @foreach($blogs as $blog)
                {{-- <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b>{{$user->user_name}}</b></a>
                            <br><span class="post-author--posting-time">{{$user->created_at}}</span>
                        </div>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px"><a href="/new-post/{{$blog->id}}">{{$blog->blog_heading}}</a></h3>
                                <p style="margin: 0px">{{$blog->blog_content}}</p>
                    </div>
                    <div class="content-post-image--container">
                    <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                         <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> {{$blog->count_like}}</i></span>
                         <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> {{$blog->count_comment}}</i></span>
                    </div>
                </div> --}}
                <div class="blog-box post-container">
                    <div class="blog-meta big-meta" >
                        <h4 class="entry-title text-center" style="position: relative"><a href="/new-post/{{$blog->id}}" title="" >{{$blog->blog_heading}}</a></h4>
                        <div class="text-center" style="padding: 0.5rem 0">
                            <small class="blog-title--content"><a href="single.html" title="">{{$blog->created_at->toDateString()}}</a></small>
                            <small class="blog-title--content"><a href="/user/{{$blog->author_id}}" title="">{{$user->user_name}}</a></small>
                        </div>
                        <div class="post-media">
                            <a href="#" title="">
                                {{-- <img src="{{$blog->blog_display}}" alt=""class="img-fluid"> --}}
                                <img src="{{$blog->blog_display}}" alt=""class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <p style="margin-top: 0.5rem">{{$blog->description}} [...]</p>
                        <div class="content-post-likes-cmt">
                            <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> {{$blog->count_like}}</i></span>
                            <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> {{$blog->count_comment}}</i></span>
                            <span class="blog-likes"><i class="fa fa-eye" aria-hidden="true"> {{$blog->blog_seen_num}}</i></span>
                       </div>
                        <a class="readmore-btn" href="/new-post/{{$blog->id}}">READ MORE</a>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->
                <hr class="invis">
                @endforeach
                {{ $blogs->links('pagination::bootstrap-4') }}
            </div>
        </div>
        </div>
    </div>
    <div class="dmtop">Scroll to Top</div>
    {{-- </div> --}}
    <script>
        function follow(user_id) {
                let f = $('.follow-btn-icon');
                let content = $('.follow-btn')
                axios.post('/web-api/auth/follow/' + user_id).then(function (res) {
                    f.toggleClass("fa-check");
                    f.toggleClass("fa-plus");
                    if ($(".follow-btn-icon").hasClass("fa-plus")) {
                        content.text('Theo dõi');
                    } else {
                        content.text('Bỏ theo dõi');
                    }
                }).catch(function (e) {
                    console.log(e)
                })

        }
    </script>
</section>
@endsection
