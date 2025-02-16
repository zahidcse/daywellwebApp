<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserAffiliate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('dashboard.user',compact('user'));
    }
}
