@extends('layouts.app')

@section('content')
  {{-- video modal --}}
  <div id="video-modal" class="modal">
    <div class="modal-content no-padding" >
      <div class="video-container white">
        <iframe class="z-depth-3" src="https://www.youtube-nocookie.com/embed/nzCKG7wPpws?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <div class="gradient" style="height: 400px; margin-top: -64px;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 col-lg-4">
          <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
        </div>
        <div class="col-12 col-lg-8">
          <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
          <div class="margin-top">
            <a class="waves-effect waves-light btn-flat white-text modal-trigger" data-target="video-modal" style="border: 2px solid #fff;">
              <i class="material-icons left">play_circle_outline</i>
              Play video
            </a>
            <a class="waves-effect waves-light btn z-depth-0 white leaner-green-text" style="margin-left: 15px;" href="{{url('fresh-start/PAR-Q')}}">
              Sign up now
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container relative white z-depth-1 minus-margin" style="z-index: 2">
    <div class="row align-items-start justify-content-center h-100">
      <div class="col-12">
        <div style="padding: 24px 24px 0px 24px;">
          {{-- <h3>The Fresh Start is the 12 week solution to your weight loss goals</h3> --}}
          <p>
            Designed by Steve and Ruth utilizing the latest evidence and research as well as 10 years experience in the health and fitness industry working with literally hundreds of weight loss clients.
          </p>
          <p>
            <strong>There are no fad diets, quick fixes or set meal plans here!</strong>
          </p>
          <p>
            You will be working directly with both Steve and Ruth (two coaches for the price of 1). Who will be offering guidance and support throughout your entire 12 week journey.
          </p>
          <p>
            Unlike other online programmes that may just send you a meal plan, workout routine and wave bye-bye, we believe the key to success lies in education and understanding.
          </p>
          <p>
            <blockquote>
                “We want you to know not only how to achieve amazing results, but how to keep them”
                <br><strong>Steve</strong>
            </blockquote>
          </p>
          <p>
            We have an ever expanding video library that will help educate you on any topic you feel you need a little more help with, we also encourage you to ask us as many questions as you can. The more you can take from us the greater your results will be!
          </p>
          <p>
            Everything is designed around both your ability and availability. So if you feel a little unsure about what you’re doing don’t panic! We have all been in those shoes.
          </p>
          <p>
            <blockquote>
                “We want to guide you every step of the way”
                <br><strong>Ruth</strong>
            </blockquote>
          </p>
        </div>
      </div>
      {{-- <div class="col-12 col-lg-5 order-md-1 order-lg-3 center-align" style="margin-top: -80px">
        <div class="card-panel">
          <p>
            Lorem ipsum dolor sit amet, ei esse nostrud usu.
          </p>
          <p>
            <h1> <span>£</span>149</h1>
          </p>
          <p>
            <h6>We currently offer 10 places p/m </h6>
          </p>
        </div>
      </div> --}}

    </div>
  </div>
  <div class="container-fluid relative white minus-margin" style="z-index: 1; padding-top: 120px">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 center-align">
          <h3 class="flow-text">We take the guesswork out of everything, leaving you with a simple but effective way to achieving your goals.</h3>
        </div>
        <div class="col-12 col-md-8 offset-md-1">
          <div id="fresh-info" class="row">
            <div class="spacerX2 w-100"></div>
            <div class="col-12 col-md-6">
              <i class="material-icons left">fitness_center</i>
              <h6>Exercise & Daily Activity</h6>
              <p>
                3, four-week gym based training programmes.<br>
                2-4x per week<br>
                45-60minute sessions<br>
                Activity tracker (step targets)
              </p>

            </div>
            <div class="col-12 col-md-6">
              <i class="material-icons left">local_dining</i>
              <h6>Nutrition</h6>
              <p>
                Set calorie targets using our personalized calculations and Fresh Start goal post system<br>
                Nutrient targets (protein) as you progress through your journey if necessary<br>
                Sample meal suggestions<br>
                Shopping lists<br>
                Recipes
              </p>
            </div>
            <div class="col-12">
              <i class="material-icons left">videocam</i>
              <h6>Education</h6>
              <p>
                Exercise Coaching via video demos with simple teaching cues.
                Weekly Facebook Lives, covering all subjects under training, nutrition, FAQ’s etc.<br>
                How to videos on everything from getting the most out of <a href="https://www.myfitnesspal.com/" target="_blank">myfitnesspal</a> to understanding how to socialize and eat out while still achieving your weight loss goals
              </p>
            </div>
            <div class="col-12">
              <i class="material-icons left">school</i>
              <h6>Support</h6>
              <p>
                Closed Facebook group where you can get daily access to both coaches Steve and Ruth.<br>
                Surround yourself with like-minded individuals working towards a similar goal.<br>
                Help each other with your struggles and successes.<br>
                Enjoy other member’s recipes, food prep tips and tricks etc.<br>
                48hour email response from Ruth and Steve.<br>

              </p>
            </div>
            <div class="col-12">
              <i class="material-icons left">school</i>
              <h6>Check-ins and Accountability</h6>
              <p>
                Daily/weekly stat forms  (weigh-ins, measurements, progress photos).<br>
                Training journals (logging weights effort etc).<br>
                Motivated Mondays (Facebook group) – setting personal goals for the week commencing.
              </p>
            </div>
            <div class="col-12">
              <i class="material-icons left">school</i>
              <h6>Aftercare</h6>
              <p>
                Some goals simply cannot be achieved in 12 weeks and we get that! We will not leave you high and dry if you feel you would still benefit from our help.
              </p>
              <p>
                But we don’t want you having to sign up and start from scratch again. That is not what the Fresh Start is about.<br>
                You will have a far greater understanding of nutrition, tonnes of confidence in the gym and will be a lot closer to your goals than when you started so why take a step back?
              </p>
            </div>
            <div class="col-12">
              <h6>To keep you moving towards your goals we have two options available: </h6>
            </div>
            <div class="col-12">
              <strong>The Graduate package</strong> – A programme that lasts as long or as little as you need it to (month by month subscription). We continue to provide you with new 4-6 week training programmes as well as monthly nutrition adjustments where necessary. You become part of our graduate Facebook group where you can once again communicate with other graduates and Steve and Ruth. Giving you a place to stay accountable, keep learning and giving you the support you need to make sure you achieve those long term goals.
            </div>
            <div class="col-12">
              <strong>One to One online coaching</strong> – If you feel after your 12 weeks you would like to work closer with either Ruth or Steve, you can. This is for those looking to take their physique and nutrition understanding to the next level! Possibly stepping on stage or in front of the camera to show off all your hard work!
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 ">
        <div class="card-panel white">
          <h5 class="leaner-green-text">Ready for your Fresh Start?</h5>
          {{-- <p>Places are limited and your programme will commence on the beginning of the upcoming month.</p> --}}
          <h3>£--- <span style="font-size: 1.15rem;">one off payment</span> </h3>

          <a class="waves-effect waves-light btn leaner-green z-depth-0" href="{{url('fresh-start/PAR-Q')}}">Sign up now</a>
        </div>
      </div>
    </div>
  </div>
</div>


  {{-- <div id="fresh-info" class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-10 offset-lg-1">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-4 center-align">
            <i class="large material-icons left">fitness_center</i>
          </div>
          <div class="col-12 col-lg-4 center-align">
            <i class="large material-icons left">add</i>
          </div>
          <div class="col-12 col-lg-4 center-align">
            <i class="large material-icons">timer</i>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


@endsection

@section('scripts')

@endsection
