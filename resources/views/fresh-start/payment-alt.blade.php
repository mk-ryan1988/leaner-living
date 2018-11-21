@extends('layouts.auth')


@section('content')
<div class="gradient header hide-on-small-only" style="height: 400px;">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 200px; width: auto;">
      </div>
      <div class="col-12 col-lg-8 hide-on-small-only">
        <h4 class="white-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
      </div>
    </div>
  </div>
</div>
<div class="gradient header hide-on-med-and-up" style="height: 160px;">
  <div class="container h-100">
    <div class="row h-100 align-items-start">
      <div class="col-12 col-lg-4">
        <img src="{{url('/images/fresh-start-whiteout.png')}}" alt="" style="height: 64px; width: auto; margin-top: 16px;">
      </div>
      <div class="col-12 col-lg-8 ">
        <h4 class="white-text flow-text">The Fresh Start is the 12 week solution to your weight loss goals...</h4>
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
      <li class="step secure active">
        <div class="step-title waves-effect waves-dark">Payment</div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark">Questionnaire</div>
      </li>
    </ul>
  </div>
</div>
<div class="spacer"></div>

<div id="card-details" class="row align-items-start justify-content-center">
  <div class="col-12 col-md-6 padding">
    <form action="/api/charge" method="post" id="stripe-form">
      @csrf
      <div class="card-panel z-depth-0">
        <h5>Apply Promo Code</h5>
        <div class="row valign-wrapper">
          <div class="col s6 input-field input cell">
              <input id="example2-promo-code" name="promoCode" data-tid="elements_examples.form.name_placeholder" class="input empty" type="text">
              <label for="example2-promo-code" data-tid="elements_examples.form.name_label">Promo Code</label>
              <span id="promo-helper" class="helper-text" data-error="wrong" data-success="right"></span>
          </div>
          <div class="col s6">
              <a style="margin-bottom: 18px;" class="btn waves-effect waves-dark w-100 leaner-green z-depth-0" id="apply-code" name="apply">apply code</a>
          </div>
        </div>
      </div>
      <div class="card-panel z-depth-0">
        <h5>Email Address</h5>
        <div class="row valign-wrapper">
          <div class="col s12 input-field input cell">
          <input id="example2-email-address" value=" {{ session('email') }}" name="email" data-tid="elements_examples.form.name_placeholder" class="input empty" type="text">
              <label for="example2-email-address" data-tid="elements_examples.form.name_label">Email Address</label>
          </div>
        </div>
      </div>
      <div class="card-panel z-depth-0">
        <div class="left-align">
          <img src="{{url('/images/visa.png')}}" alt="" style="height: 30px; width: auto;">
          <img src="{{url('/images/mastercard.png')}}" alt="" style="height: 30px; width: auto;">
          <img src="{{url('/images/americanexpress.png')}}" alt="" style="height: 30px; width: auto;">
        </div>
        <h5>Enter Payment Details</h5>
        <p>
          Please enter you card details, along with your address, below to complete your admission to the Fresh Start. 
        </p>
        <div class="row">
          <div class="col-12 col input-field input cell">
            <input id="example2-card-name" data-tid="elements_examples.form.name_placeholder" class="input empty" type="text" required="">
            <label for="example2-card-name" data-tid="elements_examples.form.name_label">Card Name</label>
          </div>
        </div>
        {{-- <div class="spacer"></div> --}}
        <div class="row">
          <div class="col-12 col col-sm-6 input-field input cell">
            <div id="example2-card-number" class="input empty"></div>
            <label for="example2-card-number" data-tid="elements_examples.form.card_number_label">Card number</label>
            <div class="baseline"></div>
          </div>
  
          <div class="col-12 col col-sm-6 input-field input cell">
            <div id="example2-card-expiry" class="input empty"></div>
            <label for="example2-card-expiry" data-tid="elements_examples.form.card_expiry_label">Expiration</label>
            <div class="baseline"></div>
          </div>
        </div>
        <div class="spacer hide-on-small-only"></div>
        <div class="row">
          <div class="col-12 col col-sm-6 input-field input cell">
            <div id="example2-card-cvc" class="input empty"></div>
            <label for="example2-card-cvc" data-tid="elements_examples.form.card_cvc_label">CVC</label>
            <div class="baseline"></div>
          </div>
          <div class="col-12 col col-sm-6 input-field input cell">
            <div id="example2-postalCode" class="input empty"></div>
            <label for="example2-postalCode" data-tid="elements_examples.form.postalCode_label">Postal Code</label>
            <div class="baseline"></div>
          </div>
  
        </div>
        <div class="spacer"></div>
        <div class="form-row">
          {{-- <label for="card-element">
            Credit or debit card
          </label> --}}
          {{-- <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
          </div> --}}

          <!-- Used to display form errors. -->
          <div id="card-errors" role="alert"></div>
        </div>
      </div>
      <button class="btn waves-effect waves-dark w-100 leaner-green" id="submit-btn" type="submit" name="action"></button>
    </form>
    {{-- <div class="row">
      <div class="col s12">
        Enter Promo Code Here:
        <div class="input-field inline">
          <input id="email_inline" type="email" class="validate">
          <label for="email_inline">Promo Code</label>
        </div>
      </div>
    </div> --}}
    {{-- <h2>Welcome @if (Auth::user()), {{Auth::user()->name}}@endif</h2> --}}

  </div>
