<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function display(){
        return view("dashboard");
    }

    public function homePage(){
        return view("welcome");
    }
}
