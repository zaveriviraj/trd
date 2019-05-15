<?php

namespace App\Http\Controllers;

use App\Cert;
use Illuminate\Http\Request;

class CertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certs = Cert::oldest('name')->get();
        return view('masters.certs.index', compact('certs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masters.certs.create');
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

        Cert::create($request->all());

        return redirect()->route('certs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function show(Cert $cert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function edit(Cert $cert)
    {
        return view('masters.certs.edit', compact('cert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cert $cert)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $cert->update($request->all());

        return redirect()->route('certs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cert  $cert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cert $cert)
    {
        //
    }
}
