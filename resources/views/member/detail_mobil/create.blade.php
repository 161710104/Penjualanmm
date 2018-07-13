@extends('member.master')
@section('content')
@include('member.partials.nav')
<section class="features-top-area" id="features">
<div class="container">
            <div class="row promo-content">
<div class="container">
                <div class="col-sm-12">
               <h3>Detail Mobil</h3>
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
              <form class="form-horizontal form-label-left" action="{{ route('detail_mobil.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}


              
              <div class="form-group {{ $errors->has('mobil_id') ? 'has error' : '' }}">
            <div class="form-group {{ $errors->has('mobil_id') ? 'has error' : '' }}">
              <input type="hidden" name="mobil_id" value="{{ $mobil->id }}">
              <!-- </select> -->
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
                          <input type="color" name="warna" class="form-control"  required>
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
                          <input type="text" name="transmisi" class="form-control"  required>
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
                          <input type="text" name="varian" class="form-control"  required>
                          @if ($errors->has('varian'))
                            <span class="help-block">
                              <strong>{{ $errors->first('varian') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga</label>
                        <div class="col-md-9 pr-1">
                          <input type="number" name="harga" class="form-control"  required>
                          @if ($errors->has('harga'))
                            <span class="help-block">
                              <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
              
                  </div>



                      



                    <div class="col-lg-4 offset-lg-1">
                    <div class="form-group {{ $errors->has('cakupan_mesin') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Cakupan Mesin</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="cakupan_mesin" class="form-control"  required>
                          @if ($errors->has('cakupan_mesin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('cakupan_mesin') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 offset-lg-1">
                    <div class="form-group {{ $errors->has('penumpang') ? ' has-error' : '' }}">
                      <br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Penumpang </label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="penumpang" class="form-control"  required>
                          @if ($errors->has('penumpang'))
                            <span class="help-block">
                              <strong>{{ $errors->first('penumpang') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                    </div>


                    <div class="col-lg-4 offset-lg-1">
                      <div class="form-group {{ $errors->has('kilometer') ? ' has-error' : '' }}">
                        <br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Kilometer</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="kilometer" class="form-control"  required>
                          @if ($errors->has('kilometer'))
                            <span class="help-block">
                              <strong>{{ $errors->first('kilometer') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 offset-lg-1">
              <div class="form-group {{ $errors->has('tahun_keluar') ? ' has-error' : '' }}">
                <br>
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Tahun Keluar</label>
                        <div class="col-md-9 pr-1">
                          <input type="month" name="tahun_keluar" class="form-control"  required>
                          @if ($errors->has('tahun_keluar'))
                            <span class="help-block">
                              <strong>{{ $errors->first('tahun_keluar') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>
                    </div>

                  <div class="col-lg-12">
                    <div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
                      <br>
                      <br>
                         <label class="control-label col-md-3 col-sm-3 col-xs-3">Deskripsi</label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <textarea name="deskripsi" class="ckeditor" required="">
                            @if ($errors->has('deskripsi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
                      </textarea>
                        </div>
                      </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <div class="col-lg-12">
                        &nbsp&nbsp&nbsp&nbsp
              <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>


</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection