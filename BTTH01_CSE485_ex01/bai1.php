<?php 
$arrs = [2,5,6,9,2,5,6,12,5];

function tong($arrs){
    $tong =$arrs[0];
    for($i=1;$i<count($arrs);$i++){
        $tong= $tong + $arrs[$i];
    }
    echo"Tổng các phần tử = ";
    echo $arrs[0];
    for($i=1;$i<count($arrs);$i++) {
        echo "+";
        echo $arrs[$i];
    }
    echo " = ".$tong;
}

function tich($arrs){
    $tich =$arrs[0];
    for($i=1;$i<count($arrs);$i++){
        $tich= $tich * $arrs[$i];
    }
    echo"Tích các phần tử = ";
    echo $arrs[0];
    for($i=1;$i<count($arrs);$i++) {
        echo "*";
        echo $arrs[$i];
    }
    echo " = ".$tich;
}

function hieu($arrs){
    $hieu =$arrs[0];
    for($i=1;$i<count($arrs);$i++){
        $hieu= $hieu - $arrs[$i];
    }
    echo"Hiệu các phần tử = ";
    echo $arrs[0];
    for($i=1;$i<count($arrs);$i++) {
        echo "-";
        echo $arrs[$i];
    }
    echo " = ".$hieu;
}

function thuong($arrs){
    $thuong =$arrs[0];
    for($i=1;$i<count($arrs);$i++){
        $thuong= $thuong / $arrs[$i];
    }
    echo"Thương các phần tử = ";
    echo $arrs[0];
    for($i=1;$i<count($arrs);$i++) {
        echo "/";
        echo $arrs[$i];
    }
    echo " = ".$thuong;
}

echo tong($arrs). "<br/>";
echo tich($arrs). "<br/>";
echo thuong($arrs). "<br/>";
echo hieu($arrs). "<br/>";