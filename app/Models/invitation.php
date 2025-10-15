<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_wed_id',
        'name',
        'noWa',
        'is_attending',
        'message'
    ];

    public function clientWed()
    {
        return $this->belongsTo(ClientWed::class);
    }
}
