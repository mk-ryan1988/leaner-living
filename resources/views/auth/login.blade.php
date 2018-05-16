@extends('layouts.auth')

@section('content')

<div class="container-fluid view-height no-padding">
    <div id="login-image" class="row justify-content-center no-gutters align-items-center ">
        <div class="col-12 col-md-6 col-lg-4 no-padding h-100 white valign-wrapper center-align">
          <div class="row">
            <div class="col-12">
              <div class="padding h-100">
                    <h6>Welcome back to</h6>
                    <a href="{{url('/')}}">
                      <img src="{{url('/images/LEANER-LIVING-LOGO.png')}}" alt="LEANER-LIVING-LOGO" class="responsive-img" style="width: 60%;">
                    </a>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12 col input-field">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="email">{{ __('Email') }}</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col input-field">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required>
                                <label for="password">{{ __('Password') }}</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6">
                              <div class="checkbox">
                                  <p>
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span>{{ __('Remember Me') }}</span>
                                    </label>
                                  </p>
                              </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Forgot Your Password?') }}
                              </a>
                            </div>
                        </div> --}}
                    </form>
              </div>
            </div>
            <div class="col-12 align-self-end">
              <a class="leaner-green-text" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>

            </div>
          </div>

        </div>
        <div class="col-12 col-md-6 col-lg-8 padding h-100 valign-wrapper center-align d-none d-md-block" style="display: flex!important;">
             <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="Fresh Start Logo - White" class="responsive-img"
             style="width: 60%;">
        </div>
    </div>
</div>

@endsection
