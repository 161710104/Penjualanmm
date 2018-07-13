@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i>&nbspInput Data Mobil</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-car fa-lg"></i></li>
          <li class="breadcrumb-item">Mobil</li>
          <li class="breadcrumb-item">Create</li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <div class="row">
              <div class="col-lg-6">
              <form class="form-horizontal form-label-left" action="{{ route('mobils.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                <h5>&nbsp&nbsp&nbspCatalog Mobil</h5>
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Gambar</label>
                          <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="file" name="gambar" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('gambar'))
                              <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>


              <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Mobil</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="nama" class="form-control"  required>
                          @if ($errors->has('nama'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Daftar Merk</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="merk_id" class="form-control">
                          @foreach($merk as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                           @endforeach
                        </select>
                          @if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('model') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama model</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="model" class="form-control"  required>
                          @if ($errors->has('model'))
                            <span class="help-block">
                              <strong>{{ $errors->first('model') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 offset-lg-1">
                    <h5>&nbsp&nbsp&nbspInformasi Penjual</h5>
                    <div class="form-group {{ $errors->has('lokasi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Lokasi</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="lokasi" class="form-control"  required>
                          @if ($errors->has('lokasi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('lokasi') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                      

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


                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">No Telepon</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="no_hp" class="form-control"  required>
                          @if ($errors->has('no_hp'))
                            <span class="help-block">
                              <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
              
                    </div>

                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                    <div class="col-lg-6">
                   <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                      </div>
                  </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      @endsection