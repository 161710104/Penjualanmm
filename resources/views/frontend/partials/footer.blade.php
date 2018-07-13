<!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg relative">
        <div class="footer-top-area padding-80-80 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="single-footer footer-about sm-mb50 xs-mb50 sm-center xs-center">
                            <div class="footer-logo mb30">
                                <a href="#"><img src="/assest/img/logo.png" alt=""></a>
                            </div>
                            <p>Saudi Arabia has been accused of using anti-terror laws to suppress free expression and failing to carry out independent inquiries into its Yemen.</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <div class="single-footer footer-list white xs-center xs-mb50">
                            <ul>
                                <li><a href="/about">About</a></li>
                                <li><a href="/berita">Berita</a></li>
                                <li><a href="/contact">Contact</a></li>
                                <li><a href="/mobil">Mobil</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-8 col-xs-12">
                        <div class="single-footer footer-subscribe white xs-center">
                            <h3 class="mb30 xs-font18">Cars-Dream</h3>
                            <p><div style="font-family: NEISTIL;">
                            <div class="dmy agileits w3layouts">
                            <div id="txt" style="font-family: NEISTIL;">
                            </div>
                            
                            <script type="text/javascript">
                            var mydate=new Date()
                            var year=mydate.getYear()
                            if(year<1000)
                            year+=1900
                            var day=mydate.getDay()
                            var month=mydate.getMonth()
                            var daym=mydate.getDate()
                            if(daym<10)
                            daym="0"+daym
                            var dayarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu")
                            var montharray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")
                            document.write(""+dayarray[day]+", "+daym+" "+montharray[month]+"  "+year+"")
                            </script>
                            </div>
                            </div></p>
                            <div class="subscriber-form-area mt50 wow fadeIn">
                                <!--<form action="#" class="subscriber-form mb100">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                    <button type="submit">Subscribe</button>
                                </form>-->
                                @php
                        $contact = App\Contact::paginate(1);
                        @endphp
                

                        @foreach($contact as $data)
                                    <h2><a href="https://www.facebook.com/{{$data->facebook}}"><i class="fa fa-facebook" style="color: white"></i></a>
                                    <a href="https://twitter.com/{{$data->twitter}}"><i class="fa fa-twitter" style="color: white"></i></a>
                                    <a href="https://instagram.com/{{$data->instagram}}"><i class="fa fa-instagram" style="color: white"></i></a>
                                    <a href="https://youtube.com/{{$data->youtube}}"><i class="fa fa-youtube" style="color: white"></i></a></h2>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->
