<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $testimonials = DB::table("testimonials")->latest()->get();
        return view("admin.testimonials.add_testimonial",compact("testimonials"));
    }

    public function showAll(){
        $testimonials = DB::table('testimonials')->latest()->paginate(6);
        return view("admin.testimonials.show_testimonial",compact("testimonials"));
    }

    public function add(Request $request){

        $valudation = $request->validate([

            'customer_image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp',
            "customer_name" => "required",
            "customer_message" => "required",
        ]);

        $data = array();
        $data["customer_image"] = $this->makeImage($request);
        $data["customer_name"] = $request->customer_name;
        $data["customer_message"] = $request->customer_message;
        DB::table("testimonials")->insert($data);
        $notification = array(
            'message' => 'Testimonial created successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllTestimonials")->with($notification);
    }

    public function edit($id){
        $testimonial = DB::table("testimonials")->where('id',$id)->first();
        return view("admin.testimonials.edit_testimonial",compact("testimonial"));
    }

    public function update(Request $request, $id){
        $data = array();
        if($request->customer_image){
            $data["customer_image"] = $this->makeImage($request);
            $testi = Testimonial::find($id);
            unlink($testi->customer_image);
        }
        $data["customer_name"] = $request->customer_name;
        $data["customer_message"] = $request->customer_message;
        DB::table("testimonials")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Testimonial updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllTestimonials")->with($notification);
    }

    public function delete($id){
        $delete = Testimonial::find($id);
        unlink($delete->customer_image);
        $delete->delete();
        $notification = array(
            'message' => 'Testimonial deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllTestimonials")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('customer_image');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->resize(500, 500)->save("Images/Testimonial/".$imageName);
        $filePath = "Images/Testimonial/".$imageName;
        return $filePath;
    }
}
