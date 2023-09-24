<?php
function lower($arr) {
  foreach ($arr as &$item) {
    if (is_string($item)) {
      $item = strtolower($item);
    }
  }
  return $arr;
}

$arrs = ['1', 'B', 'C', 'E'];
$result = lower($arrs);
print_r($result);

$arrs = ['a', '0', 'null', 'false'];
$result = lower($arrs);
print_r($result);