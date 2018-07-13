@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-newspaper-o"></i> Isi Berita</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-newspaper-o"></i></li>
          <li class="breadcrumb-item">berita</li>
           <li class="breadcrumb-item">show</li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
                      <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Isi Berita</label>
                        <div class="col-md-9 pr-1">
                          <textarea name="isi" class="ckeditor" readonly="">
                            {{$beritas->isi}}
                          @if ($errors->has('isi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
                        </textarea>
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