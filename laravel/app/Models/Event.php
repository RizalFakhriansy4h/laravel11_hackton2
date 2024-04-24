<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'thumbnail',
        'description',
        'slug',
        'creator_id',
        'speakers_id',
        'location',
        'start_datetime',
        'end_datetime',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function speakers()
    {
        return $this->hasMany(Speaker::class);
    }
}

