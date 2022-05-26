<?php

namespace App\Library;

class Arr {

    static function toObject($arr){
        return json_decode(json_encode($arr));
    }

}
