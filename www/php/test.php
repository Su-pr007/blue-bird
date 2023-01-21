<?php

function convert($str)
{
    $string = strtolower(trim($str));
    $number = 0;
    $reg = '/^M{0,3}(?:C[MD]|D?C{0,3})(?:X[CL]|L?X{0,3})(?:I[XV]|V?I{0,3})$/i';
    $result = preg_match($reg, $string);
    if ($result && trim($string) ){
        $array = str_split($string);
    }else{
        echo 'Неверное выражение';
        return false;
    }

    foreach ($array as &$item) {
        if ($item == 'm') {
            $item = 1000;
        } elseif ($item == 'd') {
            $item = 500;
        } elseif ($item == 'c') {
            $item = 100;
        } elseif ($item == 'l') {
            $item = 50;
        } elseif ($item == 'x') {
            $item = 10;
        } elseif ($item == 'v') {
            $item = 5;
        } elseif ($item == 'i') {
            $item = 1;
        }
//        array_push($new_array, $int);
    }
    var_dump($array);

    unset($item);


    foreach ($array as $item){
        var_dump($array);
        if (current($array) < next($array) ){
             $number -= $item;
        }else{
            $number += $item;
        }
    }

    return $number;
}

print_r(convert('iv'));
?>


