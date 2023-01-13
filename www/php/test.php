<?php

function convert($str)
{
    $string = strtolower(trim($str));
    $new_array = [];
    $number = 0;
    $reg = '/^M{0,3}(?:C[MD]|D?C{0,3})(?:X[CL]|L?X{0,3})(?:I[XV]|V?I{0,3})$/i';
    $result = preg_match($reg, $string);
    if ($result && trim($string) ){
        $array = str_split($string);
    }else{
        echo 'Неверное выражение';
        return false;
    }


    foreach ($array as $item){

    }

    foreach ($array as $item) {
        if ($item == 'm') {
            $int = 1000;
        } elseif ($item == 'd') {
            $int = 500;
        } elseif ($item == 'c') {
            $int = 100;
        } elseif ($item == 'l') {
            $int = 50;
        } elseif ($item == 'x') {
            $int = 10;
        } elseif ($item == 'v') {
            $int = 5;
        } elseif ($item == 'i') {
            $int = 1;
        }
        array_push($new_array, $int);
    }



    foreach ($new_array as $item){
        if (current($new_array) < next($new_array) ){
             $number -= $item;
        }else{
            $number += $item;
        }
    }

    return $number;
}

print_r(convert('MCMXCIV'));
?>


