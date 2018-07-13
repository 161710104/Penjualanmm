@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
<div class="container">
                <div class="col-sm-14">
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
    </section>
      @endsection