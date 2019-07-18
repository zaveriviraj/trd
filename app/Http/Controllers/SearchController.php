<?php

namespace App\Http\Controllers;

use App\Search;
use Illuminate\Http\Request;
use App\Companysize;
use App\Companytype;
use App\Companydeal;
use App\Size;
use App\Shape;
use App\Color;
use App\Clarity;
use App\Cut;
use App\Cert;
use App\Product;
use App\Company;
use App\Designation;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companysizes = Companysize::oldest('name')->get();
        $companytypes = Companytype::oldest('name')->get();
        $companydeals = Companydeal::oldest('name')->get();
        $designations = Designation::oldest('name')->get();

        $sizes = Size::oldest('id')->get();
        $shapes = Shape::oldest('id')->get();
        $colors = Color::oldest('id')->get();

        $clarities = Clarity::oldest('id')->get();
        $cuts = Cut::oldest('id')->get();
        $certs = Cert::oldest('id')->get();

        return view('searches.create', compact(
            'companysizes',
            'companytypes',
            'companydeals',
            'designations',
            'sizes',
            'shapes',
            'colors',
            'clarities',
            'cuts',
            'certs',
        ));
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

    public function search(Request $request)
    {
        // return $request;
        $companies = Company::latest();
        if ($request->has('company_size')) {
            $companies = $companies->whereIn('companysize_id', $request->company_size);
        }
        if ($request->has('company_type')) {
            $companies = $companies->whereHas('companytypes', function($query) use ($request) {
                $query->whereIn('companytype_id', $request->company_type);
            });
        }
        if ($request->has('sizes')) {
            $companies = $companies->whereHas('sizes', function($query) use ($request) {
                $query->whereIn('size_id', $request->sizes);
            });
        }
        if ($request->has('company_deal')) {
            $companies = $companies->whereHas('companydeals', function($query) use ($request) {
                $query->whereIn('companydeal_id', $request->company_deal);
            });
        }
        if ($request->has('shapes')) {
            $companies = $companies->whereHas('shapes', function($query) use ($request) {
                $query->whereIn('shape_id', $request->shapes);
            });
        }
        if ($request->has('colors')) {
            $companies = $companies->whereHas('colors', function($query) use ($request) {
                $query->whereIn('color_id', $request->colors);
            });
        }
        if ($request->has('cuts')) {
            $companies = $companies->whereHas('cuts', function($query) use ($request) {
                $query->whereIn('cut_id', $request->cuts);
            });
        }
        if ($request->has('clarities')) {
            $companies = $companies->whereHas('clarities', function($query) use ($request) {
                $query->whereIn('clarity_id', $request->clarities);
            });
        }
        if ($request->has('certs')) {
            $companies = $companies->whereHas('certs', function($query) use ($request) {
                $query->whereIn('cert_id', $request->certs);
            });
        }
        $companies = $companies->get();
        // return $companies;
        return view('companies.index', compact('companies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
