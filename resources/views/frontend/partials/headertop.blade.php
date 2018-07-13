<div class="header_top" style="background-color: white"><!--header_top-->
            <div class="container">
                <div class="row">
                    @php
                        $contact = App\Contact::paginate(1);
                        @endphp
                

                    @foreach($contact as $data)

                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone" style="color: black"></i><font style="color: black"> +62 {{$data->no_hp}}</font></a></li>
                                <li><a href="https://gmail.com/{{$data->email}}"><i class="fa fa-envelope"  style="color: black"></i><font style="color: black"> {{$data->email}}</font></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="https://www.facebook.com/{{$data->facebook}}"><i class="fa fa-facebook" style="color: black"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/{{$data->twitter}}"><i class="fa fa-twitter" style="color: black"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/{{$data->instagram}}"><i class="fa fa-instagram" style="color: black"></i></a>
                                </li>
                                <li>
                                    <a href="https://youtube.com/{{$data->youtube}}"><i class="fa fa-youtube" style="color: black"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div><!--/header_top-->

        

<!------------------------------------------------------Masuk/Register---------------------------------------------------------------->

@include('frontend.auth.register')


<!-- -----------------------------------------------------------Login----------------------------------------------------------------->

@include('frontend.auth.login')

        