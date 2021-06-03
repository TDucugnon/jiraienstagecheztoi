<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'email',
        'content',
        'region',
        'ville',
        'user_id',
        'slug'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
