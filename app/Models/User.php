<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */

    protected $fillable = ['username','email','password','nome','cognome','ddn','ddr','indirizzo','numtelefono'];

    use HasFactory;
}
