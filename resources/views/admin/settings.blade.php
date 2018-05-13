@extends('admin.index')

@section('nested-content')
  <div class="padding">
    <div class="row">
      <div class="col">
        <h5>Manage Fresh Start Settings</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card-panel z-depth-0 white">
          <form method="POST" action="/api/settings">
              @csrf
              <div class="row">
                <div class="col input-field input cell">
                  <input id="stripe_public" value="{{$settings->stripe_key_public}}" type="text" name="stripe_public" required="required">
                  <label for="stripe_public">Stripe Public Key</label>
                  @if ($errors->has('stripe_public'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('stripe_public') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col input-field input cell">
                  <input id="stripe_secret" value="{{$settings->stripe_key_secret}}" type="text" name="stripe_secret" required="required">
                  <label for="stripe_secret">Stripe Secret Key</label>
                  @if ($errors->has('stripe_secret'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('stripe_secret') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="row">
                <div class="col input-field input cell">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="limit" type="text" value="{{$settings->freshStart_users_limit}}" name="limit" required="required">
                  <label for="limit">Monthly Users Limit</label>
                  @if ($errors->has('limit'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('limit') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="col input-field input cell">
                  <i class="material-icons prefix">credit_card</i>
                  <input id="price" value="{{$settings->freshStart_price}}" type="text" name="price" required="required">
                  <label for="price">Current Price (£)</label>
                  @if ($errors->has('price'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('price') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Update') }}
                          <i class="material-icons right">send</i>
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
