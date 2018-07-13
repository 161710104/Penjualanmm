
@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i> Input Data Berita</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-newspaper-o"></i></li>
          <li class="breadcrumb-item">berita</li>
           <li class="breadcrumb-item">create</li>
        </ul>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal form-label-left" action="{{ route('beritas.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Gambar</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="gambar" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('gambar'))
                              <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>


              <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Judul Berita</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="judul" class="form-control"  required>
                          @if ($errors->has('judul'))
                            <span class="help-block">
                              <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Isi Berita</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="isi" class="ckeditor" required="">
                          @if ($errors->has('isi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>

                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                      {{-- <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Keterengan : </label>
                                Publish <input name="publish" type="radio" value="1" required>
                                Jangan Publish <input name="publish" type="radio" value="0" required>
                            </div> --}}
                            
              

                   <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
        </div>
      </div>
      @endsection