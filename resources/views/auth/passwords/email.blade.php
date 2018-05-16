@extends('layouts.auth')

@section('content')
<div class="view-height">
    <div class="row justify-content-center align-items-center h-100 no-gutters">
        <div class="col-md-8">
           <div class="card-panel leaner-green center-align">
             <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="Fresh Start Logo" class="responsive-img" style="max-height: 300px;">
           </div>
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                       @csrf
                       <div class="row justify-content-center ">
                            <div class="col-12 col-md-6 col input-field">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="email">{{ __('Enter Email here') }}</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-6">
                                <button type="submit" class="w-100 btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
