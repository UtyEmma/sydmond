<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model{
    use HasFactory;

    protected $fillable = ['unique_id', 'title', 'content', 'status'];

    protected $primaryKey = 'unique_id';
    protected $keyType = 'string';

    public $incrementing = false;

    protected $attributes = [
        'status' => true
    ];

}
