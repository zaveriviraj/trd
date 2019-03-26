<?php

namespace App\Http\Controllers;

use App\buyer;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('buyers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = collect([
            ['mm' => '0.80', 'sieve' => '+0000-000', 'carat' => '0.003'],
            ['mm' => '0.90', 'sieve' => '+000-00', 'carat' => '0.004'],
            ['mm' => '1.00', 'sieve' => '+00-0', 'carat' => '0.005'],
            ['mm' => '1.10', 'sieve' => '+0-1.0', 'carat' => '0.006'],
            ['mm' => '1.10', 'sieve' => '+1.0-1.5', 'carat' => '0.007'],
            ['mm' => '1.20', 'sieve' => '+1.5-2.0', 'carat' => '0.008'],
            ['mm' => '1.20', 'sieve' => '+2.0-2.5', 'carat' => '0.009'],
            ['mm' => '1.30', 'sieve' => '+2.5-3.0', 'carat' => '0.010'],
            ['mm' => '1.30', 'sieve' => '+3.0-3.5', 'carat' => '0.011'],
            ['mm' => '1.40', 'sieve' => '+3.5-4.0', 'carat' => '0.012'],
            ['mm' => '1.40', 'sieve' => '+4.0-4.5', 'carat' => '0.014'],
            ['mm' => '1.50', 'sieve' => '+4.5-5.0', 'carat' => '0.015'],
            ['mm' => '1.50', 'sieve' => '+5.0-5.5', 'carat' => '0.017'],
            ['mm' => '1.60', 'sieve' => '+5.5-6.0', 'carat' => '0.020'],
            ['mm' => '1.70', 'sieve' => '+6.0-6.5', 'carat' => '0.023'],
            ['mm' => '1.80', 'sieve' => '+6.5-7.0', 'carat' => '0.027'],
            ['mm' => '1.90', 'sieve' => ' +7.0-7.5', 'carat' => '0.030'],
            ['mm' => '2.00', 'sieve' => '+7.5-8.0', 'carat' => '0.035'],
            ['mm' => '2.10', 'sieve' => ' +8.0-8.5', 'carat' => '0.040'],
            ['mm' => '2.20', 'sieve' => '+8.5-9.0', 'carat' => '0.045'],
            ['mm' => '2.30', 'sieve' => ' +9.0-9.5', 'carat' => '0.053'],
            ['mm' => '2.40', 'sieve' => '+9.5-10.0', 'carat' => '0.060'],
            ['mm' => '2.50', 'sieve' => '+10.0-10.5', 'carat' => '0.070'],
            ['mm' => '2.60', 'sieve' => ' +10.5-11.0', 'carat' => '0.075'],
            ['mm' => '2.70', 'sieve' => '+11.0-11.5', 'carat' => '0.080'],
            ['mm' => '2.80', 'sieve' => '+11.5-12.0', 'carat' => '0.090'],
            ['mm' => '2.90', 'sieve' => ' +12.0-12.5', 'carat' => '0.100'],
            ['mm' => '3.00', 'sieve' => '+12.5-13.0', 'carat' => '0.110'],
            ['mm' => '3.10', 'sieve' => '+13.0-13.5', 'carat' => '0.120'],
            ['mm' => '3.20', 'sieve' => '+13.5-14.0', 'carat' => '0.135'],
            ['mm' => '3.30', 'sieve' => '+14.0-14.5', 'carat' => '0.150'],
            ['mm' => '3.40', 'sieve' => ' +14.5-15.0', 'carat' => '0.160'],
            ['mm' => '3.50', 'sieve' => '+15.0-15.5', 'carat' => '0.170'],
            ['mm' => '3.60', 'sieve' => '+15.5-16.0', 'carat' => '0.180'],
            ['mm' => '3.70', 'sieve' => ' +16.0-16.5', 'carat' => '0.190'],
            ['mm' => '3.80', 'sieve' => '+16.5-17.0', 'carat' => '0.210'],
            ['mm' => '3.90', 'sieve' => '+17.0-17.5', 'carat' => '0.230'],
            ['mm' => '4.00', 'sieve' => ' +17.5-18.0', 'carat' => '0.250'],
            ['mm' => '4.10', 'sieve' => '+18.0-18.5', 'carat' => '0.270'],
            ['mm' => '4.20', 'sieve' => '+18.5-19.0', 'carat' => '0.300'],
            ['mm' => '4.30', 'sieve' => ' +19.0-19.5', 'carat' => '0.320'],
            ['mm' => '4.40', 'sieve' => '+19.5-20.0', 'carat' => '0.340'],
        ]);

        // return $sizes;
        return view('buyers.create', compact('sizes'));
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
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function show(buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function edit(buyer $buyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, buyer $buyer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\buyer  $buyer
     * @return \Illuminate\Http\Response
     */
    public function destroy(buyer $buyer)
    {
        //
    }
}
