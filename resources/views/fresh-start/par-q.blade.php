@extends('layouts.auth')


@section('content')

<div class="gradient header" style="height: 400px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
      </div>
      <div class="col-12 col-lg-8">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div>
    </div>
  </div>
</div>
<div id="signUp-stepper" class="row">
  <div class="col-12">
    <ul class="stepper horizontal w-100 white" id="horizontal" style="margin: 0px!important;">
      <li class="step active">
        <div data-step-label="" class="step-title waves-effect waves-dark">PAR-Q</div>
      </li>
      <li class="step secure">
        <div class="step-title waves-effect waves-dark">Payment</div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Next Steps</div>
      </li>
    </ul>
  </div>
</div>
<div class="spacer"></div>

<div class="row align-items-start justify-content-center">
  <div class="col-12 col-md-6 padding">
      <h3>Please create your login!</h3>
      <form method="POST" action="{{ route('register') }}">
          @csrf

          <div class="row">
              <div class="col-12 col input-field">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required>
                  <label for="name">{{ __('Name') }}</label>
                  @if ($errors->has('name'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-12 col input-field">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  <label for="email">{{ __('E-Mail Address') }}</label>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-12 col input-field">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  <label for="password">{{ __('Password') }}</label>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
          </div>
          <div class="row">
              <div class="col-12 col input-field">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                  <label for="password-confirm">{{ __('Confirm Password') }}</label>
              </div>
          </div>

          <div class="row">
              <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100">
                      {{ __('Register') }}
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>

<div class="spacer"></div>
@endsection
