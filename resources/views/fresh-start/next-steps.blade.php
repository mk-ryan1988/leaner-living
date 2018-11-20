@extends('layouts.auth')


@section('content')
<div class="gradient header hide-on-small-only" style="height: 400px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
      </div>
      <div class="col-12 col-lg-8 ">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div>
    </div>
  </div>
</div>
<div class="gradient header hide-on-med-and-up" style="height: 64px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 50px; width: auto;">
      </div>
      {{-- <div class="col-12 col-lg-8 ">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div> --}}
    </div>
  </div>
</div>
<div id="signUp-stepper" class="row">
  <div class="col-12">
    <ul class="stepper horizontal w-100 white" id="horizontal" style="margin: 0px!important;">
      <li class="step done">
        <div data-step-label="" class="step-title waves-effect waves-dark">PAR-Q</div>
      </li>
      <li class="step done">
        <div class="step-title waves-effect waves-dark">Register / Payment</div>
      </li>
      <li class="step active">
        <div class="step-title waves-effect waves-dark">Next Steps</div>
      </li>
    </ul>
  </div>
</div>
{{-- <div class="spacer"></div> --}}
<div class="container">
    <div class="row h-100 align-items-end">
        <div class="col-12 ">
            <div class="video-container" style="margin-top: 16px;">
                <video  width="100%" height="auto" controls>
                    <source src="{{url('/videos/Welcome-to-the-Fresh-Start-compressed.mp4')}}" type="video/mp4">
        
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="spacer"></div>
            <a style="margin-bottom: 16px;" href="https://www.facebook.com/groups/150603038982328/" target="_blank" class="modal-action waves-effect waves-dark btn leaner-green w-100"><span class="hide-on-small-only">Join the fresh start closed</span><span class="hide-on-med-and-up">the</span> Facebook group!</a>
        <a style="margin-bottom: 16px;" href="https://freshstart.leaner-living.com/signUp?uid=c9739d6d774a4da1ae31ed90424bf13d&email={{session('email')}}" target="_blank" class="modal-action waves-effect waves-dark btn leaner-green w-100">Get the App!</a>
    </div>
</div>

@endsection
