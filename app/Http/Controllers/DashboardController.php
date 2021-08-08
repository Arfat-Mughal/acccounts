<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $campany = Company::where('user_id',Auth::user()->getAuthIdentifier())->first();
        if($campany){
            return  view('dashboard.dashboard',compact('campany'));
        }else{
            return view('dashboard.noCompany');
        }
    }
}
