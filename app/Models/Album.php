<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'description', 
        'member_idMember', 
        'location_iLocation', 
        'photo_idPhoto'
    ];
}
