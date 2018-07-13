<!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="/assest/img/logo.png" alt="logo"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav pull-right">
                                <li><a href="/">Home</a></li>
                                <li><a href="{{ route('beritas.create') }}" class="btn btn-blue"><image width="29" height="29" src="https://mobil123.icarcdn.com/images/label-free.png" alt="Free" class="absolute"></image>Pasang Berita</a></li>
                                <li><a href="{{ route('mobils.create') }}" class="btn btn-blue"><image width="29" height="29" src="https://mobil123.icarcdn.com/images/label-free.png" alt="Free" class="absolute"></image>Jual Mobil</a></li>
                                <li class="dropdown"><a class="app-nav__item" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg" style="color: white"><font style="color: white"> {{ Auth::user()->name }}</font></i></a>
                                    <ul class="dropdown-menu settings-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="{{ route('mobils.index') }}"><i class="fa fa-car fa-lg"></i> Mobilku</a></li>
                                        <li><a class="dropdown-item" href="{{ route('beritas.index') }}"><i class="fa fa-newspaper-o fa-lg"></i> Beritaku</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-lg"></i> Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>


        <!--WELCOME SLIDER AREA-->
        <div class="welcome-slider-area white font16">
            <div class="welcome-single-slide" style="width: 1400px;height: 400px">
                <div class="slide-bg-one slide-bg-overlay" style="background-image: url('/user2/img/car2.jpg'); width: 1400px;height: 400px "></div>
                <div class="welcome-area">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide" style="width: 1400px;height: 400px">
                <div class="slide-bg-two slide-bg-overlay" style="background-image: url('/user2/img/car2.jpg'); width: 1400px;height: 400px " style="width: 1400px;height: 400px"></div>
                <div class="welcome-area">
                    <div class="container">
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide" style="width: 1400px;height: 400px">
                <div class="slide-bg-three slide-bg-overlay" style="background-image: url('/user2/img/car2.jpg'); width: 1400px;height: 400px "></div>
                <div class="welcome-area">
                    <div class="container">
                    </div>
                </div>
            </div>
        </div>
        <!--WELCOME SLIDER AREA END-->