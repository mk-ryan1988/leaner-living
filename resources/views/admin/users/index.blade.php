@extends('admin.index')

@section('nested-content')
<div class="padding view-height overflow">
  <div class="row">
    <div class="col">
      <h5>Manage Fresh Starters</h5>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      @if (count($users) > 0)
        <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle green">account_circle</i>
            <span class="title">{{$users->name}}</span>
            <p>Commence Date:<br>
              {{$users->payment->commence_at->format('M Y')}}
            </p>

            <a href="{{route('admin.userShow', ['id' => 1])}}" class="secondary-content"><i class="material-icons">input</i></a>
          </li>
        </ul>
      @endif
    </div>
  </div>
</div>

@endsection
