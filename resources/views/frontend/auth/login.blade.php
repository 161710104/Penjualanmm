<div class="modal fade" id="MediumModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: white">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Masuk</h4>
              </div>
            <div class="modal-body">
                
        <form class="login-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="control-label">Email</label>
            <input id="email" class="form-control" type="text" placeholder="Email" value="{{ old('email') }}" name="email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

          </div>


          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label">PASSWORD</label>
            <input id="password" class="form-control" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

          </div>


          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                  <p class="semibold-text mb-2"><a data-toggle="modal" data-target="#largeModal">Tidak Punya Akun? Daftar</a>
              </div>
              <p class="semibold-text mb-2"><a href="{{ route('password.request') }}" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" style="background-color: black"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
            </div>
        </div>
    </div>
</div>
@include('frontend.auth.register')
