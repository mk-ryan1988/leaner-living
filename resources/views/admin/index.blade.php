@extends('layouts.app-min')

@section('content')
  <ul id="adminDrop" class="dropdown-content">
    <li><a href="{{url('/')}}">Home</a></li>
      <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>
  </ul>
  <div class="view-height">
    <div class="white z-depth-3 h-100" style="width: 300px; position: absolute; top: 0; left: 0; z-index: 99">
      <div class="padding center-align">
        <img src="{{url('/images/fresh-start-colour.png')}}" style="height: 125px; width: auto; max-width: 100%;" alt="fresh start logo">
      </div>
      <ul class="collection nav">
        <a href="{{route('admin.overview')}}" class="collection-item {{isActive(url('admin/overview'))}}"><i class="material-icons left">dashboard</i><span>Overiew</span></a>
        <a href="{{route('admin.users')}}" class="collection-item {{isActive(url('admin/users'))}}"><i class="material-icons left">account_circle</i><span>Manage Starters</span></a>
        <a href="{{route('admin.settings')}}" class="collection-item {{isActive(url('admin/settings'))}}"><i class="material-icons left">settings</i> <span>Settings</span></a>
      </ul>
    </div>
    <div class="h-100" style="width: calc(100% - 300px); heigth: calc(100vh - 64px); margin-left: 300px; overflow: auto;">
      <div class="md-toolbar gradient right-align">
        @if (Route::currentRouteName() == 'admin.userShow')
          <div class="" style="position: absolute; left: 15px;">
            <a href="{{route('admin.users')}}" class="breadcrumb">Manage Starters</a>
            <a class="breadcrumb">@if(isset($user)) {{$user->name}} @endif</a>
          </div>
        @endif
        <ul class="right">
          {{-- <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li> --}}
          <!-- Dropdown Trigger -->
          <li><a class="dropdown-trigger" data-target="adminDrop">Hey, {{filterName(Auth::user()->name)}}<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>

      @yield('nested-content')

    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
      @csrf
  </form>

@endsection
