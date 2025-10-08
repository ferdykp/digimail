<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invitation extends Model
{
    protected $fillable = [
        'invitation_id',
        'name',
        'noWa',
        'is_attending',
        'message',
    ];
}
