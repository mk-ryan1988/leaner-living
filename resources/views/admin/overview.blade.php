@extends('admin.index')

@section('nested-content')

  <div class="row">
    <div class="col">
      <ul class="collection">

        @if (count($alerts) > 0)
          @foreach ($alerts as $key => $alert)
            <li class="collection-item avatar ">
            <i class="material-icons circle red accent-2">notifications_active</i>
            <span class="title">Failed PAR-Q</span>
            <p>{{$alert->name}}<br>
             <a href="mailto:{{$alert->email}}">{{$alert->email}}</a>
            </p>
              <a href="{{route('admin.parq', ['id' => $alert->id])}}" class="secondary-content"><i class="material-icons">input</i></a>
            </li>
          @endforeach
        @endif

      </ul>
    </div>
  </div>

@endsection
