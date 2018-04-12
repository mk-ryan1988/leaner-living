@extends('layouts.app')

@section('content')
  <div class="view-height green-bg" style="margin-top: -64px;">
    <div class="container h-100">
      <div class="row align-items-center justify-content-center h-100">
        <div class="col">
          <h1 class="flow-text">Welcome to the home of your Fresh start</h1>
        </div>
        <div class="col-6 right-align">
          <div class="video-container">
            <iframe class="z-depth-3" width="560" height="315" src="https://www.youtube-nocookie.com/embed/nzCKG7wPpws?rel=0&amp;showinfo=0&start=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="white" style="width: 100%;">
  <div class="container">
    <div style="height: 500px" class="row white align-items-center">
      <div class="col">
        <div class="card testimonial-card">
          <div class="card-up gradient"></div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle activator">
          </div>
          <div class="card-body">
            <h4 class="card-title">Anna Doe</h4>
            <hr>
            <p><i class="material-icons">format_quote</i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card testimonial-card">
          <div class="card-up gradient"></div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle activator">
          </div>
          <div class="card-body">
            <h4 class="card-title">Anna Doe</h4>
            <hr>
            <p><i class="material-icons">format_quote</i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card testimonial-card">
          <div class="card-up gradient"></div>
          <div class="avatar mx-auto white"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2831%29.jpg" class="rounded-circle activator">
          </div>
          <div class="card-body">
            <h4 class="card-title">Anna Doe</h4>
            <hr>
            <p><i class="material-icons">format_quote</i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="white" style="width: 100%;">
  <div class="container">
    <div class="row">
   <form class="col">
     <div class="row">
       <div class="input-field col">
         <input placeholder="Placeholder" id="first_name" type="text" class="validate">
         <label for="first_name">First Name</label>
       </div>
       <div class="input-field col">
         <input id="last_name" type="text" class="validate">
         <label for="last_name">Last Name</label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col">
         <input disabled value="I am not editable" id="disabled" type="text" class="validate">
         <label for="disabled">Disabled</label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col">
         <input id="password" type="password" class="validate">
         <label for="password">Password</label>
       </div>
     </div>
     <div class="row">
       <div class="input-field col">
         <input id="email" type="email" class="validate">
         <label for="email">Email</label>
       </div>
     </div>
     <div class="row">
       <div class="col">
         This is an inline input field:
         <div class="input-field inline">
           <input id="email_inline" type="email" class="validate">
           <label for="email_inline">Email</label>
           <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
         </div>
       </div>
     </div>
   </form>
 </div>
  </div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
  $(document).ready(function(){
     $('.tap-target').tapTarget();
   });
  </script>
@endsection
