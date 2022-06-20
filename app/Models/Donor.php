<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model{
    use HasFactory;

    protected $fillable = ['name', 'company', 'image', 'type'];

    protected $attributes = [
        'status' => true
    ];
}
