<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return view('people.customers.customers_list');
    }

    public function create()
    {
        return view('people.customers.create_customer');
    }
}
