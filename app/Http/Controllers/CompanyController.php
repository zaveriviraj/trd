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
use App\Designation;
use App\Layout;
use App\Rough;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->with(
            'companysize',
            'companytypes',
            'companydeals',
            'state',
            'shapes',
            'certs',
            'products',
            'roughs'
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
        $designations = Designation::oldest('name')->get();
        $companytypes = Companytype::oldest('name')->get();
        $companydeals = Companydeal::oldest('id')->get();

        $states = State::oldest('name')->get();
        $countries = Country::oldest('name')->get();

        $sizes = Size::oldest('id')->get();
        $shapes = Shape::oldest('id')->get();
        $colors = Color::oldest('id')->get();
        $clarities = Clarity::oldest('id')->get();
        $cuts = Cut::oldest()->get();
        $certs = Cert::oldest()->get();
        $roughs = Rough::oldest()->get();

        $products = Product::oldest()->get();

        return view('companies.create', compact(
            'priorities',
            'designations',
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
            'roughs',
            'products'
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
        $company->load(
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
            'roughs'
        );
        return view('companies.show', compact('company'));
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
        Excel::import(new CompaniesImport, 'amit_master.csv');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function import2() 
    {
        Excel::import(new CompaniesImport, 'amit_master_2.csv');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function import3() 
    {
        Excel::import(new CompaniesImport, 'amit_master_3.csv');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function import4() 
    {
        Excel::import(new CompaniesImport, 'amit_master_4.csv');
        
        return redirect('/')->with('success', 'All good!');
    }

    public function import5() 
    {
        Excel::import(new CompaniesImport, 'DBS- JZ23092019.csv');
        
        return redirect('/')->with('success', 'All good!');
    }
}
