@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pencil"></i> Edit Data Berita</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-newspaper-o"></i></li>
          <li class="breadcrumb-item">berita</li>
           <li class="breadcrumb-item">edit</li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal form-label-left" action="{{ route('beritas.update',$beritas->id) }}" method="post" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
              {{ csrf_field() }}

              <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Judul Berita</label>
                          <div class="col-md-9 pr-1">
                            @if (isset($beritas) && $beritas->gambar)
                                    <p>
                                        <br>
                                    <img src="{{ asset('/img/'.$beritas->gambar) }}" style="width:250px; height:250px;" alt="">
                                    </p>
                                @endif
                                <input name="gambar" type="file" value="{{ $beritas->gambar }}">
                            </div>
                          </div>
                            

              <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Judul Berita</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="judul" class="form-control" value="{{$beritas->judul}}" required>
                          @if ($errors->has('judul'))
                            <span class="help-block">
                              <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Isi Berita</label>
                        <div class="col-md-9 pr-1">
                          <textarea name="isi" class="ckeditor" required="">
                            {{$beritas->isi}}
                          @if ($errors->has('isi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>


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
</div>
</div>
</main>

@endsection