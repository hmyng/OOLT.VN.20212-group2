@extends('frontend.layouts.master')

@section('title')
<title>About Us</title>
@endsection
@section('content')
<section class="section wb" >
    <div class="container">
        <div class="section-title">
            <h3 class="color-aqua" ><a href="/about-us"
                                      title="">ABOUT US</a></h3>
        </div><!-- end title -->
        <div class="row">
           <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""
                     class="about-us--avatar">
                <span class="about-us--item"><b>Nguyễn Hoàng Anh - 20194474</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Cảm nhận .....</span>
            </div>
           </div>
           <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/hoakhanh.png')}}" alt=""
                     class="about-us--avatar">
                <span class="about-us--item"><b>Lê Thị Khánh Hòa - 20194565</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Cảm nhận .....</span>
            </div>
           </div>
           <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/TrangNgan.jpg')}}" alt=""
                     class="about-us--avatar">
                <span class="about-us--item"><b>Phan Thị Trang Ngân - 20194474</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 03 - K64</span>
                <span class="about-us--item">Cảm nhận .....</span>
            </div>
           </div>
           <div class="col-xl-6 col-md-6 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="about-us--avatar">
                <span class="about-us--item"><b>Uông Hồng Minh - 20194474</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Cảm nhận .....</span>
            </div>
           </div> 
             
        </div><!-- end row -->
        <div class="dmtop">Scroll to Top</div>
        <div class="section-title">
            <h3 class="color-aqua"><a href="/about-us"
                                      title="">ABOUT THE BLOG</a></h3>
        </div><!-- end title -->
        <div class="about-the-blog--wrapper">
            <p>Tuy đã dùng các phương tiện truyền thông như mạng xã hội được một thời gian, nhưng mình chưa bao giờ dùng blog. Cho đến một ngày đầu tháng 07, khi mình cảm thấy muốn viết về cuộc sống hàng ngày, mình quyết định tạo blog ở trên wordpress, đặt là chamomilehanoi.wordpress.com, rồi bây giờ là thehanoichamomile.com.

Blog này bao gồm nhiều bài viết với những chủ đề khác nhau như cuộc sống hàng ngày, chuyện du học, học ngoại ngữ, những bài viết liên quan đến lối sống tối giản (minimalism), nấu ăn hay đọc sách. Nói chung là cái gì mình cũng viết. Mình muốn được viết và được chia sẻ với mọi người về những gì mình đã và đang trải nghiệm, với mong muốn truyền một chút cảm hứng cho những ai tìm đọc blog của mình.</p>
        </div>
    </div>

</section>
@endsection