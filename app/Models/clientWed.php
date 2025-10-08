<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class clientWed extends Model
{
    protected $fillable = [
        'slug',
        'groom',
        'groomParents',
        'bride',
        'brideParents',
        'weddingDate',
        'location',
        'mapLink',
        'pictwed',
        'story',
        'norek',
        // 'confirm',
        // 'greetingsAud'
    ];
}
