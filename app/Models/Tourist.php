<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourist extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'password',
        'email',
        'phone_number'
    ];
    protected $table =  'tourists';
}
