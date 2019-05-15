<?php

namespace App\Http\Controllers;

use App\Clarity;
use Illuminate\Http\Request;

class ClarityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clarities = Clarity::oldest('name')->get();
        return view('masters.clarities.index', compact('clarities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.clarities.create');
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

        Clarity::create($request->all());

        return redirect()->route('clarities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clarity  $clarity
     * @return \Illuminate\Http\Response
     */
    public function show(Clarity $clarity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clarity  $clarity
     * @return \Illuminate\Http\Response
     */
    public function edit(Clarity $clarity)
    {
        return view('masters.clarities.edit', compact('clarity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clarity  $clarity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clarity $clarity)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $clarity->update($request->all());

        return redirect()->route('clarities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clarity  $clarity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clarity $clarity)
    {
        //
    }
}
