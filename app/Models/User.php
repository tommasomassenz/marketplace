<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    protected $fillable = ['username','email','password','name','surname','birth_date','ddr','address','phone_number'];

    use HasFactory;
}
