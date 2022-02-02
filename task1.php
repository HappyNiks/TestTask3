<?php

function minMax(array $arr){
    $min = 0;
    $max = 0;
    $count = 1;
    for ($i = 0; $i < count($arr); $i++){
        if ($arr[$i] > 1){
            if ($count <= 4){
                $min += $arr[$i];
            }
            if ($count > 1){
                $max += $arr[$i];
            }
            $count++;
        }
        else{
            throw new Exception("Нецелое число");
        }
    }
    return [
        $min, $max
    ];
}
$array = array(2,3,4,5,6);
$out = minMax($array);
echo "Result: " . $out[0]. ", " . $out[1];