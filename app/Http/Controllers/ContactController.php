<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function contact(Request $request){

        $validator = Validator::make($request->all(),[
            'contact_name' => 'required',
            'contact_email' => 'required|unique:contacts',
            'contact_subject' => 'required',
            'contact_message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }

        $input = $request->all();
        Contact::create($input);
        return response()->json(['success'=>'Message sent successfully!']);

    }

    public function showAll(){
        $contacts = DB::table("contacts")->latest()->get();
        return view("admin.contacts.show_contacts", compact("contacts"));
    }

    public function delete($id){
        Contact::find($id)->delete();
        $notification = array(
            'message' => 'Message deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
