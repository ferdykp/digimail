<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientWed extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }
}
