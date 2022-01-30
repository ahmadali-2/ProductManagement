<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SocialController extends Controller
{
    public function update(Request $request){
        $validation = $request->validate([
            "social_whatsapp" => "required",
            "social_facebook" => "required",
            "social_linkedin" => "required",
            "social_twitter" => "required",
        ]);

        $data = array();
        $data["social_whatsapp"] = $request->social_whatsapp;
        $data["social_facebook"] = $request->social_facebook;
        $data["social_linkedin"] = $request->social_linkedin;
        $data["social_twitter"] = $request->social_twitter;
        DB::table("socials")->update($data);

        $notification = array(
            'message' => 'Social Links updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
