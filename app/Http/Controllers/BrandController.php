<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\brand;
use App\Models\product;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        return view("admin.brands.add_brand");
    }

    public function showAll(){
        $brands = DB::table('brands')->where('user_id',Auth::id())->select("*")->latest()->get();
        return view("admin.brands.show_brand",compact("brands"));
    }

    public function add(Request $request){

        $valudation = $request->validate([
            "brand_name" => "required|unique:brands|max:25",
            "brand_description" => "required:brands|min:50",
            'brand_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp',
        ]);

        $data = array();
        $data["user_id"] = Auth::id();
        $data["brand_logo"] = $this->makeImage($request);
        $data["brand_name"] = $request->brand_name;
        $data["brand_description"] = $request->brand_description;
        $data["created_at"] = Carbon::now();
        DB::table("brands")->insert($data);
        $notification = array(
            'message' => 'Brand created successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllBrands")->with($notification);
    }

    public function edit($id){
        $brand = DB::table("brands")->find($id);
        return view("admin.brands.edit_brand",compact("brand"));
    }

    public function update(Request $request, $id){

        $valudation = $request->validate([
            "brand_name" => "required:brands|max:25",
            "brand_description" => "required:brands|min:50",
        ]);

        $data = array();
        $data["user_id"] = Auth::id();
        if($request->brand_logo){
            $data["brand_logo"] = $this->makeImage($request);
            $prod = Brand::find($id);
            unlink($prod->brand_logo);
        }
        $data["brand_name"] = $request->brand_name;
        $data["brand_description"] = $request->brand_description;
        $data["updated_at"] = Carbon::now();
        DB::table("brands")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Brand updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("dashboard/showAllBrands")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('brand_logo');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->save("Images/Brand/".$imageName);
        $filePath = "Images/Brand/".$imageName;
        return $filePath;
    }

    public function brandProducts($id){
        $brandProducts = DB::table("products")->where("brand_id",$id)->latest()->paginate(6);
        return view("admin.brands.brand_Product",compact("brandProducts"));
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brandProducts = Product::where("brand_id",$id)->get();
        foreach($brandProducts as $product){
            unlink($product->product_logo);
            $product->delete();
        }
        unlink($brand->brand_logo);
        $brand->delete();
        $notification = array(
            'message' => 'Brand along with all its products deleted!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllBrands")->with($notification);
    }
}
