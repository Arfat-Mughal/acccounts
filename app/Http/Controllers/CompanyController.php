<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\City;
use App\Models\Company;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Month;
use App\Models\State;
use App\Models\TimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    public function getState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)
            ->get(["name","id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)
            ->get(["name","id"]);
        return response()->json($data);
    }

    public function index()
    {
        $types = DB::table('company_types')->get();
        $months = Month::all('id','name');
        $country = Country::all('id','country_name');
        $time_zone = TimeZone::all('id','name');
        $currency = Currency::all('id','name','symbol');
        return view('company.create_company',compact('types','months','country','time_zone','currency'));
    }

    public function company_create(Request $request)
    {
        $company_obj = new Company;
        $company_obj->name = $request->name;
        $company_obj->slug = Str::slug($request->name,'-');
        $company_obj->type_id = $request->type_id;
        $company_obj->year_id = $request->year_id;
        $company_obj->country_id = $request->country_id;
        $company_obj->state_id = $request->state_id;
        $company_obj->city_id = $request->city_id;
        $company_obj->currency_id = $request->currency_id;
        $company_obj->user_id = \Auth::guard('web')->id();
        $company_obj->save();

        return redirect(route('dashboard'));
    }
}
