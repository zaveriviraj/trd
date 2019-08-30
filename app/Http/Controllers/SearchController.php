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
        $colors = Color::oldest('id')->where('id', '<', 24)->get();

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
            'certs'
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
        
        $companies = Company::oldest('company_name')->with(
            'companysize',
            'companytypes',
            'companydeals',
            'state',
            'shapes',
            'certs',
            'products',
            'roughs'
        );
        // if ($request->has('makes') && $request->makes != null) {
        //     $makes = preg_split("/[-]+/", $request->makes);
        //     $companies = $companies->where('deals_make_to', '>=', $makes[1])->where('deals_make_from', '<=', $makes[0]);
        // }
        // $companies = $companies->take(10)->get();
        // return $companies;
        if ($request->has('company_size') && $request->company_size != null) {
            $companies = $companies->whereIn('companysize_id', $request->company_size);
        }
        if ($request->has('company_type')) {
            $companies = $companies->whereHas('companytypes', function($query) use ($request) {
                $query->whereIn('companytype_id', $request->company_type);
            });
        }
        if ($request->has('shapes') && !empty($request->shapes[0])) {
            $companies = $companies->whereHas('shapes', function($query) use ($request) {
                $query->whereIn('shape_id', $request->shapes);
            });
        }
        if ($request->has('sizes') && $request->sizes != null) {
            $sizes = preg_split("/[-]+/", $request->sizes);
            $companies = $this->custom($companies, 'size', (int) $sizes[0], (int) $sizes[1]);
        }
        if ($request->has('makes') && $request->makes != null) {
            $makes = preg_split("/[-]+/", $request->makes);
            $companies = $this->custom($companies, 'make', (int) $makes[0], (int) $makes[1]);
        }
        if ($request->has('colors') && $request->colors != null) {
            $colors = preg_split("/[-]+/", $request->colors);
            $companies = $this->custom($companies, 'color', (int) $colors[0], (int) $colors[1]);
        }
        if ($request->has('browns') && $request->browns == 1) {
            $companies = $companies->where('deals_color', 'LIKE', "%brown%");
        }
        if ($request->has('fancy_colors') && $request->fancy_colors == 1) {
            // return 'here';
            $companies = $companies->where('deals_color', 'LIKE', "%fancy%");
        }
        if ($request->has('clarities') && $request->clarities != null) {
            $clarities = preg_split("/[-]+/", $request->clarities);
            $companies = $this->custom($companies, 'clarity', (int) $clarities[0], (int) $clarities[1]);
        }
        if ($request->has('certs')  && !empty($request->certs[0])) {
            $companies = $companies->whereHas('certs', function($query) use ($request) {
                $query->whereIn('cert_id', $request->certs);
            });
        }
        if ($request->has('country') && $request->country != null) {
            $companies = $companies->where('country', 'LIKE', "%{$request->country}%");
        }
        $companies = $companies->get();
        return view('companies.index', compact('companies'));
    }

    public function custom($companies, $column, $from, $to)
    {
        $companies->where(function($query) use ($column, $from, $to) {
            $query->where('deals_' . $column . '_from', '>=', $from)
                ->where('deals_' . $column . '_to', '<=', $to);
        })->orWhere(function($query) use ($column, $from, $to) {
            $query->where('deals_' . $column . '_from', '<=', $from)
                ->where('deals_' . $column . '_to', '>=', $to);
        })->orWhere(function($query) use ($column, $from, $to) {
            $query->whereBetween('deals_' . $column . '_from', [$from, $to])
                ->orWhereBetween('deals_' . $column . '_to', [$from, $to]);
        });

        return $companies;
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
