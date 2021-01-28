<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('company.create_company');
    }

    public function company_create(Request $request)
    {
        dd($request->all());
    }
}
