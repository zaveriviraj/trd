<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];
    protected $with = ['user'];
    protected $appends = ['path'];

    public function getPathAttribute()
    {
        return route('notes.update', $this->id);
    }

    public function notable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
