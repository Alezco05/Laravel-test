<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    public $table = "member";
    protected $fillable = [
        'email', 
        'password', 
        'name', 
        'phoneNum', 
        'address', 
        'role_idRole'
    ];
}
