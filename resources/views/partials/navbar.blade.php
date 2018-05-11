<!-- Dropdown Structure -->
<ul id="fresh-start" class="dropdown-content">
  <li><a href="{{ route('fresh-start.about')}}">About Fresh Start</a></li>
  <li><a href="{{url('/fresh-start/par-q')}}">Sign up</a></li>
  <li><a href="{{ route('login')}}">Login</a></li>
</ul>
<ul id="auth" class="dropdown-content">
  <li><a href="{{ route('fresh-start.dashboard')}}">Dashboard</a></li>
  <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>
</ul>

<div class="" style="">
  <nav class="transparent z-depth-0" style="position: absolute; top: 0px; z-index: 2;">
    <div class="nav-wrapper container">
      <a href="{{ route('home')}}" class="brand-logo">
        {{-- <img src="http://leaner-living.com/wp-content/uploads/2016/12/LEANER-LIVING-LOGO-1.png" alt="leaner-living.com" id="logo"
        style="height: 50px; vertical-align: middle;"> --}}
      </a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a class="dropdown-trigger" href="#!" data-target="fresh-start">Fresh Start<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="{{url('/#contact-form')}}">Contact us</a></li>
        @if (Auth::user())
          <li><a class="dropdown-trigger" href="#!" data-target="auth">Hi, {{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
        @endif
      </ul>
    </div>
  </nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
    @csrf
</form>
</div>

<ul class="sidenav collapsible" id="mobile-demo">
  @if (Auth::user())
    <li class="bold"><a class="collapsible-header waves-effect waves-teal">Hi, {{ Auth::user()->name }}<i class="material-icons right">keyboard_arrow_down</i></a>
      <div class="collapsible-body" style="">
        <ul>
          <li><a href="">Dashboard</a></li>
          <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">Logout</a></li>
        </ul>
      </div>
    </li>
  @endif
  <li><a class="collapsible-header waves-effect waves-teal" href="{{ route('home')}}">Home</a></li>
  {{-- <li><a class="collapsible-header waves-effect waves-teal" href="{{ route('about')}}">About us</a></li> --}}
  <li class="bold"><a class="collapsible-header waves-effect waves-teal">Fresh Start <i class="material-icons right">keyboard_arrow_down</i></a>
    <div class="collapsible-body" style="">
      <ul>
        <li><a href="{{ route('fresh-start.about')}}">About Fresh Start</a></li>
        <li><a href="{{url('/fresh-start/par-q')}}">Sign up</a></li>
        <li><a href="{{ route('login')}}">Login</a></li>
      </ul>
    </div>
  </li>
  <li><a class="collapsible-header waves-effect waves-teal" href="{{url('/#contact-form')}}">Contact us</a></li>
</ul>
