<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Fresh Start</title>

        @include('partials.styles')

    </head>
    <body>

      <div id="app" class="">
          @include('partials.navbar')
        <main>
          @yield('content')
        </main>
          @include('partials.footer')
      </div>

        @include('partials.scripts')

        @if(session()->has('alert'))
          @include('partials.alert')
        @endif

        @yield('scripts')
    </body>
</html>
