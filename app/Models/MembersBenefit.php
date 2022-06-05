<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersBenefit extends Model{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'status'];


    protected $attributes = [
        'status' => true
    ];

}
