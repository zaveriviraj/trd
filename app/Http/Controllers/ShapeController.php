<?php

namespace App\Http\Controllers;

use App\Shape;
use Illuminate\Http\Request;

class ShapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shapes = Shape::oldest('name')->get();
        return view('masters.shapes.index', compact('shapes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.shapes.create');
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

        Shape::create($request->all());

        return redirect()->route('shapes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function show(Shape $shape)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function edit(Shape $shape)
    {
        return view('masters.shapes.edit', compact('shape'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shape $shape)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $shape->update($request->all());

        return redirect()->route('shapes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shape  $shape
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shape $shape)
    {
        //
    }
}
