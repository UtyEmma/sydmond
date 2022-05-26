<?php

namespace App\Library;

class Links {
    static function youtubeEmbedded($link){
        // preg_match('/[\?\&]v=([^\?\&]+)/', $link, $matches);
        $string = preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "https://www.youtube.com/watch/$2",
            $link
        );
        // return "https://www.youtube.com/embed/$matches[1]";
        return $string;
    }
}
