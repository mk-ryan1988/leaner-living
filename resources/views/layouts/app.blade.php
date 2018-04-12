<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fresh Start</title>

        @include('partials.styles')

    </head>
    <body>

      <div id="app" class="">
        @include('partials.navbar')
        {{-- <navbar></navbar> --}}
        <main>
          
          @yield('content')
        </main>
        @include('partials.footer')
      </div>

      @include('partials.scripts')
      @yield('scripts')
    </body>
</html>
