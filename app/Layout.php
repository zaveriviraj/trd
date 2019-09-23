<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    protected $fillable = ['name', 'hidden_columns', 'visible_columns', 'layout_order', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('personal', function (Builder $builder) {
            $builder->where('user_id', '=', auth()->id());
        });
    }

    public function searches()
    {
        return $this->hasMany(Search::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
