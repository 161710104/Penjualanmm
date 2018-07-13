<!--COURSE AREA-->
    <section class="course-area padding-top" id="courses">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2 class="xs-font26">Catalog Mobil</h2>
                        <a href="/mobil" class="enroll-button">Lihat Selengkapnya>></a>
                    </div>
                </div>
            </div>
            <div class="row course-list">
                @php
                                $mobil = App\Mobil::paginate(6);
                                @endphp
                                @foreach($mobil as $data)
                                @if($data->status == 0)
                    @else
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-course mb20">
                        <img src="{{ asset('/img/'.$data->gambar.'') }}" alt="" style="width: 450px;height: 250px">
                        <div class="course-details padding30">
                            <h3 class="font18">{{$data->nama}}</h3>
                            <p class="mt30"><a href="/viewdetail/{{$data->id}}" class="enroll-button">View Detail</a> <span class="course-price"><?php echo 'Rp.'. number_format($data->detail_mobil->harga, 0,".","."); ?></span></p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--COURSE AREA END-->    