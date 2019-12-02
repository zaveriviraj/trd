<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $fillable = ['user_id', 'company_id'];

    public function favoritelist()
    {
        return $this->belongsTo(Favoritelist::class);
    }
}
