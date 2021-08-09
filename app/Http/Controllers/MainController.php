<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MainController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4',
            'email'=> 'required',
            'subject' => 'required',
            'message'=> 'required'
        ]);

        if ($validator->fails()){
            return $validator->errors();
        }

        Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect('/')->with('success','Thank you');
    }
}
