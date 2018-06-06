<?php Header("Cache-Control: max-age=3000, must-revalidate"); ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Leaner Living</title>

        @include('partials.styles')

    </head>
    <body>

      <div id="app" class="">
          @include('partials.navbar')
        <main>
          @yield('content')
        </main>

          @if ( str_contains(url()->current(), 'members'))
            @include('partials.bottom-nav')
          @endif

          @include('partials.footer')
      </div>

        @include('partials.scripts')

        @if(session()->has('alert'))
          @include('partials.alert')
        @endif

        @yield('scripts')
    </body>
</html>
