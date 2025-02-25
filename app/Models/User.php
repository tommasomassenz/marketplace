<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    protected $fillable = ['username','email','password','first_name','last_name','birth_day','registration_day','address','phone_number'];

    use HasFactory;
}
