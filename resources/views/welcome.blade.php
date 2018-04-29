@extends('layouts.app')

@section('content')
  <div class="gradient" style="height: 200px; margin-top: -64px;">
    <div class="container h-100">
    </div>
  </div>
  <div class="container-fluid">
    <div class="row align-items-start justify-content-center h-100" style="padding-bottom: 5rem;">
      <div class="col-12 col-lg-5 order-2 order-lg-2">
        <div style="padding: 24px 24px 0px 24px;">
          <h3>Welcome to LEANER LIVING the home of FRESH START</h3>
          <p>
            (ADD AN INTRO HERE)<br>
            Lorem ipsum dolor sit amet, eam libris tritani ut, at mei detracto accommodare. Novum viderer quo no, sit tempor eripuit convenire te. Ius doming dissentias ne, ea dolorum dissentiunt eos. Eu nostro iracundia mel. Probo liberavisse reprehendunt ex mea, eam ne omnium contentiones.
          </p>
          <div class="valign-wrapper">
            <i class="material-icons medium left">arrow_forward</i>
            <a class="waves-effect waves-light btn z-depth-0 modal-trigger"  href="#stats_modal">Find out more</a>
            {{-- <a class="waves-effect waves-light btn z-depth-0" href="{{route('fresh-start.about')}}">Find out more</a> --}}
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-5 order-1 order-lg-3 right-align minus-margin">
        <div class="video-container white">
          <iframe class="z-depth-3" src="https://www.youtube-nocookie.com/embed/nzCKG7wPpws?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>

      </div>
    </div>
  </div>
  <div class="spacerX3"></div>
  {{-- <div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-5 offset-lg-1" >
      <h2 style="padding: 4rem 0rem;">
        Give a man a fish and you feed him for a day; <br>
        teach a man to fish<br> and you feed him for a lifetime
      </h2>
    </div>
  </div>
</div> --}}
<div class="container-fluid">
  <div class="row">
    <div class="col-1 d-none d-md-block leaner-green">

    </div>
    <div class="col-12 col-md-5 leaner-green">
      <h3 class="white-text">Who are we?</h3>
    </div>
  </div>
