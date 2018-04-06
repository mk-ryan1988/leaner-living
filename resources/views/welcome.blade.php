@extends('layouts.app')

@section('content')
  <div class="view-height">
    <div class="row align-items-center justify-content-center h-100">
      <div class="col center-align">
        <iframe class="z-depth-3" width="560" height="315" src="https://www.youtube-nocookie.com/embed/nzCKG7wPpws?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <div style="height: 500px" class="row white">
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
@endsection

@section('scripts')
  <script type="text/javascript">
  $(document).ready(function(){
     $('.tap-target').tapTarget();
   });
  </script>
@endsection
