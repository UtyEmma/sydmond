<?php

namespace App\Library;

use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class DateTime {

    static function getDateInterval($date){
        return Carbon::parse($date)->diffForHumans();
    }

    static function getExpiringDate($duration){
        $dt = Date::today()->addDays($duration);
        $new_dt = Date::create($dt->year, $dt->month, $dt->day);
        return $new_dt->toFormattedDateString();
    }

    static function getCurrentDate(){
        $dt = Date::today();
        $new_dt = Date::create($dt->year, $dt->month, $dt->day);
        return $new_dt->toFormattedDateString();
    }

    static function parseTimestamp($timestamp){
        $dt = Carbon::createFromFormat('Y-m-d H:i:s', $timestamp);
        return json_decode(json_encode([
            'date' => $dt->format('jS F Y'),
            'time' => $dt->format('g:i A')
        ]));
    }

    static function createFromFormat($format, $date){
        $dt = Date::createFromFormat($format, $date);
        return Arr::toObject([
            'date' => $dt->format('jS F Y'),
            'time' => $dt->format('g:i A')
        ]);
    }

    static function timeDiffInHours($first, $second){
        $first = Date::create($first);
        $second = Date::create($second);
        return $first->diffInHours($second);
    }

    static function timeInterval($first, $second){
        $second = Date::parse($second);
        return $second->diffForHumans($first);
    }

    static function dateDiff($first, $second = null, $format = "Y-m-d H:i:s"){
        $first = Date::create($first);
        $second = Date::create($second ?? now());
        return $first->diffInDays($second);
    }
}
