<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{

    protected $fillable = ['fullname','email','mobile','password','otp'] ;

    protected $attributes = [
        'otp' => '0'
    ];
    protected $hidden = ['password', 'otp'];
}
