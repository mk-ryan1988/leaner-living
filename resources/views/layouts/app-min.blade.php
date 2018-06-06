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
        <main>
          @yield('content')
        </main>
      </div>

      @include('partials.scripts')
      @yield('scripts')
    </body>
</html>
