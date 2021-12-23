<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use Intervention\Image\ImageManagerStatic as Image;

class CategoryController extends Controller
{
    public function show(){
        return view("admin.categories.add_category");
    }

    public function showAll(){
        $categories = DB::table('categories')->latest()->get();
        return view("admin.categories.show_category",compact("categories"));
    }

    public function add(Request $request){

        $valudation = $request->validate([
            "category_name" => "required|unique:categories|max:25",
            "category_description" => "required:categories|min:50",
            'category_logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp',
        ]);
        
        $data = array();
        $data["user_id"] = Auth::id();
        $data["category_logo"] = $this->makeImage($request);
        $data["category_name"] = $request->category_name;
        $data["category_description"] = $request->category_description;
        $data["created_at"] = Carbon::now();
        DB::table("categories")->insert($data);
        return redirect("/dashboard/showAllCategories")->with("message","Category created successfuly!");
    }

    public function makeImage(Request $request){

        $image =  $request->file("category_logo");
        $imageExtension = strtolower($image->getClientOriginalExtension());
        $imageName = hexdec(uniqid()).".".$imageExtension;
        Image::make($image)->resize(450, 250)->save("Images/Category/".$imageName);
        $filePath = "Images/Category/".$imageName;
        return $filePath;
    }

    public function categoryProducts($id){
        $categoryProducts = DB::table("products")->where("category_id",$id)->latest()->paginate(6);
        return view("admin.categories.category_Product",compact("categoryProducts"));
    }

    public function edit($id){
        $category = DB::table("categories")->find($id);
        return view("admin.categories.edit_category",compact("category"));
    }

    public function update(Request $request, $id){

        $valudation = $request->validate([
            "category_name" => "required:categories|max:25",
            "category_description" => "required:categories|min:50",
        ]);
        
        $data = array();
        $data["user_id"] = Auth::id();
        if($request->category_logo){
            $data["category_logo"] = $this->makeImage($request);
            $prod = Category::find($id);
            unlink($prod->category_logo);
        }
        $data["category_name"] = $request->category_name;
        $data["category_description"] = $request->category_description;
        $data["updated_at"] = Carbon::now();
        DB::table("categories")->update($data);
        return redirect("/dashboard/showAllCategories")->with("message","Category updated successfuly!");
    }

    public function delete($id){
        $category = Category::find($id);
        $categoryProducts = Product::where("category_id",$id)->get();
        foreach($categoryProducts as $product){
            unlink($product->product_logo);
            $product->delete();
        }
        unlink($category->category_logo);
        $category->delete();
        return redirect("/dashboard/showAllCategories")->with("message","Category along with all its products deleted!");
    }
}
