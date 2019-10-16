<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class RelationshipController extends Controller
{
    public function create(Request $request, Company $company)
    {
        $company->relationship()->detach(auth()->id());
        $company->relationship()->attach(auth()->id(), ['relationship' => $request->relationship]);
        return redirect()->back();
    }
}
