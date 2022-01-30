<?php

namespace App\Http\Controllers;

use App\Models\BasicInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class BasicInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAll(){
        $social = DB::table("socials")->latest()->first();
        $basicInfo = DB::table('basic_infos')->latest()->first();
        return view("admin.basicInfos.show_basicInfo",compact("basicInfo","social"));
    }

    public function edit($id){
        $basicInfo = DB::table("basic_infos")->where('id',$id)->first();
        return view("admin.basicInfos.edit_basicInfo",compact("basicInfo"));
    }

    public function update(Request $request, $id){
        // $valudation = $request->validate([

        //     'website_logo' => 'image|mimes:jpg,png,jpeg,gif,svg,webp',
        //     "address" => "required",
        //     "telephone" => "required",
        //     "email" => "required",
        // ]);

        $data = array();
        if($request->website_logo)
        {
            $data["website_logo"] = $this->makeImage($request);
            $deleteLogo = BasicInfo::find($id)->get()->first();
            unlink($deleteLogo->website_logo);
        }
        $data["website_title"] = $request->website_title;
        $data["address"] = $request->address;
        $data["telephone"] = $request->telephone;
        $data["email"] = $request->email;
        DB::table("basic_infos")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'BasicInfo updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllBasicInfos")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('website_logo');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->resize(500, 500)->save("Images/BasicInfo/".$imageName);
        $filePath = "Images/BasicInfo/".$imageName;
        return $filePath;
    }
}
