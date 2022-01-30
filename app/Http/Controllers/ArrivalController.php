<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class ArrivalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $arrival = DB::table("arrivals")->get()->first();
        return view("admin.arrivals.show_arrival",compact("arrival"));
    }

    public function edit($id){
        $arrival = DB::table("arrivals")->where('id',$id)->first();
        return view("admin.arrivals.edit_arrival", compact("arrival"));
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "arrival_heading" => "required",
            "arrival_description" => "required"
        ]);

        $data = array();
        $data["arrival_heading"] = $request->arrival_heading;
        $data["arrival_description"] = $request->arrival_description;

        DB::table("arrivals")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Arrival section updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllArrivals")->with($notification);
    }

    public function updateImage(Request $request, $id){

        $validation = $request->validate([
            "arrival_image" => "required|image|mimes:jpg,png,jpeg,gif,svg,webp"
        ]);

        $data = array();
        if($request->arrival_image){
            $data["arrival_image"] = $this->makeImage($request);
            $image = Arrival::find($id);
            unlink($image->arrival_image);
        }
        DB::table("arrivals")->update($data);
        $notification = array(
            'message' => 'Arrival Image updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllArrivals")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('arrival_image');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->save("Images/Arrival/".$imageName);
        $filePath = "Images/Arrival/".$imageName;
        return $filePath;
    }
}
