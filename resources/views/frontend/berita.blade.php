@extends('frontend.master')
@section('content')
@include('frontend.partials.headertop')
@include('frontend.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
                <div class="col-sm-14">
            <h2 class="title text-center"><font  style="color: black">Daftar Berita</font></h2>
            <section class="blog-feed-area padding-top" id="blog">
            <div class="container">
                @php
                        $berita = App\Berita::paginate(6);
                        @endphp
                    @foreach($berita as $data)
                    @if($data->status == 0)
                    @else
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-thumb">
                            <a href="/berita/{{$data->id}}"><img src="{{ asset('/img/'.$data->gambar.'') }}" alt="" style="width: 450px;height: 250px">
                        </div>
                        <div class="blog-details padding30">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">{{ $data->judul }}</a></h3>
                            <p class="blog-meta font14 mt20"><a href="#"><?php echo date('d F Y' , strtotime($data->created_at));?></a> by {{ $data->User->name }}</a></p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <br>
                <br>
            </div>  
            <br>
            <br>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection




   <!--BLOG AREA-->
    <!--BLOG AREA END-->