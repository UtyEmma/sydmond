<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'amount', 'purpose', 'status', 'reference'];

    protected $attributes = [
        'status' => 'pending'
    ];
}
