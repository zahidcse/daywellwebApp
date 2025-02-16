<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAffiliate;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;

class UserAffiliateController extends Controller
{
    public function registerForm()
    {
        return view('register-affiliate');
    }

    public function registerAffiliate(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:user_affiliates,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $userAffiliate = UserAffiliate::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);


        $userAffiliate->referral_link = 'http://127.0.0.1:8000' . '/register?via=' . $userAffiliate->first_name . $userAffiliate->id;
        $userAffiliate->referral_code = $userAffiliate->first_name . $userAffiliate->id;
        $userAffiliate->save();

        Auth::guard('affiliate')->login($userAffiliate);

        return redirect()->route('dashboardAffiliate');

    }

    public function dashboardAffiliate()
    {
        $userAffiliate = Auth::guard('affiliate')->user();
        $leads = User::where('referral_code',$userAffiliate->referral_code)->count();
        return view('dashboard.affiliate',compact('userAffiliate','leads'));
    }

    public function loginAffiliate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::guard('affiliate')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboardAffiliate');
        }

        return back()->withErrors(['email' => 'Invalid credentials!']);
    }

    public function contactUsSendMsg(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);
        
        $name = (string) $request->name;
        $email = (string) $request->email;
        $usermessage = (string) $request->message;

        Mail::to('majidursarkar333@gmail.com')->send(new ContactFormMail($name, $email, $usermessage));

        return back()->with('success', 'Message sent successfully!');
    }
}
