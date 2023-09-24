<?php
function upper($arr) {
  foreach ($arr as &$item) {
    if (is_string($item)) {
      $item = strtoupper($item);
    }
  }
  return $arr;
}

$arrs = ['1', 'b', 'c', 'd'];
$result = upper($arrs);
print_r($result);

$arrs = ['a', '0', 'null', 'false'];
$result = upper($arrs);
print_r($result);