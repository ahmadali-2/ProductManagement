<?php

namespace App\Http\Controllers;

use App\Models\HeroImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class HeroImageController extends Controller
{
    public function show(){
        $heros = DB::table("hero_images")->latest()->paginate(6);
        return view("admin.heroImages.show_hero",compact("heros"));
    }

    public function showForm(){
        return view('admin.heroImages.add_hero');
    }

    public function add(Request $request){

        $validation = $request->validate([
            "hero_name" => "required|max:50",
            "hero_description" => "required",
            "hero_logo" => "required|image|mimes:jpg,png,jpeg,gif,svg,webp"
        ]);

        $data = array();
        $data["hero_name"] = $request->hero_name;
        $data["hero_description"] = $request->hero_description;
        $data["hero_logo"] = $this->makeImage($request);

        DB::table("hero_images")->insert($data);
        return redirect("dashboard/showAllHeroImages")->with("message","Hero Image inserted successfuly!");

    }

    public function edit($id){
        $hero = DB::table("hero_images")->where('id',$id)->first();
        return view("admin.heroImages.edit_hero", compact("hero"));
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "hero_name" => "required|max:50",
            "hero_description" => "required",
            "hero_logo" => "required|image|mimes:jpg,png,jpeg,gif,svg,webp"
        ]);

        $data = array();
        $data["hero_name"] = $request->hero_name;
        $data["hero_description"] = $request->hero_description;
        if($request->hero_logo){
            $data["hero_logo"] = $this->makeImage($request);
            $logo = HeroImage::find($id);
            unlink($logo->hero_logo);
        }
        DB::table("hero_images")->where('id',$id)->update($data);
        return redirect("dashboard/showAllHeroImages")->with("message","Hero Image updated successfuly!");
    }

    public function delete($id){
        $delete = HeroImage::find($id);
        unlink($delete->hero_logo);
        $delete->delete();
        return redirect("dashboard/showAllHeroImages")->with("message","Hero Image deleted successfuly!");
    }

    public function makeImage(Request $request){
        $image =  $request->file('hero_logo');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->save("Images/Hero/".$imageName);
        $filePath = "Images/Hero/".$imageName;
        return $filePath;
    }
}
