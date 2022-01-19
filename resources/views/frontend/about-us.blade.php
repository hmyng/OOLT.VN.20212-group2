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
           <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/Hoanh.jpg')}}" alt=""
                     class="about-us--avatar">
            <div class="about-us--item-wrapper">
                <span class="about-us--item"><b>Nguyễn Hoàng Anh - 20194474</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Mặc dù đây là dự án đầu tiên mình tham gia sau khi mới biết được 1 chút ít về HTML, CSS và JS, nhưng sau cả 1 quá trình dài vừa tự học vừa tham gia, mình đã cải thiện rất nhiều kĩ năng của bản thân và học được cho mình nhiều bài học quý giá. Tuy chưa hoàn hảo nhưng mình tự hào vì đã cùng những người đồng đội tuyệt vời góp công làm nên trang blog này. Sẽ nhớ mãi những buổi fx bug, merge code lỗi đến tramkam, những lúc tưởng như sắp phá đi xây lại lần nữa, để có thể có được thành quả hôm nay, A+ CSDL go brr</span>
            </div>
            </div>
           </div>
           <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/hoakhanh.png')}}" alt=""
                     class="about-us--avatar">
            <div class="about-us--item-wrapper">
                <span class="about-us--item"><b>Lê Thị Khánh Hòa - 20194565</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Do tình hình dịch bệnh phức tạp nên việc việc học tập rất khó khăn, nhờ sự tâm huyết và nhiệt tình của thầy Phương, cùng nỗ lực của mọi người trong nhóm mà nhóm đã đạt được kết quả như ngày hôm nay. Em cảm ơn thầy Phương đã đồng hành cùng chúng em. Mỗi bài giảng của thầy đều vô cùng dễ hiểu, giúp kiến thức của em được cải thiện đáng kể. Qua mỗi lần cùng nhau ngồi sửa code, ngồi thảo luận đến sáng mà chúng mình thêm yêu và thêm trân quý kết quả có được như hôm nay. Cảm ơn các bạn nhiều, iu iu A++++ CSDL</span>
            </div>
            </div>
           </div>
           <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/TrangNgan.jpg')}}" alt=""
                     class="about-us--avatar">
            <div class="about-us--item-wrapper">
                <span class="about-us--item"><b>Phan Thị Trang Ngân - 20194634</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 03 - K64</span>
                <span class="about-us--item">Kết thúc 16 tuần học môn cơ sở dữ liệu cùng thầy Nguyễn Hồng Phương, mình cảm thấy như đã "trưởng thành" hơn một chút. Từ một đứa ghét code kinh khủng và chỉ thích làm việc một mình, bây giờ mình đã yêu thích những buổi họp nhóm và fix bug cùng nhau đến 12h đêm. Cảm ơn những buổi fix bug + lấy gốc của các bạn cùng nhóm. Cảm ơn thầy Phương vì thời gian qua đã truyền đạt cho chúng em rất nhiều kiến thức bổ ích. Cuối cùng, chúc cho nhóm mình đạt A+ môn thực hành Cơ sở dữ liệu!</span>
            </div>
            </div>
           </div>
           <div class="col-xl-12 col-md-12 col-sm-12">
            <div class="about-us--wrapper">
                <img src="{{asset('cloapedia/images/UHM.png')}}" alt="" class="about-us--avatar">
            <div class="about-us--item-wrapper">
                <span class="about-us--item"><b>Uông Hồng Minh - 20194625</b></span>
                <span class="about-us--item">Sinh viên năm 3 lớp Việt Nhật 04 - K64</span>
                <span class="about-us--item">Tại khoảnh khắc ấn merge chiếc pull request cuối cùng, tay mình run run, mắt mình rưng rưng, không thể ngờ là chúng mình có thể hoàn thành được project này. Chưa từng có môn học nào khiến mình cảm động đến thế này. Cảm ơn thầy Phương đã truyền cảm hứng, tạo cho em niềm đam mê với cơ sở dữ liệu, cảm ơn các teammates đã cùng mình call fix bug không quản ngày đêm mưa gió bão bùng, cảm ơn các bạn đã ghé blog và donate vào tài khoản 09689422978 TP Bank hoặc 0968942297 Viettelpay  ❤</span>
            </div>
            </div>
           </div> 
             
        </div><!-- end row -->
        <div class="dmtop">Scroll to Top</div>
        <div class="section-title">
            <h3 class="color-aqua"><a href="/about-us"
                                      title="">ABOUT THE BLOG</a></h3>
        </div><!-- end title -->
        <div class="about-the-blog--wrapper">
            <p>Sau chuỗi ngày cạn kiệt ý tưởng, tramkam vì bug đến nỗi phải đập đi xây lại vài lần, chúng tớ cũng đã hoàn thành được trang blog này. KUMA GUMA được ra đời với mong muốn tạo nên một nơi chia sẻ kinh nghiệm, giao lưu học hỏi và cung cấp nhiều thông tin bổ ích chỉ dành riêng cho sinh viên HEDSPI chúng mình. Trong tương lai, trang blog sẽ ngày càng được cải thiện và mở rộng hơn nữa, để có thể mang đến một môi trường giao lưu tốt nhất dành cho các thế hệ HEDSPIERS</p>
        </div>
    </div>

</section>
@endsection