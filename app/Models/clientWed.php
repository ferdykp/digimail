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
        'wedding_date',
        'location',
        'map_link',
        'pictwed',
        'story',
        'norek',
        // 'confirm',
        // 'greetingsAud'
    ];
}
