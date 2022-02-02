<?php

function minSide($x, $y){
    if ($x < $y){
        return $x;
    }
    else if ($x > $y){
        return $y;
    }
    else{
        return $x;
    }
}

function Slice($x, $y){
    if (($x >= 2 && $x <= 1000) && ($y >= 2 && $y <= 1000)){
        $square = $x * $y;
        $minSide = minSide($x, $y);
        $maxSlice = 0;
        for ($i = 2; $i <= $minSide; $i++){
            $sliceSquare = $i * $i;
            $slices = $square / $sliceSquare;
            if ($slices > $maxSlice && (int)$slices == $slices){
                $maxSlice = $slices;
            }
        }
        if ($maxSlice == 0){
            return "Невозможно разрезать без остатка";
        }
        return $maxSlice;
    }
    else{
        throw new Exception("Нарушение условия");
    }
}

echo "Result: ".Slice(2, 5);