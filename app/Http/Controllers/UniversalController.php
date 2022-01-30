<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManagerStatic as Image;

class UniversalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route("login");
    }

    public function changePasswordForm(){
        return view('admin.panel.change_password');
    }

    public function changePassword(Request $request){

        $validation = $request->validate([
            "current_password" => "required",
            "password" => "required|confirmed|min:7",
            "password_confirmation" => "required|min:7",
        ]);

        $hashedPassword = Auth::user()->password;
        if(Hash::check($request->current_password , $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            $notification = array(
                'message' => 'Password changed successfuly, Login again please.',
                'alert-type' => 'success'
            );
            return redirect()->route('login')->with($notification);
        }
        else{
            $notification = array(
                'message' => "Your current password dosen't matched!, please re-check and submit again",
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }

    public function changeProfileForm(){
        if(Auth::user()){
            if(Auth::user()->id){
                $user = User::find(Auth::user()->id);
                return view('admin.panel.change_profile',compact("user"));
            }
        }
    }

    public function changeProfile(Request $request){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
            if($request->profile_photo_path){
                $user->profile_photo_path = $this->makeImage($request);
                $unlinking = User::find(Auth::user()->id);
                unlink($unlinking->profile_photo_path);
            }
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
            $notification = array(
                'message' => 'Profile Updated successfuly!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Session expired!, Please login again.',
                'alert-type' => 'success'
            );
            return redirect()->route('login')->with($notification);
        }
    }

    public function makeImage(Request $request){
        $image =  $request->file('profile_photo_path');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->resize(500,500)->save("Images/Profile/".$imageName);
        $filePath = "Images/Profile/".$imageName;
        return $filePath;
    }
}
