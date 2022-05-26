<?php

namespace App\Library;


class Response {

    static function redirectBack($type = null, $message = null){
        return redirect()->back()->with($type, $message);
    }

    static function redirect($to, $type = null, $message = null){
        return redirect($to)->with($type, $message);
    }

    static function intended($default, $key = null, $value = null){
        return redirect()->intended($default)->with($key, $value);
    }

    static function view($blade, $data = []){
        return response()->view($blade, $data);
    }

    static function json($code, $message = '', $data = []){
        return response()->json(array_merge([
            'message' => $message,
        ], $data), $code ?? 200);
    }
}
