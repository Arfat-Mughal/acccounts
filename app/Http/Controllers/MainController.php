<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            return redirect()
                ->back()
                ->withErrors($validator->errors());
        }

        Contact::create([
            'name' => $request->name,
            'email'=> $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect()
            ->back()
            ->withSuccessMessage('Successfully Send');
    }

    public function subscriptions(Request $request)
    {
        $email = $request->email;
        if (isset($email)){
            Subscription::create(['email'=>$email]);
            return redirect()
                ->back()
                ->withSuccessMessage('Saved Successfully');
        }
        return redirect()->back()->withErrors(['email'=>'Email is required for Newsletter']);
    }
}
