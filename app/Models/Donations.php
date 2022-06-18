<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Donations extends Model{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone', 'amount', 'purpose', 'status', 'reference'];

    protected $attributes = [
        'status' => 'pending'
    ];
}
