<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use App\Priority;
use App\Companysize;
use App\Companytype;
use App\Companydeal;
use App\State;
use App\Country;
use App\Size;
use App\Shape;
use App\Clarity;
use App\Cut;
use App\Cert;
use App\Product;
use App\Color;
use App\Imports\CompaniesImport;
use Maatwebsite\Excel\Facades\Excel;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->with(
            'priority',
            'companysize',
            'companytypes',
            'companydeals',
            'state',
            'sizes',
            'shapes',
            'colors',
            'cuts',
            'certs',
            'products',
        )->get();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $priorities = Priority::oldest('name')->get();
        $companysizes = Companysize::oldest('name')->get();
        $companytypes = Companytype::oldest('name')->get();
        $companydeals = Companydeal::oldest('name')->get();

        $states = State::oldest('name')->get();
        $countries = Country::oldest('name')->get();

        $sizes = Size::oldest()->get();
        $shapes = Shape::oldest()->get();
        $colors = Color::oldest('id')->get();
        $clarities = Clarity::oldest()->get();
        $cuts = Cut::oldest()->get();
        $certs = Cert::oldest()->get();

        $products = Product::oldest()->get();

        return view('companies.create', compact(
            'priorities',
            'companysizes',
            'companytypes',
            'companydeals',
            'states',
            'countries',
            'sizes',
            'shapes',
            'colors',
            'clarities',
            'cuts',
            'certs',
            'products',
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
        // return $request;

        $request->validate([
            'name' => 'required',
        ]);

        $company = Company::create($request->all());

        $company->companydeals()->sync($request->companydeals);
        $company->cuts()->sync($request->cuts);
        $company->certs()->sync($request->certs);
        $company->clarities()->sync($request->clarities);
        $company->products()->sync($request->products);
        $company->shapes()->sync($request->shapes);
        $company->colors()->sync($request->colors);
        $company->sizes()->sync($request->sizes);
        $company->companytypes()->sync($request->companytypes);

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function import() 
    {
        Excel::import(new CompaniesImport, 'companies.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
}
