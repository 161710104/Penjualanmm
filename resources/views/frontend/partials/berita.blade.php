   <!--BLOG AREA-->
    <section class="blog-feed-area padding-top" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Berita Otomotif</h2>
                        <a href="/mobil" class="enroll-button">Lihat berita lainnya>></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @php
                        $berita = App\Berita::paginate(3);
                        @endphp
                    @foreach($berita as $data)
                    @if($data->status == 0)
                    @else
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="/berita/{{$data->id}}"><img src="{{ asset('/img/'.$data->gambar.'') }}" alt="" style="width: 450px;height: 250px">
                        </div>
                        <div class="blog-details padding30">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">{{ $data->judul }}</a></h3>
                            <p class="blog-meta font14 mt20"><a href="#"><?php echo date('d F Y' , strtotime($data->created_at));?></a> by {{ $data->User->name }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->