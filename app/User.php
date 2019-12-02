<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function layouts()
    {
        return $this->hasMany(Layout::class);
    }

    public function favoritelists()
    {
        return $this->hasMany(Favoritelist::class);
    }

    public function relations()
    {
        return $this->hasMany(Relation::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
