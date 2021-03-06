@extends('layouts.auth')


@section('content')
<div class="gradient header hide-on-small-only" style="height: 400px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
      </div>
      <div class="col-12 col-lg-8 hide-on-small-only">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div>
    </div>
  </div>
</div>
<div class="gradient header hide-on-med-and-up" style="height: 160px;">
  <div class="container h-100">
    <div class="row h-100 align-items-start">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 64px; width: auto; margin-top: 16px;">
      </div>
      <div class="col-12 col-lg-8 ">
        <h4 class="white-text flow-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
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
      <li class="step">
        <div class="step-title waves-effect waves-dark">Payment</div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Questionnaire</div>
      </li>
    </ul>
  </div>
</div>

<parq-form></parq-form>

@endsection

@section('scripts')
@endsection