</div>

<div class="spacer"></div>
@endsection

@section('scripts')
  <script type="text/javascript">
  (function() {
    'use strict';
    var stripe = Stripe('pk_test_xFpY5YYGorzCtPmELc8Sop3X');

    var elements = stripe.elements({
      // Stripe's examples are localized to specific languages, but if
      // you wish to have Elements automatically detect your user's locale,
      // use `locale: 'auto'` instead.
      locale: 'auto'
    });

    // Floating labels
    var inputs = document.querySelectorAll('.cell .input');
    Array.prototype.forEach.call(inputs, function(input) {
      input.addEventListener('focus', function() {
        input.classList.add('focused');
      });
      input.addEventListener('blur', function() {
        input.classList.remove('focused');
      });
      input.addEventListener('keyup', function() {
        if (input.value.length === 0) {
          input.classList.add('empty');
        } else {
          input.classList.remove('empty');
        }
      });
    });

    var elementStyles = {
      base: {
        color: '#32325D',
        fontWeight: 500,
        fontFamily: 'Source Code Pro, Consolas, Menlo, monospace',
        fontSize: '16px',
        fontSmoothing: 'antialiased',

        '::placeholder': {
          color: '#CFD7DF',
        },
        ':-webkit-autofill': {
          color: '#e39f48',
        },
      },
      invalid: {
        color: '#E25950',

        '::placeholder': {
          color: '#FFCCA5',
        },
      },
    };

    var elementClasses = {
      focus: 'focused',
      empty: 'empty',
      invalid: 'invalid',
    };

    var cardNumber = elements.create('cardNumber', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardNumber.mount('#example2-card-number');

    var cardExpiry = elements.create('cardExpiry', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardExpiry.mount('#example2-card-expiry');

    var cardCvc = elements.create('cardCvc', {
      style: elementStyles,
      classes: elementClasses,
    });
    cardCvc.mount('#example2-card-cvc');

    var postalCode = elements.create('postalCode', {
      style: elementStyles,
      classes: elementClasses,
    });
    postalCode.mount('#example2-postalCode');

    // Handle real-time validation errors from the card Element.
    cardNumber.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('stripe-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      stripe.createToken(cardNumber).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });
    // Appends the form with the hidden token.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('stripe-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      var cardName = document.getElementById('example2-card-name');
      var hiddenName = document.createElement('input');
      hiddenName.setAttribute('type', 'hidden');
      hiddenName.setAttribute('name', 'cardName');
      hiddenName.setAttribute('value', cardName.value);
      form.appendChild(hiddenName);


      // Submit the form
      form.submit();
    }

  })();
  //sets price on button
  $(document).ready(function () {
    $("#submit-btn").html('Pay £' + {{ filterPrice($freshSettings->freshStart_price) }});
    $('#example2-email-address').attr('value', localStorage.getItem('email'));
  });

  //check if code is good and applys it to price button
  $("#apply-code").click(function(){
    $(this).addClass( "disabled" );
    var code = 'BF50'
    var price = {{ filterPrice($freshSettings->freshStart_price) }};
    var enteredCode =  $('#example2-promo-code').val().toUpperCase();
    if (enteredCode === code) {
      newPrice = ((price/100) * 50).toFixed(2)
      $("#submit-btn").html('Pay £' + newPrice);
      $('#example2-promo-code').attr('readonly', true);
      $("#promo-helper").html('Promo code applied');
      // $(this).removeClass("disabled");
    } else {
      alert(false);
      $("#promo-helper").html('Invalid promo code');
      $(this).removeClass( "disabled" );
    }
  });
  </script>
  <style>
    a.disabled {
      pointer-events: none;
      cursor: default;
    }
  </style>
@endsection
