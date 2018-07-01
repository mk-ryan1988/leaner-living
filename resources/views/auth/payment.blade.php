@extends('layouts.auth')


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
      <li class="step secure active">
        <div class="step-title waves-effect waves-dark">Register / Payment</div>
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
    <div class="right-align">
      <img src="{{url('/images/visa.png')}}" alt="" style="height: 30px; width: auto;">
      <img src="{{url('/images/mastercard.png')}}" alt="" style="height: 30px; width: auto;">
      <img src="{{url('/images/americanexpress.png')}}" alt="" style="height: 30px; width: auto;">
    </div>
    <h3>Enter Payment Details</h3>

    <p>Please enter you card details, along with your address, below to complete your admission to the Fresh Start.</p>
    {{-- <h2>Welcome @if (Auth::user()), {{Auth::user()->name}}@endif</h2> --}}
    <form action="/api/charge" method="post" id="stripe-form">
      @csrf
      <div class="row">
        <div class="col-12 col input-field input cell">
          <input id="example2-card-name" data-tid="elements_examples.form.name_placeholder" class="input empty" type="text" required="">
          <label for="example2-card-name" data-tid="elements_examples.form.name_label">Card Name</label>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-6 input-field input cell">
          <div id="example2-card-number" class="input empty"></div>
          <label for="example2-card-number" data-tid="elements_examples.form.card_number_label">Card number</label>
          <div class="baseline"></div>
        </div>

        <div class="col col-6 input-field input cell">
          <div id="example2-card-expiry" class="input empty"></div>
          <label for="example2-card-expiry" data-tid="elements_examples.form.card_expiry_label">Expiration</label>
          <div class="baseline"></div>
        </div>
      </div>
      <div class="spacer"></div>
      <div class="row">
        <div class="col col-6 input-field input cell">
          <div id="example2-card-cvc" class="input empty"></div>
          <label for="example2-card-cvc" data-tid="elements_examples.form.card_cvc_label">CVC</label>
          <div class="baseline"></div>
        </div>
        <div class="col col-6 input-field input cell">
          <div id="example2-postalCode" class="input empty"></div>
          <label for="example2-postalCode" data-tid="elements_examples.form.postalCode_label">Postal Code</label>
          <div class="baseline"></div>
        </div>

        </div>
        <div class="spacer"></div>
      <div class="row no-gutters">
        <div class="col">
          <button class="btn waves-effect waves-dark w-100 leaner-green" type="submit" name="action">Pay £{{ filterPrice($freshSettings->freshStart_price) }}</button>
        </div>
      </div>
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
    </form>
  </div>
</div>

<div class="spacer"></div>
@endsection

@section('scripts')
  <script type="text/javascript">
  (function() {
    'use strict';
    var stripe = Stripe('pk_live_MqnQMb2pl1kLATEq1jo3wHKV');

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
  </script>
@endsection
