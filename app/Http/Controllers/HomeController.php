<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function dashboard(){
        $checkouts = Checkout::with('Camp')->whereUserId(Auth::id())->get();
        return view('user.dashboard', compact('checkouts'));
    }
}
