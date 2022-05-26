<?php

namespace App\Library;

class Number {

    static function percentageDecrease($percent, $value){
        $subtraction = ceil($percent) / 100 * ceil($value);
        return $value - $subtraction;
    }

    static function percentageValue($percent, $value){
        return $percent / 100 * $value;
    }
}
