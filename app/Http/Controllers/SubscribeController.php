<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $subscribe = DB::table("subscribes")->get()->first();
        return view("admin.subscribes.show_subscribe",compact("subscribe"));
    }

    public function edit($id){
        $subscribe = DB::table("subscribes")->where('id',$id)->first();
        return view("admin.subscribes.edit_subscribe", compact("subscribe"));
    }

    public function update(Request $request, $id){

        $validation = $request->validate([
            "subs_heading" => "required",
            "subs_description" => "required"
        ]);

        $data = array();
        $data["subs_heading"] = $request->subs_heading;
        $data["subs_description"] = $request->subs_description;

        DB::table("subscribes")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Subscribe section updated successfuly!',
            'alert-type' => 'success'
        );

        return redirect("dashboard/showAllSubscribes")->with($notification);
    }
}
