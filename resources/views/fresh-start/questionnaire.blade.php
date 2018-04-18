@extends('layouts.auth')

@component('alert', ['type' => 'success'])
    @slot('title')
        Payment Accepted
    @endslot
    Insert Text here!
@endcomponent

@section('content')

  <div class="row">
    <div class="col-12">
      <ul class="stepper horizontal w-100" id="horizontal">
        <li class="step done">
          <div data-step-label="" class="step-title waves-effect waves-dark"> <a href="#">Register</a> </div>
        </li>
        <li class="step done">
          <div class="step-title waves-effect waves-dark"><a href="#">Payment</a></div>
        </li>
        <li class="step active">
          <div class="step-title waves-effect waves-dark"><a href="#">Questionnaire</a></div>
        </li>
      </ul>
    </div>
  </div>

@endsection
{{-- {{ dd(session()->has('success'))}} --}}

@if(session()->has('success'))

@endif

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
      var elem = document.querySelector('.modal');
      var instance = M.Modal.getInstance(elem);
      instance.open();
    });
  </script>
@endsection
