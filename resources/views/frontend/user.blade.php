@extends('frontend.layouts.master')

@section('title')
<title>User</title>
@endsection
@section('content')
<section class="section wb">
    {{-- <div class="container"> --}}
    <div class="profile-wrapper">
        <div class="profile-items--container">
            <img class="profile-item-avatar" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
            <div class="profile-item-name"><b>HoanhDZ</b> <i class="fa fa-check profile-item-check-icon" aria-hidden="true"></i></div>
            <div class="profile-item-infor">
                <span>Bài đã đăng: <b>100</b></span>
                <span>Lượt Like: <b>1900</b></span>
                <span>Followers: <b>200</b></span>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="sidebar-container col-lg-4 sticky-top">
                 <h3 class="sidebar-header">Giới thiệu <i class="fa fa-user" aria-hidden="true"></i></h3>
                 <img class="profile-item-avatar" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="" style="margin: 0.5rem 0;">
                 <button  class="sidebar-follow-btn" onclick="follow()"><span id="follow-btn">Follow</span> <i id="follow-btn-icon" class="fa fa-plus" aria-hidden="true"></i></button>
                 <div class="sidebar-item">Tên đầy đủ: <b> Nguyen Hoang Anh</b></div>
                 <div class="sidebar-item">Nickname: <b> HoanhDz</b></div>
                 <div class="sidebar-item">Ngày sinh: <b> 07/10/2001</b></div>
                 <div class="sidebar-item">Vai trò: <b> Người dùng</b></div>
            </div>
            <div class="content-container col-lg-7">
                <h3 class="content-header">Bài viết <i class="fa fa-pencil" aria-hidden="true" style="font-size: 20px"></i></h3>
                {{-- demo bài đăng trên timeline --}}
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b>HoanhDZ</b></a>
                            <br><span class="post-author--posting-time">23 giờ</span>
                        </div>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</h3>
                                <p style="margin: 0px">Đ có kinh nghiệm gì đâu học đi em ê ko hối hận đấy :v</p>
                    </div>
                    <div class="content-post-image--container">
                    <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                         <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> 100</i></span>
                         <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> 17</i></span>
                         <div class="content-like-cmt-bar container-fluid">
                             <div class="row">
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
                {{-- demo bài viết 2 --}}
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b>HoanhDZ</b></a>
                            <br><span class="post-author--posting-time">2 ngày</span>
                        </div>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</h3>
                                <p style="margin: 0px">Đ có kinh nghiệm gì đâu học đi em ê ko hối hận đấy :v</p>
                    </div>
                    <div class="content-post-image--container">
                    <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                         <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> 100</i></span>
                         <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> 17</i></span>
                         <div class="content-like-cmt-bar container-fluid">
                             <div class="row">
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
                {{-- demo bài viết 3 --}}
                <div class="content-post-container">
                    <div class="post-author--wrapper" style="margin: 0.5rem 0.5rem">
                        <img class="post-author" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">
                        <div class="post-author--infor">
                            <a class="post-author--name" href="" style="color: #000000;"><b>HoanhDZ</b></a>
                            <br><span class="post-author--posting-time">2 ngày</span>
                        </div>
                    </div>
                    <div class="content-post-content">
                        <h3 class="content-post-header" style="font-size: 18px; margin: 10px 0px">Làm thế nào để được A+ môn CSDL lớp thầy Phương ?</h3>
                                <p style="margin: 0px">Đ có kinh nghiệm gì đâu học đi em ê ko hối hận đấy :v</p>
                    </div>
                    <div class="content-post-image--container">
                    <img src="upload/Ezreal_20.jpg" alt="" class="content--post-image" style="width:100%;">
                    </div>
                    <div class="content-post-likes-cmt">
                         <span class="blog-likes"><i class="fa fa-heart-o" aria-hidden="true"> 100</i></span>
                         <span class="blog-likes"><i class="fa fa-comment-o" aria-hidden="true"> 17</i></span>
                         <div class="content-like-cmt-bar container-fluid">
                             <div class="row">
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
                {{-- end of bài viết --}}
            </div>
        </div>
    </div>
    <div class="dmtop">Scroll to Top</div>
    {{-- </div> --}}
    <script>
        function follow(){
            let f = document.getElementById('follow-btn-icon');
            let content = document.getElementById('follow-btn')
            if ($("#follow-btn-icon").hasClass("fa-plus")) {
                        f.classList.remove('fa-plus');
                        f.classList.add('fa-check');
                        content.innerHTML = 'Unfollow';
                    } else {
                        f.classList.add('fa-plus');
                        f.classList.remove('fa-check');
                        content.innerHTML = 'Follow';
                    }
        }
    </script>
</section>
@endsection
