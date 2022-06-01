<?php

namespace App\Library;

use Exception;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class FileHandler {

    static function upload($file, $path, $name){
        try {
            $ext = $file->getClientOriginalExtension();
            $imageName = Str::slug($name).'.'.$ext;
            $file->move(public_path($path), $imageName);

        return "$path/$imageName";
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    static function deleteFiles(array $files){
        foreach ($files as $file) {
            self::deleteFile($file);
        }
    }

    static function deleteFile($file){
        if ($file) {
            $cloudinary_id = self::extractFileId($file);
        }
    }

    private static function extractFileId($file){
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        return basename($file, $ext);
    }


}
