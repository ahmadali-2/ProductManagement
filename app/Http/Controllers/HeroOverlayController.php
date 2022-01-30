<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HeroOverlay;
use Illuminate\Support\Facades\DB;

class HeroOverlayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $heroOverlays = DB::table("hero_overlays")->latest()->paginate(6);
        $heroImage = DB::table("hero_images")->get()->first();
        return view("admin.heroOverlays.show_heroOverlay",compact("heroOverlays","heroImage"));
    }

    public function showForm(){
        return view('admin.heroOverlays.add_heroOverlay');
    }

    public function add(Request $request){

        $validation = $request->validate([
            "hO_silverHeading" => "max:50",
            "hO_heading" => "required",
            "hO_description" => "required"
        ]);

        $data = array();
        $data["hO_silverHeading"] = $request->hO_silverHeading;
        $data["hO_heading"] = $request->hO_heading;
        $data["hO_description"] = $request->hO_description;

        DB::table("hero_overlays")->insert($data);
        $notification = array(
            'message' => 'Hero Overlay inserted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllHeroOverlays")->with($notification);

    }

    public function edit($id){
        $heroOverlay = DB::table("hero_overlays")->where('id',$id)->first();
        return view("admin.heroOverlays.edit_heroOverlay", compact("heroOverlay"));
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "hO_silverHeading" => "max:50",
            "hO_heading" => "required",
            "hO_description" => "required"
        ]);

        $data = array();
        $data["hO_silverHeading"] = $request->hO_silverHeading;
        $data["hO_heading"] = $request->hO_heading;
        $data["hO_description"] = $request->hO_description;

        DB::table("hero_overlays")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Hero Overlay updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllHeroOverlays")->with($notification);
    }

    public function delete($id){
        $delete = HeroOverlay::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'Hero Overlay deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllHeroOverlays")->with($notification);
    }
}
