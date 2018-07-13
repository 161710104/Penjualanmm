@extends('member.master')
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
            <div class="tile-body">
              <form class="form-horizontal form-label-left" action="{{ route('detail_mobil.update',$a->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}


              <div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Mobil</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="mobil_id" class="form-control">
                          @foreach($b as $data)
                        <option value="{{ $data->id }}" {{ $selectedMO == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
                        @endforeach
                        </select>
                          @if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>



                  <div class="form-group {{ $errors->has('warna') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Warna</label>
                        <div class="col-md-9 pr-1">
                          <input type="color" name="warna" class="form-control" value="{{$a->warna}}" required>
                          @if ($errors->has('warna'))
                            <span class="help-block">
                              <strong>{{ $errors->first('warna') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>



                <div class="form-group {{ $errors->has('transmisi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Transmisi</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="transmisi" class="form-control" value="{{$a->transmisi}}"  required>
                          @if ($errors->has('transmisi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('transmisi') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('varian') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Varian</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="varian" class="form-control" value="{{$a->varian}}"  required>
                          @if ($errors->has('varian'))
                            <span class="help-block">
                              <strong>{{ $errors->first('varian') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


<div class="form-group {{ $errors->has('cakupan_mesin') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cakupan Mesin</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="cakupan_mesin" class="form-control" value="{{$a->cakupan_mesin}}" required>
                          @if ($errors->has('cakupan_mesin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('cakupan_mesin') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


<div class="form-group {{ $errors->has('penumpang') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Penumpang</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="penumpang" class="form-control" value="{{$a->penumpang}}"  required>
                          @if ($errors->has('penumpang'))
                            <span class="help-block">
                              <strong>{{ $errors->first('penumpang') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('kilometer') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kilometer</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="kilometer" class="form-control" value="{{$a->kilometer}}" required>
                          @if ($errors->has('kilometer'))
                            <span class="help-block">
                              <strong>{{ $errors->first('kilometer') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


              <div class="form-group {{ $errors->has('tahun_keluar') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tahun Keluar</label>
                        <div class="col-md-9 pr-1">
                          <input type="month" name="tahun_keluar" class="form-control" value="{{$a->tahun_keluar}}"  required>
                          @if ($errors->has('tahun_keluar'))
                            <span class="help-block">
                              <strong>{{ $errors->first('tahun_keluar') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>



              <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga</label>
                        <div class="col-md-9 pr-1">
                          <input type="number" name="harga" class="form-control" value="{{$a->harga}}"  required>
                          @if ($errors->has('harga'))
                            <span class="help-block">
                              <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>




                      <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="ckeditor" name="deskripsi" required="">
                          {{$a->deskripsi}}
                          @if ($errors->has('deskripsi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>



</form>
</div>
</div>
</div>
</div>
</div>
</main>
@endsection