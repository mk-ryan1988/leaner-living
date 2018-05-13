<?php


if (! function_exists('isActive')) {
    function isActive($value, $default = null) {

        $route = url()->current();
        if ($value == $route) {
          return 'gradient active';
        } elseif (str_contains($route, $value)) {
          return 'gradient active';
        }
    }
}
if (! function_exists('filterName')) {
    function filterName($value, $default = null) {

      $arr = explode(' ',trim($value));
      return $arr[0];
    }
}
if (! function_exists('filterPrice')) {
    function filterPrice($value, $default = null) {

      return number_format( $value / 100, 2 );
    }
}
