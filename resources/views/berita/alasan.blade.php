<div class="modal fade" id="MediumModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Beri Alasan</h4>
              </div>
            <div class="modal-body">
                
        <form class="login-form" method="POST" action="{{ route('beritas.alasan') }}">
                        {{ csrf_field() }}


            <div class="form-group{{ $errors->has('alasan') ? ' has-error' : '' }}">
            <label class="control-label">Alasan</label>
            <input class="form-control" type="text" placeholder="Kasih Alasan..." name="alasan" required autofocus>

                                @if ($errors->has('alasan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alasan') }}</strong>
                                    </span>
                                @endif

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
@include('frontend.auth.register')
