<div class="container-fluid no-padding">
  <div id="bg-deadlift" class="row no-gutters align-items-center">
    {{-- <img style="width: 100%" src="https://image.freepik.com/free-photo/weights-exercise-weightlifter-strong-athletic_1139-709.jpg" alt="" class="responsive-img"> --}}
    <div class="col">
      <form id="contact-form" action="/contact-form" method="POST">
        @csrf
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 offset-lg-3 col-wrapper" style="padding: 24px 0px 24px 15px;z-index: 1;">
            <div class="card-panel overflow" style="max-height: 445px;">
              <h3 class="d-none d-sm-block">Have something to ask?</h3>
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
                  <div class="input-field col-12">
                    <textarea placeholder="Enter your message here" id="message" name="message" value="{{ old('message') }}" class="materialize-textarea" required class="validate"></textarea>
                  </div>
                </div>
                <p>you can also reach us via a <a href="mailto::fresh-start@leaner-Living.com">fresh-start@leaner-Living.com</a></p>
            </div>
          </div>
          <div class="col-12 col-lg-2" style="padding-left: 0px;">
            <button type="submit" class="waves-effect waves-light leaner-green lighten-2 btn z-depth-0 flow-text w-100" style="padding: 24px 16px 25px 16px; height: auto; margin-left: -15px; z-index: 0;">
              submit message<i class="material-icons right">send</i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


<p>
  Our main goal at Leaner Living is to <strong>educate</strong> our clients.<br>
  We believe that with a greater understanding of both exercise and nutrition you have a greater chance of not only executing but also adhering to a plan. The byproduct of this will be results, not just short term “transformations” but long term maintainable change.
</p>
<p>
  Leaner Living is a team of exercise and nutrition specialists who adopt a flexible dieting approach. Our goal is to keep up to date with the latest research and provide the best information to help you achieve your fat loss and fitness goals.
  Leaner Living is a growing community of like minded individuals looking to drop body-fat and be active. Educating you on the basic understanding of what your body needs, combined with healthy eating and regular exercise.
</p>
<p>
  We provide our clients with the highest level of personal support, education and package flexibility. There are no generic meal plans and we will not copy and paste a program. Everything we provide you has been designed around your needs, enjoyment and ability level.
</p>
