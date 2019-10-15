<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $companies = auth()->user()->favorites()->with(
            'companysize',
            'companytypes',
            'companydeals',
            'state',
            'shapes',
            'certs',
            'products',
            'roughs'
        )->get();
        return view('companies.index', compact('companies'));
    }

    public function create(Company $company)
    {
        $company->favorited()->sync(auth()->id());
        return redirect()->back();
    }

    public function remove(Company $company)
    {
        $company->favorited()->detach(auth()->id());
        return redirect()->back();
    }
}
