@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
                <div class="col-sm-14">
            <h2 class="title text-center"><font  style="color: black">Beritaku</font></h2>
            @include('layouts.flash')
            <section class="blog-feed-area padding-top" id="blog">
            <div class="container">
                @foreach($berita as $data)
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-6">
                    <div class="single-blog-item sm-mb30 xs-mb30 wow fadeInUp" data-wow-delay="0.2s">
                        <form method="post" action="{{ route('beritas.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="close" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </form>
                        <div class="blog-thumb">
                            <a href="{{ route('beritas.show',$data->id) }}"><img src="{{ asset('/img/'.$data->gambar.'') }}" alt="" style="width: 450px;height: 250px">
                        </div>
                        <div class="blog-details padding30">
                            <h3 class="blog-title font20 mb30"><a href="blog.html">{{ $data->judul }}</a></h3>
                            <p class="blog-meta font14 mt20"><a href="#"><?php echo date('d F Y' , strtotime($data->created_at));?></a> by {{ $data->User->name }}</a></p>
                            <br>
                            <a class="enroll-button" href="{{ route('beritas.edit',$data->id) }}"><span class="fa fa-pencil"></span></a>
                        </div>
                    </div>
                </div>
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
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</section>
