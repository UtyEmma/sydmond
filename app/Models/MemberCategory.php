<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberCategory extends Model{
    use HasFactory;

    protected $fillable = ['category', 'description', 'status'];


    protected $attributes = [
        'status' => true
    ];
}
