<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model{
    use HasFactory;

    protected $fillable = ['unique_id', 'name', 'role', 'email', 'phone', 'image', 'status'];

    protected $attributes = [
        'status' => true
    ];
}
