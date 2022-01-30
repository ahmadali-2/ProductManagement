<?php

namespace App\Http\Controllers;

use App\Models\HeroImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class HeroImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "hero_image" => "required|image|mimes:jpg,png,jpeg,gif,svg,webp"
        ]);

        $data = array();
        if($request->hero_image){
            $data["hero_image"] = $this->makeImage($request);
            $image = HeroImage::find($id);
            unlink($image->hero_image);
        }
        DB::table("hero_images")->update($data);
        $notification = array(
            'message' => 'Hero Image updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllHeroOverlays")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('hero_image');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->save("Images/Hero/".$imageName);
        $filePath = "Images/Hero/".$imageName;
        return $filePath;
    }
}
