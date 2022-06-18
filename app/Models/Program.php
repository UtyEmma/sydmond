<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'content', 'image', 'status', 'slug'];

    protected $attributes = [
        'status' => true
    ];
}
