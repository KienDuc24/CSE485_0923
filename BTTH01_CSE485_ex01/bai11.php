<?php
$array = array(1, 2, 3, 4, 5);
$keyToRemove = 2;

array_splice($array, $keyToRemove, 1);

echo "<pre>";
var_dump($array);
echo "</pre>";