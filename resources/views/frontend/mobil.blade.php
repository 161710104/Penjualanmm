@extends('frontend.master')
@section('content')
@include('frontend.partials.headertop')
@include('frontend.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
                <div class="col-sm-14">
<div class="container">
<div class="col-sm-8 padding-right">
            @php
                        $mobil = App\Mobil::paginate(9);
                        @endphp
                
               
            <h2 class="title text-center"><font  style="color: black">Daftar Mobil</font></h2>
             @foreach($filter as $data)
              @if($data->status == 0)
                    @else
            <div class="row">
            <div class="col-md-7">
            <img src="{{asset('/img/'.$data->gambar.'')}}" class="img-fluid rounded mb-3 mb-md-0" width="400" height="250">
            </a>
            </div>
           <div class="col-md-5">
          <h3>{{$data->nama}}</h3>
          <p><?php echo 'Rp.'. number_format($data->detail_mobil->harga, 0,".",".");?></p>
          <img src="{{asset('/img/'.$data->merk->gambar.'')}} " width="30" height="30">{{$data->merk->nama}} | 
          <i class="fa fa-car"> {{$data->model}}</i>
          <br>
          <br>
           <a href="/viewdetail/{{$data->id}}" class="btn btn-blue-fill expand">View detail</a>
        </div>
      </div>
      <hr>
      @endif
      @endforeach
      
      </div>

      <div class="col-sm-3">
  @include('frontend.partials.merk')
    
       
    @include('frontend.berita.partials') 
  </div>
</div>
</div>
</div>
</div>
</section>
@endsection