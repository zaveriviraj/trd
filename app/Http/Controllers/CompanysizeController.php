<?php

namespace App\Http\Controllers;

use App\Companysize;
use Illuminate\Http\Request;

class CompanysizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companysizes = Companysize::oldest('name')->get();
        return view('masters.companysizes.index', compact('companysizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.companysizes.create');
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

        Companysize::create($request->all());

        return redirect()->route('companysizes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companysize  $companysize
     * @return \Illuminate\Http\Response
     */
    public function show(Companysize $companysize)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companysize  $companysize
     * @return \Illuminate\Http\Response
     */
    public function edit(Companysize $companysize)
    {
        return view('masters.companysizes.edit', compact('companysize'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companysize  $companysize
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companysize $companysize)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $companysize->update($request->all());

        return redirect()->route('companysizes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companysize  $companysize
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companysize $companysize)
    {
        //
    }
}
