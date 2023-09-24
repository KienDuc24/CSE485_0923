<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxlength = 0;
$maxlength_string = "";

foreach ($array as $str) {
    $length = strlen($str);
    if($length > $maxlength){
        $maxlength = $length;
        $maxlength_string = $str;
    }
}

echo "Chuỗi lớn nhất là " . $maxlength_string . " , độ dài = " . $maxlength . "<br>";

$minlength = PHP_INT_MAX;
$minlength_string = "";

foreach ($array as $str) {
    $length = strlen($str);
    if($length < $minlength){
        $minlength = $length;
        $minlength_string = $str;
    }
}

echo "Chuỗi lớn nhất là " . $minlength_string . ", độ dài = " . $minlength . "<br>";