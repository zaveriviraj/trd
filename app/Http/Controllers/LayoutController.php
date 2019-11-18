<?php

namespace App\Http\Controllers;

use App\Layout;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layouts = Layout::latest()->withCount('searches')->get();
        return view('layouts.index', compact('layouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
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

        // Layout::create($request->all());
        auth()->user()->layouts()->create($request->all());

        return redirect()->route('layouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function show(Layout $layout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function edit(Layout $layout)
    {
        return view('layouts.edit', compact('layout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layout $layout)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $layout->fill($request->all());
        $layout->save();

        return redirect()->route('layouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Layout  $layout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layout $layout)
    {
        if (! count($layout->searches)) {
            $layout->delete();
        }

        return back();
    }
}
