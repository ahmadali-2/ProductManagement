<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Models\BasicInfo;
use App\Models\Social;
use App\Models\Subscribe;
use App\Models\Subscribers;
use Illuminate\Support\Facades\DB;
use App\Models\Testimonial;
use App\Models\Why;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function why(){
        $basicInfo = BasicInfo::all()->first();
        $whies = Why::all();
        $arrival = Arrival::all()->first();
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        return view("layouts.websitePages.why",compact("basicInfo","whies","arrival","subscribe","socials"));
    }

    public function testimonial(){
        $basicInfo = BasicInfo::all()->first();
        $testimonials = Testimonial::all();
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        return view("layouts.websitePages.testimonial",compact("testimonials","basicInfo","subscribe","socials"));
    }

    public function contact(){
        $basicInfo = BasicInfo::all()->first();
        $arrival = Arrival::all()->first();
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        return view("layouts.websitePages.contact",compact("basicInfo","arrival","subscribe","socials"));
    }

    public function product(){
        $basicInfo = BasicInfo::all()->first();
        $products = DB::table("products")->latest()->paginate(20);
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        return view("layouts.websitePages.product",compact("basicInfo","products","subscribe","socials","categories","brands"));
    }

    public function filterProducts($catId){
        $products = "";
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        $basicInfo = BasicInfo::all()->first();
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        try{
            if($catId[0] === "-" && $catId[2] === "-"){
                $products = DB::table('products')->latest()->paginate(20);
            }else if($catId[0] === "-"){
                $products = DB::table('products')->where('brand_id',$catId[2])->latest()->paginate(20);
            }else if($catId[2] === "-"){
                $products = DB::table('products')->where('category_id',$catId[0])->latest()->paginate(20);
            }else{
                $products = DB::table('products')->where('category_id',$catId[0])->where('brand_id',$catId[2])->latest()->paginate(20);
            }
        }catch(\Illuminate\Database\QueryException $ex){
            return view("layouts.websitePages.product",compact("products","categories","brands","catId"));
        }

        return view("layouts.websitePages.product",compact("products","categories","brands","basicInfo","socials","subscribe","catId"));
    }

    public function productDetail($id){
        $product = DB::table("products")->where('id',$id)->get()->first();
        $basicInfo = BasicInfo::all()->first();
        $subscribe = Subscribe::all()->first();
        $socials = Social::all()->first();
        return view("layouts.websitePages.product_detail",compact("socials","subscribe","basicInfo","product"));
    }
}