</div>
  <div id="" class="container-fluid">
    <div class="row align-items-center">
      <div class="col-12 col-lg-11 z-depth-1 h-100 white">

        <div class="row">
          <div class="col-11 offset-md-1">
            <div id="team-carousel" class="carousel carousel-slider center" style="margin-bottom: 2rem;">
              <i id="prevSlide1" style="position: absolute; bottom: 5px; right: 70px;" class="material-icons medium waves-effect">arrow_back</i>
              <i id="nextSlide1" style="position: absolute; bottom: 5px; right: 5px;" class="material-icons medium waves-effect">arrow_forward</i>

              {{-- <a id="prevSlide" style="position: absolute; bottom: 17.5px; right: 70px;" class="btn z-depth-0 off-black-text waves-effect white"><i class="material-icons">arrow_back</i></a>
              <a id="nextSlide" style="position: absolute; bottom: 17.5px; right: 5px;" class="btn z-depth-0 off-black-text waves-effect white"><i class="material-icons">arrow_forward</i></a> --}}
              <div class="carousel-item" style="padding: 24px 0px;" href="#one!">
                <div class="row" style="margin: 0px;">
                  <div class="col-5 center-align" style="padding-left: 0px;">
                      <img src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="" style="width: 100%; height: 350px;" class="responsive-img">
                  </div>
                  <div class="col-7 left-align" style="padding-right: 0px;">
                    <div class="panel">
                      <h2 class="">Steve</h2>
                      <p>
                        Delenit omnesque no vel, sed dolorem dignissim id. At est ridens inermis. Te agam reque aliquid pri, ius ea cibo delenit postulant. Qui fierent deleniti et, cu reque numquam inermis sea. Ex lorem discere molestiae ius, eius lucilius eu duo. Cum ea aperiam detracto ullamcorper, est in essent tacimates. Tritani equidem debitis eam id.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item " href="#two!">
                <div class="row" style="margin: 0px;">
                  <div class="col-5 center-align" style="padding-left: 0px;">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" alt="" style="width: 100%; height: 350px;" class="responsive-img">
                  </div>
                  <div class="col-7 left-align" style="padding-right: 0px;">
                    <div class="panel">
                      <h2 class="">Ruth</h2>
                      <p>
                        Delenit omnesque no vel, sed dolorem dignissim id. At est ridens inermis. Te agam reque aliquid pri, ius ea cibo delenit postulant. Qui fierent deleniti et, cu reque numquam inermis sea. Ex lorem discere molestiae ius, eius lucilius eu duo. Cum ea aperiam detracto ullamcorper, est in essent tacimates. Tritani equidem debitis eam id.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-1 grey lighten-4 h-100">

      </div>
    </div>
  </div>
  <div class="spacerX3"></div>
  <div class="container-fluid">
    <div class="row align-items-start">
      <div class="col-12 col-lg-10 offset-lg-1">
        <h3 >What our Clients say!</h3>
        <div id="client-carousel" class="carousel carousel-slider" style="height: 200px">
          <i id="prevSlide2" style="position: absolute; bottom: 5px; right: 70px;" class="material-icons medium waves-effect">arrow_back</i>
          <i id="nextSlide2" style="position: absolute; bottom: 5px; right: 5px;" class="material-icons medium waves-effect">arrow_forward</i>

          {{-- <a id="prevSlide" style="position: absolute; bottom: 17.5px; right: 70px;" class="btn z-depth-0 off-black-text waves-effect white"><i class="material-icons">arrow_back</i></a>
          <a id="nextSlide" style="position: absolute; bottom: 17.5px; right: 5px;" class="btn z-depth-0 off-black-text waves-effect white"><i class="material-icons">arrow_forward</i></a> --}}
          <div class="carousel-item" style="padding: 24px 0px" href="#one!">
            <div class="">
              <p>
                Delenit omnesque no vel, sed dolorem dignissim id. At est ridens inermis. Te agam reque aliquid pri, ius ea cibo delenit postulant. Qui fierent deleniti et, cu reque numquam inermis sea. Ex lorem discere molestiae ius, eius lucilius eu duo. Cum ea aperiam detracto ullamcorper, est in essent tacimates. Tritani equidem debitis eam id.
              </p>
              <blockquote>
                Mrs P Carter
              </blockquote>
            </div>
          </div>
          <div class="carousel-item" style="padding: 24px 0px" href="#two!">
            <div class="">
              <p>
                Delenit omnesque no vel, sed dolorem dignissim id. At est ridens inermis. Te agam reque aliquid pri, ius ea cibo delenit postulant. Qui fierent deleniti et, cu reque numquam inermis sea. Ex lorem discere molestiae ius, eius lucilius eu duo. Cum ea aperiam detracto ullamcorper, est in essent tacimates. Tritani equidem debitis eam id.
              </p>
              <blockquote>
                Mrs J Blogs
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="spacerX3" id="contact-form"></div>

  <div class="container-fluid no-padding">
    <div id="bg-deadlift" class="row no-gutters align-items-center">
      {{-- <img style="width: 100%" src="https://image.freepik.com/free-photo/weights-exercise-weightlifter-strong-athletic_1139-709.jpg" alt="" class="responsive-img"> --}}
      <div class="col">
        <form>
          <div class="row align-items-center">
            <div class="col-12 col-lg-6 offset-lg-3" style="padding: 24px 0px 24px 15px;">
              <div class="card-panel">
                <h3>Have something to ask?</h3>
                  <div class="row">
                    <div class="input-field col-12">
                      <input placeholder="Full Name" id="first_name" type="text" class="validate">
                    </div>
                    <div class="input-field col-12">
                      <input placeholder="Email" id="email" type="email" class="validate">
                      <span class="helper-text" data-error="wrong" data-success="right">Please enter a vailid email address</span>
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="input-field col-12">
                      <textarea placeholder="Enter your message here" id="message" class="materialize-textarea"></textarea>
                    </div>
                  </div>
                  <p>you can also reach us via a  <a href="mailto::fresh-start@leaner-Living.com">fresh-start@leaner-Living.com</a></p>

              </div>
            </div>
            <div class="col-12 col-lg-2" style="padding-left: 0px;">
              <a class="waves-effect waves-light leaner-green lighten-2 btn z-depth-0 flow-text w-100" style="padding: 24px 16px 25px 16px; height: auto;">submit message<i class="material-icons right">send</i></a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <div class="spacerX3"></div>

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
