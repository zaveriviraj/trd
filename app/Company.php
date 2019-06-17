<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'priority_id','name','owner_name','owner_designation','landline','mobile','email','website','companysize_id','exhibitions','brands','rapnet','gia','auctions','raplab','advt','other_landline','other_mobile','other_email','contact_comments','deals_comments','manufacturing_units','company_comments','address','city','zip','state_id','rough_details','sight_details','size_comments','shape_comments','color_comments','clarity_comments','cut_comments','certs_comments','branches_comments','products_comments','jewelry_manufacturing','jewelry_locations','jewelry_comments'
    ];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function companysize()
    {
        return $this->belongsTo(Companysize::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
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

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }

    public function companytypes()
    {
        return $this->belongsToMany(Companytype::class)->withTimestamps();
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
}
