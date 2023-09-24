<?php
    $keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
    );
    $values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
    );

    $keyA = $keys["field1"];
    $keyB = $keys["field2"];
    $keyC = $keys["field3"];

    $valueA = $values["field1value"];
    $valueB = $values["field2value"];
    $valueC = $values["field3value"];

    $keyAndValues =[$keyA=> $valueA, $keyB=> $valueB, $keyC=> $valueC];

    echo'$keysAndValues = <pre>';
    print_r($keyAndValues );
    echo "</pre>";