<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class UniversalController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route("login");        
    }
}
