<?php

namespace App\Services;

use App\Notifications\GeneralNotification;
use Illuminate\Support\Facades\Notification;

class NotificationService {

    private $message = [];
    private $subject;
    private $data;

    function toArray(string $title, string $link = '', string $action = ''){
        return  [
            'title' => $title,
            'link' => $link,
            'action' => $action
        ];
    }

    function data(string $title, string $link = '', string $action = ''){
        $this->data = $this->toArray($title, $link, $action);
        return $this;
    }

    private function parse($type, $data){
        $this->message[] = [
            'type' => $type,
            'value' => $data
        ];
    }

    function send($receivers, $channels){
        $data = array_merge($this->toArray($this->subject), $this->data);
        Notification::send($receivers, new GeneralNotification($this->subject, $channels, $this->message, $data));
    }

    function text($text){
        $this->parse('text', $text);
        return $this;
    }

    function code($text){
        $this->parse('code', $text);
        return $this;
    }

    function goodbye($text){
        $this->parse('goodbye', $text);
        return $this;
    }

    function subject($subject){
        $this->subject = $subject;
        return $this;
    }

    function action($action, $link){
        $this->parse('action', [
            'action' => $action,
            'link' => $link
        ]);
        return $this;
    }

    function image($image){
        $this->parse('image', $image);
        return $this;
    }

    function greeting($greeting){
        $this->parse('greeting', $greeting);
        return $this;
    }
}

