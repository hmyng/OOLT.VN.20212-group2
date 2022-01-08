<div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-12">
                        {{-- <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                        </div> --}}
                        <!-- end social -->
                        <ul class="list-inline nav ">
                            <li class="list-inline-item"><a href="/home">HOME</a></li>
                            <li class="list-inline-item nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" style="display: inline; padding: 0px">CATEGORIES</a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Chia sẻ kinh nghiệm học</a>
                                      <a class="dropdown-item" href="#">Chia sẻ tài liệu</a>
                                      <a class="dropdown-item" href="#">Tiếng Nhật</a>
                                      <a class="dropdown-item" href="#">Kiến thức IT</a>
                                    </div>
                            </li>
                            <li class="list-inline-item hide-res"><a href="/trend"> TRENDS</a></li>
                            <li class="list-inline-item hide-res"><a href="/home#about-us"> ABOUT US</a></li>
                            {{-- nếu chưa login --}}
                            <li class="list-inline-item"><a href="trang-login"><i class="fa fa-user-circle-o"></i> LOGIN</a></li>
                            {{-- nếu đã login thành công --}}
                            <li class="list-inline-item nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="padding: 0px" data-toggle="dropdown" href="/user"><img class="topbar-login-avatar" src="{{asset('cloapedia/images/gau-icon.png')}}" alt="">HoanhDZ</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Trang cá nhân</a>
                                    <a class="dropdown-item" href="/user-post">Đăng bài</a>
                                    <a class="dropdown-item" href="#">Đăng xuất</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-2 col-md-2 ">
                        <div class="topsearch text-right list-inline-item" style="position: absolute; right: 0px">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> SEARCH</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->
