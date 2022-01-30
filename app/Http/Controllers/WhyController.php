<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Why;
use Illuminate\Support\Facades\DB;

class WhyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $whies = DB::table("whies")->latest()->paginate(6);
        return view("admin.whies.show_why",compact("whies"));
    }

    public function showForm(){
        return view('admin.whies.add_why');
    }

    public function add(Request $request){

        $validation = $request->validate([
            "why_heading" => "required",
            "why_description" => "required"
        ]);

        $data = array();
        $data["why_heading"] = $request->why_heading;
        $data["why_description"] = $request->why_description;

        DB::table("whies")->insert($data);
        $notification = array(
            'message' => 'WhyShop Section inserted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllWhies")->with($notification);

    }

    public function edit($id){
        $why = DB::table("whies")->where('id',$id)->first();
        return view("admin.whies.edit_why", compact("why"));
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "why_heading" => "required",
            "why_description" => "required"
        ]);

        $data = array();
        $data["why_heading"] = $request->why_heading;
        $data["why_description"] = $request->why_description;

        DB::table("whies")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'WhyShop Section updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllWhies")->with($notification);
    }

    public function delete($id){
        $delete = Why::find($id);
        $delete->delete();
        $notification = array(
            'message' => 'WhyShop Section deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllWhies")->with($notification);
    }
}
