<?php

namespace App\Http\Controllers;

use App\Companytype;
use Illuminate\Http\Request;

class CompanytypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companytypes = Companytype::oldest('name')->get();
        return view('masters.companytypes.index', compact('companytypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.companytypes.create');
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

        Companytype::create($request->all());

        return redirect()->route('companytypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Companytype  $companytype
     * @return \Illuminate\Http\Response
     */
    public function show(Companytype $companytype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Companytype  $companytype
     * @return \Illuminate\Http\Response
     */
    public function edit(Companytype $companytype)
    {
        return view('masters.companytypes.edit', compact('companytype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Companytype  $companytype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Companytype $companytype)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $companytype->update($request->all());

        return redirect()->route('companytypes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Companytype  $companytype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Companytype $companytype)
    {
        //
    }
}
