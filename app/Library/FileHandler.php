<?php

namespace App\Library;

use Exception;
use App\Library\Str;
use Illuminate\Support\Facades\Date;

class FileHandler {

    static function upload($file, $path, $name){
        $ext = $file->getClientOriginalExtension();
        $randStr = Date::now();
        $imageName = Str::slug("$name-$randStr").'.'.$ext;
        $file->move(public_path($path), $imageName);
        return "$path/$imageName";
    }

    static function update($file, $path, $name, $oldFilePath){
        $oldFilePath && self::deleteFile($oldFilePath);
        return  self::upload($file, $path, $name);
    }

    static function deleteFiles(array $files){
        foreach ($files as $file) {
            self::deleteFile($file);
        }
    }

    static function deleteFile(string | null $file){
        if(!$file) return;
        $path = public_path($file);
        if(file_exists($path)) unlink($path);
    }

    private static function extractFileId($file){
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        return basename($file, $ext);
    }


}
