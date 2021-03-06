@extends('layouts.auth')

{{-- {{ dd($qroupedQs) }} --}}

@component('alert', ['type' => 'success'])
    @slot('title')
        Payment Accepted
    @endslot
    <p>
      Thank you for signing up to Fresh Start!
    </p>
    <p>
      Please start your journey by completing the following questionnaire. We will then deal with your application and let you know whats next.
    </p>

@endcomponent

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
      <li class="step done">
        <div data-step-label="" class="step-title waves-effect waves-dark">PAR-Q</div>
      </li>
      <li class="step done">
        <div class="step-title waves-effect waves-dark">Payment</div>
      </li>
      <li class="step active">
        <div class="step-title waves-effect waves-dark">Questionnaire</div>
      </li>
    </ul>
  </div>
</div>
<div class="spacer"></div>
<div class="row align-items-center justify-content-center">
   <form action="/api/questionnaire" method="post" id="questionnaire-form" class="col-12 col-lg-8">
    @csrf
    <div class="padding z-depth-0 white">
        <div class="row">
          <div class="input-field col col-12 col-md-6">
              <input value="{{ session('name') }}" id="full_name" name="full_name" type="text" required class="validate">
              <label for="full_name">First Name</label>
          </div>
          <div class="input-field col col-12 col-md-6">
              <input value="{{ session('email') }}" id="email" name="email" type="email" required class="validate">
              <label for="email">Email</label>
          </div>
        </div>
    </div>
    <div class="spacer"></div>
    @foreach ($qroupedQs as $key => $questions)
      {{-- Questions section headers --}}
      <div class="col-8 col-md-4 leaner-green">
          <header>
            <h4 class="white-text">
              @switch($key)
                  @case(1)
                      Lifestyle
                      @break

                  @case(2)
                      Excercise
                      @break
                  @case(3)
                      Nutrition
                      @break

                  @case(4)
                      Goal Setting
                      @break

                  @default

              @endswitch
            </h4>
          </header>
      </div>
      {{-- Questions section content --}}
      <div class="padding z-depth-0 white">
        @foreach ($questions as $key => $q)
          @switch($q->type)
              @case('textarea')
                  <div class="row">
                    <div class="input-field col">
                      <p><strong>{{$q->title}}</strong></p>
                      @if ($q->name == 's4q5' || $q->name == 's4q6')
                        <textarea id="{{$q->name}}" name="{{$q->name}}" class="materialize-textarea"></textarea>
                        {{-- <label class="active" for="{{$q->name}}">{{$q->title}}</label> --}}
                      @else
                        <textarea required id="{{$q->name}}" name="{{$q->name}}" class="materialize-textarea"></textarea>
                        {{-- <label class="active" for="{{$q->name}}">{{$q->title}}</label> --}}
                      @endif
                    </div>
                  </div>
                  @break

              @case('radio')
                  <div class="row">
                    <div class="col-12">
                      <label class="leaner-green-text">{{$q->title}}</label>
                    </div>
                    <div class="{{$q->classes}} col-12">
                      @foreach ($q->options as $key => $option)
                        @if ($q->name == 's2q2' || $q->name == 's2q3' || $q->name == 's4q4')
                          <p>
                            <label>
                              <input class="with-gap" name="{{$q->name}}" value="{{$option->value}}" type="radio" />
                              <span>{{$option->value}}</span>
                            </label>
                          </p> 
                        @else   
                          <p>
                            <label>
                              <input required class="with-gap" name="{{$q->name}}" value="{{$option->value}}" type="radio" />
                              <span>{{$option->value}}</span>
                            </label>
                          </p> 
                        @endif
                      @endforeach
                      @if ($q->other)
                        <p>
                          <label>
                            <input class="with-gap" name="{{$q->name}}" value="other" type="radio" />
                            <span>other (please explain below)</span>
                          </label>
                        </p>
                        <textarea id="{{$q->name}}other" name="{{$q->name}}other" placeholder="Please explain here" class="materialize-textarea"></textarea>
                      @endif
                    </div>
                    @if ($q->more)
                      <div class="input-field col">
                        <textarea id="{{$q->name}}more" name="{{$q->name}}more" placeholder="If yes please provide a little more detail" class="materialize-textarea"></textarea>
                      </div>
                    @endif
                  </div>
                  @break

              @case('range')
                  <div class="row">
                    <div class="col-12">
                      <label class="leaner-green-text">{{$q->title}}</label>
                    </div>
                    <div class="col-12">
                      <p class="range-field">
                       <input type="range" name="{{$q->name}}" id="{{$q->name}}" value="5" min="0" max="10" />
                     </p>
                    </div>
                  </div>
                  @break

              @case('group')
                  <div class="row">
                    <div class="col-12">
                      <label class="leaner-green-text">{{$q->title}}</label>
                    </div>
                    @foreach ($q->options as $key => $option)
                      <div class="col-12 col-md-3">
                        <input placeholder="{{$option->value}}" type="text" name="{{$option->name}}" class="">
                      </div>
                    @endforeach
                  </div>
                  @break

              @default

          @endswitch


        @endforeach
        @if ($loop->last)
          <button class="btn waves-effect waves-dark leaner-green w-100" type="submit" >Submit Questionnaire
            <i class="material-icons right">send</i>
          </button>
        @endif
      </div>
      <div class="spacer"></div>

    @endforeach

   </form>
 </div>



@endsection

@if(session()->has('success'))
  @section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        var elem = document.querySelector('.modal');
        var instance = M.Modal.getInstance(elem);
        instance.open();
      });
    </script>
  @endsection
@endif

