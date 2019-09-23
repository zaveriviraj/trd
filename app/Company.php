<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    // public function priority()
    // {
    //     return $this->belongsTo(Priority::class);
    // }

    // public function designation()
    // {
    //     return $this->belongsTo(Designation::class);
    // }

    public function companysize()
    {
        return $this->belongsTo(Companysize::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function companydeals()
    {
        return $this->belongsToMany(Companydeal::class)->withTimestamps();
    }

    public function cuts()
    {
        return $this->belongsToMany(Cut::class)->withTimestamps();
    }

    public function clarities()
    {
        return $this->belongsToMany(Clarity::class)->withTimestamps();
    }

    public function certs()
    {
        return $this->belongsToMany(Cert::class)->withTimestamps();
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

    public function shapes()
    {
        return $this->belongsToMany(Shape::class)->withTimestamps();
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class)->withTimestamps();
    }

    public function roughs()
    {
        return $this->belongsToMany(Rough::class)->withTimestamps();
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function companytypes()
    {
        return $this->belongsToMany(Companytype::class)->withTimestamps();
    }

    public function getPersonAttribute() {
        $person = $this->first_name . ' ' . $this->last_name;
        return ucwords(strtolower($person));
    }

    public function getNameAttribute() {
        return ucwords(strtolower($this->company_name));
    }

    public function getDivisionsAttribute()
    {
        $linksArray = [$this->rapnet ? 'RapNet' : '', $this->gia ? 'GIA' : '', $this->auctions ? 'Auctions' : '', $this->raplab ? 'RapLab' : '', $this->advt ? 'Advt' : ''];
        $linksArray = array_filter($linksArray, function($value) { return $value !== ''; });

        $linksArray = implode('/', $linksArray);
        
        return $linksArray;
    }

    public function getAssociationsAttribute()
    {
        $linksArray = [$this->rapnet ?: '', $this->gia ?: '', $this->auctions ?: '', $this->raplab ?: '', $this->advt ?: ''];
        $linksArray = array_filter($linksArray, function($value) { return $value !== ''; });

        $linksArray = implode('/', $linksArray);
        
        return $linksArray;
    }

    public function getRelationshipClassAttribute()
    {
        if ($this->relationship > 7)
        {
            return 'success';
        } else if ($this->relationship > 4)
        {
            return 'warning';
        } else
        {
            return 'danger';
        }
    }
}
