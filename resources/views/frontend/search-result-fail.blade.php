@extends('frontend.layouts.master')

@section('title')
<title>Result</title>
@endsection
@section('content')
<section class="section wb" >
    <div class="container" style="display: flex; flex-direction:column">
        <div class="search-result-header"><b>Kết quả tìm kiếm cho: "bla bla bla" : </b></div><br>
         <img class="error-img" src="{{asset('cloapedia/images/gautucgian.jpg')}}" alt="">
         <div style="align-self: center; font-size: 1.5rem"><b>Không tìm thấy từ khóa bạn cần tìm !</b></div>
    </div>
    <div class="dmtop">Scroll to Top</div>
</section>
@endsection
