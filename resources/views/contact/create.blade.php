@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
              <form class="form-horizontal form-label-left" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Alamat</label>
                        <div class="col-md-9 pr-1">
                          <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="" name="alamat">
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
                          <input type="text" name="negara" class="form-control"  required>
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
                          <input type="number" name="no_hp" class="form-control"  required>
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
                          <input type="email" name="email" class="form-control"  required>
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
                          <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="https://www.google.co.id/maps/place/SMK+Assalaam+Bandung/@-6.9659166,107.590724,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e8deccecb6f1:0x658cc60fbe5017b9!8m2!3d-6.9659166!4d107.5929127" name="map">
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
                          <input type="text" name="facebook" class="form-control"  required>
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
                          <input type="text" name="twitter" class="form-control"  required>
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
                          <input type="text" name="instagram" class="form-control"  required>
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
                          <input type="text" name="youtube" class="form-control"  required>
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
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>


</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection