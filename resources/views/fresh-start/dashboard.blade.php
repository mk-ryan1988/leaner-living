@extends('layouts.app')

@section('content')
  {{-- {{dd($user)}} --}}
  <div id="stats_modal" class="modal">
    <form action="/api/stats" method="post" id="stats_form">
      @csrf
    <div class="modal-content" style="padding-bottom: 0px;">
      <h4>Starting Stats</h4>
      {{-- <p>A bunch of text</p> --}}
        <div class="row">
          <div class="input-field col">
             <input placeholder="chest(CMs)" id="chest" name="chest" type="text" class="validate">
             <label for="chest">Chest (over nipple)</label>
             @if ($errors->has('chest'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('chest') }}</strong>
                 </span>
             @endif
          </div>
          <div class="input-field col">
             <input placeholder="waist(CMs)" id="waist" name="waist" type="text" class="validate">
             <label for="waist">Waist (at smallest point)</label>
             @if ($errors->has('waist'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('waist') }}</strong>
                 </span>
             @endif
          </div>
        </div>
        <div class="row">

          <div class="input-field col">
             <input placeholder="Left Leg(CMs)" id="left_leg" name="left_leg" type="text" class="validate">
             <label for="left_leg">Left Leg (20cm from knee)</label>
             @if ($errors->has('left_leg'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('left_leg') }}</strong>
                 </span>
             @endif
          </div>
          <div class="input-field col">
             <input placeholder="Right Leg(CMs)" id="right_leg" name="right_leg" type="text" class="validate">
             <label for="right_leg">Right Leg (20cm from knee)</label>
             @if ($errors->has('right_leg'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('right_leg') }}</strong>
                 </span>
             @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col">
             <input placeholder="Left Arm(CMs)" id="left_arm" name="left_arm" type="text" class="validate">
             <label for="left_arm">Left Arm (15cm from elbow)</label>
             @if ($errors->has('left_arm'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('left_arm') }}</strong>
                 </span>
             @endif
          </div>
          <div class="input-field col">
             <input placeholder="Right Arm(CMs)" id="right_arm" name="right_arm" type="text" class="validate">
             <label for="right_arm">Right Arm (15cm from elbow)</label>
             @if ($errors->has('right_arm'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('right_arm') }}</strong>
                 </span>
             @endif
          </div>
        </div>
        <div class="row">
          <div class="input-field col">
             <input id="current_weight" name="current_weight" type="text" class="validate">
             <label for="current_weight">Current Weight (KGs)</label>
             @if ($errors->has('current_weight'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('current_weight') }}</strong>
                 </span>
             @endif
          </div>
          <div class="input-field col">
             <input id="target_weight" name="target_weight" type="text" class="validate">
             <label for="target_weight">Target Weight (KGs)</label>
             @if ($errors->has('target_weight'))
                 <span class="invalid-feedback">
                     <strong>{{ $errors->first('target_weight') }}</strong>
                 </span>
             @endif
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
      <button class="btn waves-effect waves-light modal-action" type="submit">Submit
        <i class="material-icons right">send</i>
      </button>
    </div>
    </form>
  </div>
  <div id="pics_modal" class="modal">
    <form action="/api/picUpload" method="post" enctype="multipart/form-data" id="stats_form">
      <div class="modal-content">
        <h4>Starting Photos</h4>
        <p>
          Can you please take 3 full body photos of yourself on a plain backdrop, one being front on, one side on, and one rear facing.<br>
          This can be in whatever you feel comfortable in and is purely for us to track your progress. We will never use results from our programmes without permission from the participant.
        </p>
        <div class="spacer"></div>
        @csrf
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input name="photos[]" type="file" multiple>
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload your pictures here">
          </div>
          @if ($errors->has('photos.*'))
              <span class="invalid-feedback" style="bottom: -20px!important;">
                  <strong>Problem Uplaoding! Please check files are images and do not exceed 4MBs each.</strong>
              </span>
          @endif
        </div>

      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
        <button class="btn waves-effect waves-light modal-action" type="submit">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>
    </form>
  </div>

<div class="container">
  <div class="row h-100 align-items-end">
    <div class="col-12 col-lg-4 d-none d-lg-block">
      <h4 id="welcome-name" class="padding-left">Hey, {{filterName(Auth::user()->name)}}</h4>
      <h6 class="padding-left">Welcome to your Fresh Start!</h6>
      <div class="spacer"></div>
      <div class="card-panel no-padding no-margin white h-100">
        <ul class="collection with-header checklist">
          <li class="collection-header"><h4>Profile Checklist</h4></li>
          <a @if ($user->paid) disabled @endif href="{{url('/freshStart/payment')}}" class="@if ($user->paid) complete @endif  collection-item"><i class="material-icons left">payment</i><span>Payment</span></a>
          <a class="@if ($user->questionnaire) complete @endif collection-item"><i class="material-icons left">list</i><span>Questionnaire</span></a>
          <a class="@if (count($user->stats) > 0) complete  @endif collection-item modal-trigger" href="#stats_modal"><i class="material-icons left">insert_chart</i> <span>Starting Stats</span></a>
          <a class="@if (count($user->pics) > 0) complete @endif collection-item modal-trigger" href="#pics_modal"><i class="material-icons left">add_a_photo</i> <span>Starting Photos</span></a>
        </ul>
      </div>
    </div>
    <div class="col-12 col-lg-8 center-align">
      <div class="card-panel white" id="welcome-video" style="height: autogit ;">
        <div class="video-container">
          <video  width="100%" height="auto" controls>
           <source src="{{url('/videos/Welcome-to-the-Fresh-Start-compressed.mp4')}}" type="video/mp4">

          Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <a href="https://www.facebook.com/groups/150603038982328/" target="_blank" class="modal-action waves-effect waves-dark btn leaner-green w-100">Join the fresh start closed facebook group!</a>
    </div>
  </div>
</div>
<div class="container-fluid" id="gradient-bottom" style="margin-top: -80px;">
  <div class="row align-items-start justify-content-center h-100 gradient bottom" style="padding-bottom: 5rem;">
    <div class="col-12 col-lg-4 d-block d-lg-none" style="padding-top: 5rem;">
      <h4 id="welcome-name" class="padding-left">Hey, {{filterName(Auth::user()->name)}}</h4>
      <h6 class="padding-left">Welcome to your Fresh Start!</h6>
      <div class="spacer"></div>
      <div class="card-panel no-padding no-margin white h-100">
        <ul class="collection with-header checklist">
          <li class="collection-header"><h4>Profile Checklist</h4></li>
          <a class="@if ($user->paid) complete @endif collection-item"><i class="material-icons left">payment</i><span>Payment</span></a>
          <a class="@if ($user->questionnaire) complete @endif collection-item"><i class="material-icons left">list</i><span>Questionnaire</span></a>
          <a class="@if (count($user->stats) > 0) complete  @endif collection-item modal-trigger" href="#stats_modal"><i class="material-icons left">insert_chart</i> <span>Starting Stats</span></a>
          <a class="@if (count($user->pics) > 0) complete @endif collection-item modal-trigger" href="#pics_modal"><i class="material-icons left">add_a_photo</i> <span>Starting Photos</span></a>
        </ul>
      </div>
    </div>
    <div class="col-12 col-lg-5">

    </div>
  </div>
</div>
{{-- <div style="min-height: calc(100vh - 64px)">
  <div class="grey lighten-4" style="height: 60%;">
    <div class="container h-100">
      <div class="row">
        <div class="col-12" style="height: 64px;">

        </div>
      </div>
      <div class="row h-100 align-items-end">
        <div class="col-12 col-lg-4">
          <h4 class="padding-left">Hey {{ Auth::user()->name }},</h4>
          <h6 class="padding-left">Welcome to your Fresh Start!</h6>
          <div class="spacer"></div>
          <div class="card-panel no-padding white h-100">
            <ul class="collection with-header checklist">
              <li class="collection-header"><h4>Profile Checklist</h4></li>
              <a class="@if ($user->paid) complete @endif collection-item"><i class="material-icons left">payment</i><span>Payment</span></a>
              <a class="@if ($user->questionnaire) complete @endif collection-item"><i class="material-icons left">list</i><span>Questionnaire</span></a>
              <a class="@if (count($user->stats) > 0)  @endif collection-item modal-trigger" href="#stats_modal"><i class="material-icons left">insert_chart</i> <span>Starting Stats</span></a>
              <a class="@if (count($user->pics) > 0)  @endif collection-item modal-trigger" href="#pics_modal"><i class="material-icons left">add_a_photo</i> <span>Starting Photos</span></a>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-8 center-align">
          <div class="card-panel white" style="height: 415px; margin-top: 64px;">
            <img src="{{url('/images/fresh-start-colour.png')}}" alt="" style="height: 200px; width: auto;">
            <h4>We're currently processing your profile and will have a message for you soon.</h4>
          </div>
          <a href="https://www.facebook.com/groups/150603038982328/" target="_blank" class="modal-action waves-effect waves-dark btn leaner-green w-100">Join the fresh start closed facebook group!</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" style="height: calc(40% + 64px); margin-top: -20px;">
    <div class="row align-items-start justify-content-center h-100 gradient" style="padding-bottom: 5rem;">
      <div class="col-12 col-lg-5 order-2 order-lg-2">
      </div>
      <div class="col-12 col-lg-5 order-1 order-lg-3 right-align minus-margin">

      </div>
    </div>
  </div>
</div> --}}

@endsection
@if ($errors->has('photos') || $errors->has('photos.*'))
  @section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#pics_modal').modal('open');
      });
    </script>
  @endsection
@endif
@if ($errors->has('chest') || $errors->has('waist') || $errors->has('left_leg') || $errors->has('right_leg') || $errors->has('left_arm') || $errors->has('right_arm') || $errors->has('current_weight') || $errors->has('target_weight'))
  @section('scripts')
    <script type="text/javascript">
      $(document).ready(function(){
        $('#stats_modal').modal('open');
      });
    </script>
  @endsection
@endif
