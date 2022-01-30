<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        return view("admin.products.add_product",compact("categories","brands"));
    }

    public function showAll(){
        $products = DB::table('products')->latest()->paginate(6);
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        return view("admin.products.show_product",compact("products","categories","brands"));
    }

    public function filterProducts($catId){
        $products = "";
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        try{
            if($catId[0] === "-" && $catId[2] === "-"){
                $products = DB::table('products')->latest()->paginate(6);
            }else if($catId[0] === "-"){
                $products = DB::table('products')->where('brand_id',$catId[2])->latest()->paginate(6);
            }else if($catId[2] === "-"){
                $products = DB::table('products')->where('category_id',$catId[0])->latest()->paginate(6);
            }else{
                $products = DB::table('products')->where('category_id',$catId[0])->where('brand_id',$catId[2])->latest()->paginate(6);
            }
        }catch(\Illuminate\Database\QueryException $ex){
            return view("admin.products.show_product",compact("products","categories","brands","catId"));
        }

        return view("admin.products.show_product",compact("products","categories","brands","catId"));
    }

    public function add(Request $request){

        $valudation = $request->validate([
            "category_id" => "required:products|gt:0",
            "brand_id" => "required:products|gt:0",
            "product_name" => "required:products|max:50",
            "product_description" => "required:products|min:50",
            'product_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp',
            "product_stock" => "required:products",
            "product_price" => "required:products",
        ],
        [
            "category_id.gt" => "Category not selected OR Create one first",
            "brand_id.gt" => "Brand not selected OR Create one first",
        ]);

        $data = array();
        $data["user_id"] = Auth::id();
        $data["category_id"] = $request->category_id;
        $data["brand_id"] = $request->brand_id;
        $data["product_logo"] = $this->makeImage($request);
        $data["product_name"] = $request->product_name;
        $data["product_video"] = $request->product_video;
        $data["product_description"] = $request->product_description;
        $data["product_price"] = $request->product_price;
        $data["product_stock"] = $request->product_stock;
        $data["created_at"] = Carbon::now();
        DB::table("products")->insert($data);
        $notification = array(
            'message' => 'Product created successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllProducts")->with($notification);
    }

    public function edit($id){
        $categories = DB::table("categories")->latest()->get();
        $brands = DB::table("brands")->latest()->get();
        $product = DB::table("products")->where('id',$id)->first();
        return view("admin.products.edit_product",compact("product","categories","brands"));
    }

    public function update(Request $request, $id){
        $data = array();
        $data["user_id"] = Auth::id();
        $data["category_id"] = $request->category_id;
        $data["brand_id"] = $request->brand_id;
        if($request->product_logo){
            $data["product_logo"] = $this->makeImage($request);
            $prod = Product::find($id);
            unlink($prod->product_logo);
        }

        $data["product_name"] = $request->product_name;
        $data["product_video"] = $request->product_video;
        $data["product_description"] = $request->product_description;
        $data["product_price"] = $request->product_price;
        $data["product_stock"] = $request->product_stock;
        $data["updated_at"] = Carbon::now();
        DB::table("products")->where('id',$id)->update($data);
        $notification = array(
            'message' => 'Product updated successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllProducts")->with($notification);
    }

    public function delete($id){
        $delete = Product::find($id);
        unlink($delete->product_logo);
        $delete->delete();
        $notification = array(
            'message' => 'Product deleted successfuly!',
            'alert-type' => 'success'
        );
        return redirect("/dashboard/showAllProducts")->with($notification);
    }

    public function makeImage(Request $request){
        $image =  $request->file('product_logo');
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->save("Images/Product/".$imageName);
        $filePath = "Images/Product/".$imageName;
        return $filePath;
    }
}
