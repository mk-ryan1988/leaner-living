{{-- Compiled js --}}
<script src="{{ url('/js/app.js') }}"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<!-- Initialization of Materialize functions -->
<script type="text/javascript">

  $(document).ready(function(){
   $('.sidenav').sidenav();
   $(".dropdown-trigger").dropdown();
   $('.collapsible').collapsible();
   $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: true
    });
    $('.modal').modal();
    $('.tabs').tabs();
    $('.modal').modal();
    $('.pushpin').pushpin();
    $('select').formSelect();
  });
</script>

<script src="https://js.stripe.com/v3/"></script>
