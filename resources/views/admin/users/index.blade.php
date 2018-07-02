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
        @foreach ($users as $key => $user)
          <li class="collection-item avatar">
            <i class="material-icons circle green">account_circle</i>
            <span class="title">{{$user->name}}</span>
            <p>Commence Date:<br>
              @if ($user->payment)
                {{$user->payment->commence_at->format('M Y')}}
              @endif
            </p>

            <a href="{{route('admin.userShow', ['id' => $user->id])}}" class="secondary-content"><i class="material-icons">input</i></a>
          </li>
        @endforeach
        </ul>
      @endif
    </div>
  </div>
</div>

@endsection
