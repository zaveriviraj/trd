<?php

namespace App\Http\Controllers;

use App\Company;
use App\Favorite;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $companies = Company::with(
            'companysize',
            'companytypes',
            'companydeals',
            'state',
            'shapes',
            'certs',
            'products',
            'roughs',
            'favorites'
        )->whereHas('favorites', function($query) {
            $query->where('user_id', auth()->id());
        })->get();
        return view('companies.index', compact('companies'));
    }

    public function create(Company $company)
    {
        $attributes = ['user_id' => auth()->id()];
        if (! $company->favorites()->where($attributes)->exists()) {
            $company->favorites()->create($attributes);
        }
        return redirect()->back();
    }

    public function remove(Company $company)
    {
        $attributes = ['user_id' => auth()->id()];
        $company->favorites()->where($attributes)->get()->each->delete();
        return redirect()->back();
    }

    public function multiple()
    {
        $inserts = [];
        foreach (request()->company_ids as $company) {
            $attributes = ['user_id' => auth()->id(), 'company_id' => $company];
            array_push($inserts, $attributes);
        }
        

        Favorite::insertOrIgnore($inserts);

        return 'success';
    }

    public function removeMultiple()
    {
        foreach (request()->company_ids as $company) {
            $company = Company::find($company);
            $attributes = ['user_id' => auth()->id()];
            $company->favorites()->where($attributes)->get()->each->delete();
        }

        return 'success';
    }
}
