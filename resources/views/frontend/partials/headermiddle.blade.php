<nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#services">Berita</a></li>
                    <li><a href="#team">Contact</a></li>
                    <li><a href="#pricing">About</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#MediumModal" class="btn btn-blue"><image width="29" height="29" src="https://mobil123.icarcdn.com/images/label-free.png" alt="Free" class="absolute"></image>Jual Mobil</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
</nav>


<!------------------------------------------------------Masuk/Register---------------------------------------------------------------->

@include('frontend.auth.register')


<!-- -----------------------------------------------------------Login----------------------------------------------------------------->

@include('frontend.auth.login')

    