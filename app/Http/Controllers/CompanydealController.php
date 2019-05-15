<?php

namespace App\Http\Controllers;

use App\Companydeal;
use Illuminate\Http\Request;

class CompanydealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companydeals = Companydeal::oldest('name')->get();
        return view('masters.companydeals.index', compact('companydeals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.companydeals.create');
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

        Companydeal::create($request->all());

        return redirect()->route('companydeals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companydeal  $companydeal
     * @return \Illuminate\Http\Response
     */
    public function show(Companydeal $companydeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companydeal  $companydeal
     * @return \Illuminate\Http\Response
     */
    public function edit(Companydeal $companydeal)
    {
        return view('masters.companydeals.edit', compact('companydeal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companydeal  $companydeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companydeal $companydeal)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $companydeal->update($request->all());

        return redirect()->route('companydeals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companydeal  $companydeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companydeal $companydeal)
    {
        //
    }
}
