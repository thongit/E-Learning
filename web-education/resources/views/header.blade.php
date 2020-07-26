
<!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

            <!-- Start Top Search -->
            <div class="container">
                <div class="row">
                    <div class="top-search">
                        <div class="input-group">
                            <form action="{{ route('trang-chu.xu-ly-tim-kiem') }}" method="GET">
                                @csrf
                                <input type="text" name="key_word_tenkh" class="form-control" placeholder="Search">
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="ti-search"></i></a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('trang-chu.index')}}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                        <li>
                            <a href="/gioi-thieu">Giới thiệu</a>
                        </li>
                        <li>
                            <a href="{{ route('trang-chu.khoa-hoc') }}">Khóa học</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Lĩnh vực</a>
                            <ul class="dropdown-menu">
                                @foreach($linhvucs as $linhVuc)
                                    <li><a href="/linh-vuc/{{$linhVuc->id}}">{{ $linhVuc->ten_linh_vuc }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="/giang-vien">Giảng viên</a>
                        </li>
                        <li>
                            <a href="/lien-he">Liên hệ</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

