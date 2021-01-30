<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Month;
use App\Models\State;
use App\Models\TimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function getState(Request $request)
    {
        $data['states'] = State::where("id",$request->country_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("id",$request->state_id)
            ->get(["name","id"]);
        return response()->json($data);
    }

    public function index()
    {
        $types = DB::table('company_types')->get();
        $months = Month::all('id','name');
        $country = Country::all('id','country_name');
        $time_zone = TimeZone::all('id','name');
        $state = State::all();
        $city = City::all();
        $countries = Country::all();
        return view('company.create_company',compact('types','months','country','time_zone'));
    }

    public function company_create(Request $request)
    {
        dd($request->all());
    }
}
