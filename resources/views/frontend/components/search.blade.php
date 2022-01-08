<div class="collapse top-search" id="collapseExample">
    <div class="card card-block">
        <div class="newsletter-widget text-center">
            <form id="mySearch" class="form-inline" type="get" action="{{route('search')}}">
                @csrf 
                @method('POST')
                <input type="text" class="form-control" placeholder="Tìm kiếm theo danh mục...">
                <button onclick="document.getElementById('mySearch')" type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </form>
            {{csrf_field()}}
        </div><!-- end newsletter -->
    </div>
</div><!-- end top-search -->

