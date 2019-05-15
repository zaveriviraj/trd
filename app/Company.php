<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'priority_id', 'name', 'email', 'phone', 'website', 'companysize_id', 'companytype_id', 'promotions', 'brands', 'rapnet', 'gia', 'auctions', 'raplab', 'advt', 'contact_name_1', 'contact_name_2', 'contact_name_3', 'contact_name_4', 'contact_title_1', 'contact_title_2', 'contact_title_3', 'contact_title_4', 'contact_email_1', 'contact_email_2', 'contact_email_3', 'contact_email_4', 'contact_mobile_1', 'contact_mobile_2', 'contact_mobile_3', 'contact_mobile_4', 'contact_comments', 'address', 'city', 'zip', 'state_id', 'rough', 'sight_holder', 'sight_details', 'tender_details', 'rough_deals', 'size_comments', 'shape_comments', 'colors', 'color_comments', 'clarity_comments', 'cut_comments', 'certs_comments', 'branches_comments', 'products_comments', 'jewelry_manufacturing', 'jewelry_locations', 'jewelry_comments'
    ];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function companysize()
    {
        return $this->belongsTo(Companysize::class);
    }

    public function companytype()
    {
        return $this->belongsTo(Companytype::class);
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

    public function sizes()
    {
        return $this->belongsToMany(Size::class)->withTimestamps();
    }
}
