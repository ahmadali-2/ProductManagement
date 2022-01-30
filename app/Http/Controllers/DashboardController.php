<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Models\BasicInfo;
use Illuminate\Support\Facades\DB;
use App\Models\HeroOverlay;
use App\Models\Product;
use App\Models\Social;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\Why;

class DashboardController extends Controller
{
    public function display(){
        return view("admin.panel.dashboard");
    }

    public function homePage(){
        //$brands = Brand::all();
        $products = Product::all()->take(6);
        $hero = DB::table("hero_images")->get()->first();
        $overlays = HeroOverlay::all();
        $whies = Why::all();
        $arrival = Arrival::all()->first();
        $subscribe = Subscribe::all()->first();
        $testimonials = Testimonial::all();
        $basicInfo = BasicInfo::all()->first();
        $socials = Social::all()->first();
        return view("layouts.websitePages.home", compact("hero","overlays","products","whies","arrival","subscribe","testimonials","basicInfo","socials"));
    }
}
