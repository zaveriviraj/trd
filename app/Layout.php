<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $fillable = ['name', 'hidden_columns', 'visible_columns', 'layout_order'];

    public function searches()
    {
        return $this->hasMany(Search::class);
    }
}
