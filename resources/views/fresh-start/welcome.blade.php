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
<div class="gradient header hide-on-med-and-up" style="height: 160px;">
  <div class="container h-100">
    <div class="row h-100 align-items-start">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 50px; width: auto; margin-top: 16px;">
      </div>
      {{-- <div class="col-12 col-lg-8 ">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div> --}}
    </div>
  </div>
</div>
{{-- <div class="spacer"></div> --}}
<div class="container" style="margin-top: -100px;">
    <div class="row h-100 align-items-end">
        <div class="col-12 ">
            <div class="video-container" style="margin-top: 16px;">
                <video  width="100%" height="auto" controls>
                    <source src="{{url('/videos/Welcome-to-the-Fresh-Start-compressed.mp4')}}" type="video/mp4">
        
                    Your browser does not support the video tag.
                </video>
            </div>
            <div style="height: 1rem;"></div>
            <div class="card z-depth-0">
              <div class="card-content">
                <span class="card-title" style="font-size: 20px;">Welcome to Fresh Start</span>
                <p>
                We welcome you to join our facebook group and sign up to our dedicated mobile app so you'll have all our support at your fingertips.
              </p>
              </div>
            </div>
            <a style="margin-bottom: 16px;" href="https://www.facebook.com/groups/150603038982328/" target="_blank" class="waves-effect waves-dark btn-outline w-100">
              Join the Closed Facebook Group!
            </a>
            <a style="margin-bottom: 16px;" target="_blank" href="https://freshstart.leaner-living.com/signUp?uid=c9739d6d774a4da1ae31ed90424bf13d&email={{session('email')}}" target="_blank" class="waves-effect waves-dark btn-outline w-100">
              Sign up and use the app!
            </a>

            
    </div>
</div>

@endsection
