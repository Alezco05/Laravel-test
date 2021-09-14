<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag_photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'tag_photos_idTag_photos'
    ];
}
