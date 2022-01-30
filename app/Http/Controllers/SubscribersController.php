<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SubscribersController extends Controller
{
    public function subscribe(Request $request){

        $validator = Validator::make($request->all(),[
            'website_subscriber' => 'required|unique:Subscribers',
        ],
        [
            'website_subscriber.required' => "You must enter an email to subscribe!",
            'website_subscriber.unique' => "You already subscribed!",
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        $input = $request->all();
        Subscribers::create($input);
        return response()->json(['success'=>'You subscribed successfully!']);

    }

    public function showAll(){
        $subscribers = DB::table("subscribers")->latest()->get();
        return view("admin.subscribers.show_subscribers", compact("subscribers"));
    }

    public function delete($id){
        DB::table("subscribers")->where("id",$id)->delete();
        $notification = array(
            'message' => 'Subscriber deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}