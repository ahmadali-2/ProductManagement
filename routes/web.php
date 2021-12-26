<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UniversalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class,"homePage"])->name("homePage");

Route::get('/dashboard', [DashboardController::class,"display"])
->middleware(['auth:sanctum', 'verified'])->name("dashboard");

// Brand Routes:
Route::get("/dashboard/showAllBrands",[BrandController::class,"showAll"])->name("showAllBrands");

Route::get("/dashboard/showBrandForm",[BrandController::class, "show"])->name("showBrandForm");

Route::post("/dashboard/addBrand",[BrandController::class,"add"])->name("addBrand");

Route::get("/dashboard/showAllBrands/edit/{id}",[BrandController::class,"edit"]);

Route::post("/dashboard/showAllBrands/update/{id}",[BrandController::class,"update"]);

Route::get("/dashboard/showAllBrands/brandProducts/{id}",[BrandController::class,"brandProducts"]);

Route::get("/dashboard/showAllBrands/delete/{id}",[BrandController::class,"delete"]);

// Product Routes:
Route::get("/dashboard/showAllProducts",[ProductController::class,"showAll"])->name("showAllProducts");

Route::get("/dashboard/showAllProducts/filter/{catId}",[ProductController::class,"filterProducts"]);

Route::get("/dashboard/showProductForm",[ProductController::class, "show"])->name("showProductForm");

Route::post("/dashboard/addProduct",[ProductController::class,"add"])->name("addProduct");

Route::get("/dashboard/showAllProducts/edit/{id}",[ProductController::class,"edit"]);

Route::post("/dashboard/showAllProducts/update/{id}",[ProductController::class,"update"]);

Route::get("/dashboard/showAllProducts/delete/{id}",[ProductController::class,"delete"]);

// Category routes:
Route::get("/dashboard/showAllCategories",[CategoryController::class,"showAll"])->name("showAllCategories");

Route::get("/dashboard/showCategoryForm",[CategoryController::class, "show"])->name("showCategoryForm");

Route::post("/dashboard/addCategory",[CategoryController::class,"add"])->name("addCategory");

Route::get("/dashboard/showAllCategories/edit/{id}",[CategoryController::class,"edit"]);

Route::post("/dashboard/showAllCategories/update/{id}",[CategoryController::class,"update"]);

Route::get("/dashboard/showAllCategories/categoryProducts/{id}",[CategoryController::class,"categoryProducts"]);

Route::get("/dashboard/showAllCategories/delete/{id}",[CategoryController::class,"delete"]);

//Unisersal Routes:
Route::get("/dashboard/logout",[UniversalController::class,"logout"]);

//HeroImage Routes
Route::get("/dashboard/showAllHeroImages",[HeroImageController::class,"show"]);

Route::get("/dashboard/showHeroImages/showHeroImageForm",[HeroImageController::class, "showForm"])->name("showHeroImageForm");

Route::post("/dashboard/showHeroImages/addHeroImage",[HeroImageController::class,"add"])->name("addHeroImage");

Route::get("/dashboard/showAllHeroImages/edit/{id}",[HeroImageController::class,"edit"]);

Route::post("/dashboard/showAllHeroImages/update/{id}",[HeroImageController::class,"update"]);

Route::get("/dashboard/showAllHeroImages/delete/{id}",[HeroImageController::class,"delete"]);