<?php
$a = [
    'a' => [
    'b' => 0,
    'c' => 1
    ],
    'b' => [
    'e' => 2,
    'o' => [
    'b' => 3
    ]
    ]
    ];
    // ❖ Hãy lấy giá trị = 3 mà có key là b từ mảng trên
    // ❖ Hãy lấy giá trị = 1 mà có key là c từ mảng trên
    // ❖ Hãy lấy thông tin của phần tử có key là a

    $valueB = $a['b']['o']['b'];

    $valueC = $a['a']['c'];

    $valueA = $a['a'];

    echo "Giá trị có key b là $valueB <br>";
    echo "Giá trị có key c là $valueC <br>";
    echo "Thông tin của phần tử có key a:<pre>";
    print_r($valueA);
    echo "</pre>";