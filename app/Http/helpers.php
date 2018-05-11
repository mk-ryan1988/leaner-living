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

      $myvalue = 'Test me more';
      $arr = explode(' ',trim($value));
      return $arr[0];
    }
}
