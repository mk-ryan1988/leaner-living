@extends('layouts.app')


@section('content')
  <div class="view-height valign-wrapper center-align">
    <form action="your-server-side-code" method="POST">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_xFpY5YYGorzCtPmELc8Sop3X"
        data-amount="999"
        data-name="The Webteam"
        data-description="Example charge"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-currency="gbp">
      </script>
    </form>
  </div>
@endsection

@section('scripts')
  <script src="https://js.stripe.com/v3/"></script>
@endsection
