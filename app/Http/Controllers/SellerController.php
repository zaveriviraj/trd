<?php

namespace App\Http\Controllers;

use App\seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sellers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sieves = collect(["+0000-000","+000-00","+00-0","+0-1.0","+1.0-1.5","+1.5-2.0","+2.0-2.5","+2.5-3.0","+3.0-3.5","+3.5-4.0","+4.0-4.5","+4.5-5.0","+5.0-5.5","+5.5-6.0","+6.0-6.5","+6.5-7.0","+7.0-7.5","+7.5-8.0","+8.0-8.5","+8.5-9.0","+9.0-9.5","+9.5-10.0","+10.0-10.5","+10.5-11.0","+11.0-11.5","+11.5-12.0","+12.0-12.5","+12.5-13.0","+13.0-13.5","+13.5-14.0","+14.0-14.5","+14.5-15.0","+15.0-15.5","+15.5-16.0","+16.0-16.5","+16.5-17.0","+17.0-17.5","+17.5-18.0","+18.0-18.5","+18.5-19.0","+19.0-19.5","+19.5-20.0"]);

        // return $sieves;
        return view('sellers.create', compact('sieves'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(seller $seller)
    {
        //
    }
}
