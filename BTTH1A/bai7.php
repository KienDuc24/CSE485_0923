<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

foreach($array as $arr){
    if ($arr >= 100 && $arr <= 200){
        if($arr % 5 == 0){
            echo $arr ." ";
        }
    }
}