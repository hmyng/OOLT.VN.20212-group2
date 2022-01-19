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
            <p>KUMA GUMA “Đôi bạn cùng tiến” - BLOG SỐ 1 ĐỒNG HÀNH CÙNG SINH VIÊN VIỆT NAM
                Được học hỏi với các bạn, anh chị đi trước để hoàn thiện bản thân mỗi ngày tốt hơn là mục tiêu và mong ước của mỗi sinh viên. Với mong muốn truyền cảm hứng cho các bạn trẻ, nơi giải đáp những khó khăn, tạo nguồn năng lượng tích cực, chúng mình quyết định tạo nên KUMA GUMA.
                Blog này bao gồm nhiều bài viết với những chủ đề khác nhau như cuộc sống hàng ngày, học tiếng nhật, chia sẻ kinh nghiệm, những bài viết liên quan đến kiến thức IT hay tài liệu học tập. Mong mọi người hãy viết và chia sẻ với nhau về những gì mình đã và đang trải nghiệm trong cuộc sống sinh viên.</p>
        </div>
    </div>

</section>
@endsection