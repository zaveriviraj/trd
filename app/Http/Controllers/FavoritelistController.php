<?php

namespace App\Http\Controllers;

use App\Company;
use App\Favoritelist;
use Illuminate\Http\Request;

class FavoritelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Favoritelist::where('user_id', auth()->id())->with('favorites')->latest()->get();
        return view('masters.favoritelists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.favoritelists.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        auth()->user()->favoritelists()->create(['name' => $request->name]);

        return redirect()->route('favoritelists.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favoritelist  $favoritelist
     * @return \Illuminate\Http\Response
     */
    public function show(Favoritelist $favoritelist)
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
        )->whereHas('favorites', function($query) use ($favoritelist) {
            $query->where('favoritelist_id', $favoritelist->id);
        })->get();
        return view('companies.index', compact('companies', 'favoritelist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favoritelist  $favoritelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Favoritelist $favoritelist)
    {
        return view('masters.favoritelists.edit', compact('favoritelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favoritelist  $favoritelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favoritelist $favoritelist)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $favoritelist->update(['name' => $request->name]);

        return redirect()->route('favoritelists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favoritelist  $favoritelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favoritelist $favoritelist)
    {
        $favoritelist->favorites()->delete();
        $favoritelist->delete();

        return redirect()->route('favoritelists.index');
    }
}
