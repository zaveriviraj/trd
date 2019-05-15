<?php

namespace App\Http\Controllers;

use App\Cut;
use Illuminate\Http\Request;

class CutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuts = Cut::oldest('name')->get();
        return view('masters.cuts.index', compact('cuts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.cuts.create');
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

        Cut::create($request->all());

        return redirect()->route('cuts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cut  $cut
     * @return \Illuminate\Http\Response
     */
    public function show(Cut $cut)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cut  $cut
     * @return \Illuminate\Http\Response
     */
    public function edit(Cut $cut)
    {
        return view('masters.cuts.edit', compact('cut'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cut  $cut
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cut $cut)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $cut->update($request->all());

        return redirect()->route('cuts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cut  $cut
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cut $cut)
    {
        //
    }
}
