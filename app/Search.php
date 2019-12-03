<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    protected $fillable = ['name', 'search_query', 'user_id', 'layout_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function layout()
    {
        return $this->belongsTo(Layout::class);
    }
}
