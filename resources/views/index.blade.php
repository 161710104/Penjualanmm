@extends('layouts.layout')
@section('content')
<main class="app-content">
        <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      @php
      $users = App\User::all();
      @endphp
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
<div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
        <a href="{{ route('user.index') }}"><div class="info">
              <h4 style="color: black">Users</h4>
              <p style="color: black"><b>{{$users->count()}}</b></p>
            </div></a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        @php
      $terjuals = App\Mobil::all();
      @endphp
      @foreach($terjuals as $data)
      @if($data->statuss == 0)
                        @else
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Terjual</h4>
              <p><b>{{$data->count()}}</b></p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
                
        
</div>
</div>
</div>
</div>
</div>
</main>
@endsection
