<?php Header("Cache-Control: max-age=3000, must-revalidate"); ?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- To stop caching issue --}}
        <meta http-equiv=“Pragma” content=”no-cache”>
        <meta http-equiv=“Expires” content=”-1″>
        <meta http-equiv=“CACHE-CONTROL” content=”NO-CACHE”>

        <title>Leaner Living</title>

        @include('partials.styles')
        
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '219463435182651');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=219463435182651&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

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
