<?php
function basicStatistics(...$num)
{
    $array = [];
    $arra1 = [];
    $suma = 0;
    $min = 10000000;
    $max = 0;
    $count = 0;
    if (count($num) == 0) {
        return false;
    }
    for ($i = 0; $i < count($num); $i++) {
        $suma += $num[$i];
        if ($num[$i] < $min) {
            $min = $num[$i];
        }
        if ($num[$i] > $max) {
            $max = $num[$i];
        }
        if ($num[$i] < 0) {
            $count++;
        }
        if ($num[$i] % 2 != 0) {
            $arra1[] = $num[$i];
        }

    }
    $media = $suma / count($num);
    $array["suma"] = $suma;
    $array["max"] = $max;
    $array["min"] = $min;
    $array["media"] = $media;
    $array["neg"] = $count;
    $array["odd"] = $arra1;


    return $array;
}
function operations($numbers, $operation = "order", $incremental = true)
{
    $sum = 0;
    if ($operation == "sum") {
        $sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $sum += $numbers[$i];
        }
        return $sum;
        
    } else if ($operation == "product") {
        $mul =1;
        for ($i = 0; $i < count($numbers); $i++) {
            $mul *= $numbers[$i];
        }
        return $mul;
    } else {
        if ($incremental == false) {
            rsort($numbers);
            return $numbers;
        } else {
            sort($numbers);
            return $numbers;
        }
    }
}


?>