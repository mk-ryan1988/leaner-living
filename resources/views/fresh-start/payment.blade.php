@extends('layouts.auth')


@section('content')

<div class="row">
  <div class="col-12">
    <ul class="stepper horizontal w-100" id="horizontal">
      <li class="step done">
        <div data-step-label="" class="step-title waves-effect waves-dark"> <a href="#">Register</a> </div>
      </li>
      <li class="step active">
        <div class="step-title waves-effect waves-dark"><a href="#">Payment</a></div>
      </li>
      <li class="step">
        <div class="step-title waves-effect waves-dark"><a href="#">Questionnaire</a></div>
      </li>
    </ul>
  </div>
</div>
<div class="row align-items-center justify-content-center stepper-content">
  <div class="col-12 col-md-6">
    <img src="{{url('/images/fresh-start-colour.png')}}" alt="" style="height: 200px; width: auto;">
    <h2>Welcome, {{Auth::user()->name}}</h2>
    <form action="/api/charge" method="post" id="stripe-form">

      <div class="row">
        <div class="col-12 col input-field input cell">
          <input id="example2-address" data-tid="elements_examples.form.address_placeholder" class="input empty" type="text" required="">
          <label for="example2-address" data-tid="elements_examples.form.address_label">Address</label>
        </div>
      </div>
      <div class="row" data-locale-reversible>
        <div class="col-6 col input-field input cell">
          <input id="example2-city" data-tid="elements_examples.form.city_placeholder" class="input empty" type="text"  required="">
          <label for="example2-city" data-tid="elements_examples.form.city_label">City</label>
        </div>
        <div class="col-3 col input-field input cell">
          <input id="example2-county" data-tid="elements_examples.form.county_placeholder" class="input empty" type="text"  required="">
          <label for="example2-county" data-tid="elements_examples.form.county_label">County</label>
        </div>
        <div class="col-3 col input-field input cell">
          <input id="example2-zip" data-tid="elements_examples.form.postal_code_placeholder" class="input empty" type="text"  required="">
          <label for="example2-zip" data-tid="elements_examples.form.postal_code_label">Post Code</label>
        </div>
      </div>

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

        </div>
        <div class="spacer"></div>
      <div class="row no-gutters">
        <div class="col">
          <button class="btn waves-effect waves-light w-100 leaner-green" type="submit" name="action">Pay £---</button>
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
      locale: window.__exampleLocale
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

      // Submit the form
      form.submit();
    }

  })();
  </script>
@endsection
