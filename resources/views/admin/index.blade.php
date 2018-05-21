@extends('layouts.app-min')

@section('content')
  <ul id="adminDrop" class="dropdown-content">
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>
  </ul>

  <ul id="slide-out" class="sidenav">
    <div class="white z-depth-3 h-100">
      <div class="padding center-align">
        <img src="{{url('/images/fresh-start-colour.png')}}" style="height: 125px; width: auto; max-width: 100%;" alt="fresh start logo">
      </div>
      <ul class="collection nav">
        <a href="{{route('admin.overview')}}" class="collection-item {{isActive(url('admin/overview'))}}"><i class="material-icons left">dashboard</i><span>Overiew</span></a>
        <a href="{{route('admin.users')}}" class="collection-item {{isActive(url('admin/users'))}}"><i class="material-icons left">account_circle</i><span>Manage Starters</span></a>
        <a href="{{route('admin.settings')}}" class="collection-item {{isActive(url('admin/settings'))}}"><i class="material-icons left">settings</i> <span>Settings</span></a>
      </ul>
  </ul>

  <div class="view-height" style="overflow: auto">
    <div class="white z-depth-3 h-100 d-none d-lg-block" style="width: 300px; position: absolute; top: 0; left: 0; z-index: 99">
      <div class="padding center-align">
        <img src="{{url('/images/fresh-start-colour.png')}}" style="height: 125px; width: auto; max-width: 100%;" alt="fresh start logo">
      </div>
      <ul class="collection nav">
        <a href="{{route('admin.overview')}}" class="collection-item {{isActive(url('admin/overview'))}}"><i class="material-icons left">dashboard</i><span>Overiew</span></a>
        <a href="{{route('admin.users')}}" class="collection-item {{isActive(url('admin/users'))}}"><i class="material-icons left">account_circle</i><span>Manage Starters</span></a>
        <a href="{{route('admin.settings')}}" class="collection-item {{isActive(url('admin/settings'))}}"><i class="material-icons left">settings</i> <span>Settings</span></a>
      </ul>
    </div>
    <div id="admin-content" class="h-100">
      <nav class="gradient z-depth-0">
        <div class="nav-wrapper">
          <a href="#" data-target="slide-out" class="sidenav-trigger d-block d-lg-none clickable "><i class="material-icons white-text">menu</i></a>
          {{-- @if (Route::currentRouteName() == 'admin.userShow')
            <div class="left" style="padding-left: 15px; padding-right: 200px">
              <a href="{{route('admin.users')}}" class="breadcrumb">Manage Starters</a>
              <a class="breadcrumb">@if(isset($user)) {{$user->name}} @endif</a>
            </div>
          @endif --}}
          <ul id="nav-mobile" class="right">
            <li><a class="dropdown-trigger white-text" data-target="adminDrop">Hey, {{filterName(Auth::user()->name)}}<i class="material-icons white-text right">arrow_drop_down</i></a></li>
          </ul>
        </div>
      </nav>


      {{-- <div class="md-toolbar gradient right-align">

        <div class="d-block d-lg-none" style="position: absolute; left: 15px;">
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
        <ul class="right">

          <!-- Dropdown Trigger -->
        </ul>
      </div> --}}

      @yield('nested-content')

    </div>
  </div>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
      @csrf
  </form>

@endsection
