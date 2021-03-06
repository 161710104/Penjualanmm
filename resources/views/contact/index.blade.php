@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Info Contact</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">contact</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
              @foreach($a as $data)
                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>
                        <div class="col-md-9 pr-1">
                          <textarea class="form-control" rows="3" placeholder="" name="alamat" readonly="">
                            {{$data->alamat}}
                          @if ($errors->has('alamat'))
                            <span class="help-block">
                              <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                      </textarea>
                        </div>
                      </div>



                <div class="form-group {{ $errors->has('negara') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Negara</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="negara" class="form-control" value="{{$data->negara}}"  readonly="">
                          @if ($errors->has('negara'))
                            <span class="help-block">
                              <strong>{{ $errors->first('negara') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">No Hp</label>
                        <div class="col-md-9 pr-1">
                          <input type="number" name="no_hp" class="form-control" value="{{$data->no_hp}}" readonly="">
                          @if ($errors->has('no_hp'))
                            <span class="help-block">
                              <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                        <div class="col-md-9 pr-1">
                          <input type="email" name="email" class="form-control" value="{{$data->email}}" readonly="">
                          @if ($errors->has('email'))
                            <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('map') ? ' has-error' : '' }}">
                         <label class="control-label col-md-3 col-sm-3 col-xs-3">Link Map</label>
                        <div class="col-md-9 pr-1">
                          <textarea class="form-control" rows="3" name="map" readonly="">
                            {{$data->map}}
                            @if ($errors->has('map'))
                            <span class="help-block">
                              <strong>{{ $errors->first('map') }}</strong>
                            </span>
                        @endif
                      </textarea>
                        </div>
                      </div>

              
                  </div>

                    <div class="col-lg-4 offset-lg-1">
                    <div class="form-group {{ $errors->has('facebook') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Facebook</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="facebook" class="form-control"  value="facebook" readonly="">
                          @if ($errors->has('facebook'))
                            <span class="help-block">
                              <strong>{{ $errors->first('facebook') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('twitter') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Twitter</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="twitter" class="form-control" value="{{$data->twitter}}"  readonly="">
                          @if ($errors->has('twitter'))
                            <span class="help-block">
                              <strong>{{ $errors->first('twitter') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('instagram') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Instagram</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="instagram" class="form-control" value="{{$data->instagram}}" readonly="">
                          @if ($errors->has('instagram'))
                            <span class="help-block">
                              <strong>{{ $errors->first('instagram') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('youtube') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Youtube</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="youtube" class="form-control" value="{{$data->youtube}}" readonly="">
                          @if ($errors->has('youtube'))
                            <span class="help-block">
                              <strong>{{ $errors->first('youtube') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                    </div>
                      <div class="tile-footer">
                        &nbsp&nbsp&nbsp&nbsp
              <a class="btn btn-warning" href="{{ route('contact.edit',$data->id) }}"><i class="fa fa-lg fa-edit"></i></a>
            </div>


@endforeach
</div>
</div>
</div>
</div>
</div>
</main>
@endsection
