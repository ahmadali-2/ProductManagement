<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\brand;
use App\Models\HeroImage;

class DashboardController extends Controller
{
    public function display(){
        return view("admin.panel.dashboard");
    }

    public function homePage(){
        $brands = Brand::all();
        $heros = HeroImage::all();
        return view("layouts.websiteBody.home_content", compact("brands","heros"));
    }
}
