@extends('layouts.app')

@section('content')

<div class="leaner-green" style="padding-left: 70px;height: calc(100vh - 24px)">
  <div id="home-banner" class="h-100 white">
    <div class="container h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12">
          <img src="{{url('/images/LEANER-LIVING-LOGO.png')}}" alt="" class="responsive-img">
          {{-- <h3 class="">Welcome to LEANER LIVING<br> home of The FRESH START</h3> --}}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid green-bg">
  <div class="row justify-content-center align-items-center">
    <div class="col-12 col-lg-4 right-align">
      <h3 class="white-text">THE FRESH START</h3>
      {{-- <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" class="responsive-img"> --}}
      <div class="valign-wrapper justify-content-end">
        <i class="material-icons white-text medium left">arrow_forward</i>
        <a class="waves-effect waves-light btn-flat white-text" style="border: 2px solid #fff"  href="{{route('fresh-start.about')}}">Sign up now</a>
        {{-- <a class="waves-effect waves-light btn z-depth-0" href="{{route('fresh-start.about')}}">Find out more</a> --}}
      </div>
    </div>
    <div class="col-12 col-lg-6 h-100 padding">
      <div class="video-container z-depth-3">
        <iframe class="z-depth-3" src="https://www.youtube-nocookie.com/embed/nzCKG7wPpws?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-12 col-lg-2">

    </div>
  </div>
</div>
<div class="container section">
  <div class="row view-height">
    <div class="col-12">
      <header>
        <h3>about</h3>
        <h1 class="leaner-green-text">Leaner Living</h1>
      </header>
      <div class="content-panel right-align">
        <div class="left-align">
          <p>
            Our main goal at Leaner Living is to <strong>educate</strong> our clients.
          </p>
          <p>
            We believe that with a greater understanding of both exercise and nutrition you have a greater chance of not only executing but also adhering to a plan. The byproduct of this will be results, not just short term “transformations” but long term maintainable change.
          </p>
          <p>
            We provide our clients with the highest level of personal support, education and package flexibility. There are no generic meal plans and we will not copy and paste a program. Everything we provide you has been designed around your needs, enjoyment and ability level.
          </p>
          <p>
            This year we have launched the Fresh Start programme, this is our way of reaching a greater number of people while still providing a high quality product and service.
          </p>
          <p>
            The Fresh Start is a culmination of 10 years coaching experience working with hundreds of clients looking to achieve the same goal, weight loss!
          </p>
          <p>
            Aimed at first timers and those with a little more confidence in the gym but not advanced athletes. We provide you with absolutely every tool you will need to achieve that goal but most important educate you how we did it and how you can keep that weight off long term.
          </p>
        </div>
        <div class="valign-wrapper justify-content-end">
          <i class="material-icons medium left">arrow_forward</i>
          <a class="waves-effect waves-light btn z-depth-0"  href="{{route('fresh-start.about')}}">Find out more</a>
          {{-- <a class="waves-effect waves-light btn z-depth-0" href="{{route('fresh-start.about')}}">Find out more</a> --}}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <header>
        <h3>our</h3>
        <h1 class="leaner-green-text">Coaches</h1>
      </header>
    </div>
    <div class="col-12 col-lg-6">

      <div class="content-panel h-100">
        <img src="{{url('images/steve.jpg')}}" alt="" class=" right" style="width: 200px; height: 200px; margin-left: 10px; margin-bottom: 30px;">
        <h3 class="underline">Steven</h3>
        <p>
          Co-founder of Leaner Living with 10 years in the health and fitness industry. Steven has worked with Actors, top sports athletes, physique competitors, power lifters, personal trainers and semi professional sports teams.
        </p>

        <p>
          Over the past 10 years Steven has fine-tuned his approach to one-to-one and online coaching. Realizing that no two clients are the same, a coach cannot simply have one arrow in his quiver. Steven offers personal support that is second to none, going above and beyond client expectations providing them with everything they could possibly need to not only achieve their goals but also maintain them.
        </p>
        <p>
          Steven recently competed (July 2016) for the first time with the UKDFBA in the men’s physique category. Coaching himself through every aspect of his prep through 27 weeks of “dieting” Steven managed to go from 100kg to 77kg.
        </p>
      </div>
    </div>
    <div class="col-12 col-lg-6 right-align">

      <div class="content-panel h-100">

        <h3 class="underline">Ruth</h3>
        <p>
          Ruth has always had a strong love for fitness, from starting Ballet at the age of 3 to competing in gymnastics at county level. In her 20's she found weightlifting and immediately found a new passion. Since then she has dieted down to compete in 2 bikini competitions and attend 2 physique photo-shoots.
        </p>
        <p>
          The love for training and the drive to further Ruth’s understanding of nutrition led her to the 'Shredded By Science Academy' from which she graduated fully in 2017.
        </p>
        <p>
          Leaner Living has provided Ruth with the platform to fine tune her skills as a coach and athlete allowing her to help her clients not only achieve their goals short term, but educate them on how to maintain them for life.
        </p>
        <p>
          Together we can take steps towards a fitter, healthier, and happier you.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="spacerX3">

</div>
<div class="spacerX3" id="contact-form"></div>

<div class="container-fluid d-block d-sm-none">
  <div class="row">
    <div class="col-1 d-none d-md-block leaner-green">
    </div>
    <div class="col-12 col-md-5 leaner-green">
      <h3 class="white-text  flow-text">Have something to ask?</h3>
    </div>
  </div>
</div>
<div class="container-fluid no-padding">
  <div id="bg-deadlift" class="row no-gutters align-items-center">
    {{-- <img style="width: 100%" src="https://image.freepik.com/free-photo/weights-exercise-weightlifter-strong-athletic_1139-709.jpg" alt="" class="responsive-img"> --}}
    <div class="col">
      <form id="contact-form" action="/contact-form" method="POST">
        @csrf
        <div class="row align-items-center no-margin">
          <div class="col-12 col-lg-6 offset-lg-3 col-wrapper" >
            <div class="card-panel overflow" style="max-height: 445px; z-index: 1; position: relative;">
              <h3 class="d-none d-sm-block" style="margin-top: 0px">Have something to ask?</h3>
                <div class="row">
                  <div class="input-field col-12">
                    <input placeholder="Full Name" id="name" type="text" name="name" value="{{ old('name') }}" required class="validate">
                  </div>
                  <div class="input-field col-12">
                    <input placeholder="Email" id="email" type="email" name="email" value="{{ old('email') }}" required class="validate">
                    <span class="helper-text" data-error="invalid" data-success="valid">Please enter a vailid email address</span>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="input-field col-12" style="margin-bottom: 0px;">
                    <textarea placeholder="Enter your message here" id="message" name="message" value="{{ old('message') }}" class="materialize-textarea" required class="validate"></textarea>
                  </div>
                </div>
                <p>
                  you can also reach us via <a href="mailto::fresh-start@leaner-Living.com">fresh-start@leaner-Living.com</a><br>
                  or alternately feel free to message us on <a href="https://www.facebook.com/LeanerLiving2016/" target="_blank" class="">our Facebook page</a>
                </p>
            </div>
          </div>
          <div class="col-12 col-lg-2" style="padding-left: 0px;">
            <button type="submit" class="waves-effect waves-light leaner-green lighten-2 btn z-depth-0 flow-text w-100" style="max-height: 445px; z-index: 0;">
              submit message<i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection




@section('scripts')
  <script>
  // var innerWidth = $( "div.container:first" ).outerWidth();
  // var outerWidth = $( "div.container:first" ).outerWidth(true);
  // var margin = (outerWidth - innerWidth) / 2;
  // var setWidth = innerWidth + margin;
  // console.log(setWidth);
  // $( document ).ready(function() {
  //   $("div#testimonials").css({"min-width": setWidth,});
  //   $("div#testimonials .row").css({"padding-left": margin});
  // });
  $( "#prevSlide1" ).click(function() {
      $('#team-carousel').carousel('prev');
  });
  $( "#nextSlide1" ).click(function() {
      $('#team-carousel').carousel('next');
  });
  $( "#prevSlide2" ).click(function() {
      $('#client-carousel').carousel('prev');
  });
  $( "#nextSlide2" ).click(function() {
      $('#client-carousel').carousel('next');
  });
  </script>
@endsection
