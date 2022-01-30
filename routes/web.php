<?php

use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\BasicInfoController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HeroImageController;
use App\Http\Controllers\HeroOverlayController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UniversalController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\WhyController;
use App\Models\BasicInfo;
use Illuminate\Support\Facades\Route;

//Admin Panel Route
Route::get('/dashboard', [DashboardController::class,"display"])
->middleware(['auth:sanctum', 'verified'])->name("dashboard");

//Main Website Route
Route::get('/', [DashboardController::class,"homePage"])->name("homePage");

//Main Website Page wise Routes
Route::get('/home', [DashboardController::class,"homePage"])->name("home.page"); // dashboard controller will control this one.

Route::get("/home/why",[WebsiteController::class,"why"])->name("why.page");

Route::get("/home/testimonial",[WebsiteController::class,"testimonial"])->name("testimonial.page");

Route::get("/home/product",[WebsiteController::class,"product"])->name("product.page");

Route::get("/home/feedback",[WebsiteController::class,"feedback"])->name("feedback.page");

Route::get("/home/contact",[WebsiteController::class,"contact"])->name("contact.page");

Route::get("/home/product/filter/{catId}",[WebsiteController::class,"filterProducts"]);

Route::get("/home/product/detail/{id}",[WebsiteController::class,"productDetail"]);

//Website Subscriber
Route::post("/home/subscribe",[SubscribersController::class,"subscribe"])->name("subscribe");

//Website Contact
Route::post("/home/contactForm",[ContactController::class,"contact"])->name("contact");

// Brand Routes:
Route::get("/dashboard/showAllBrands",[BrandController::class,"showAll"])->name("showAllBrands");

Route::get("/dashboard/showBrandForm",[BrandController::class, "show"])->name("showBrandForm");

Route::post("/dashboard/addBrand",[BrandController::class,"add"])->name("addBrand");

Route::get("/dashboard/showAllBrands/edit/{id}",[BrandController::class,"edit"]);

Route::post("/dashboard/showAllBrands/update/{id}",[BrandController::class,"update"]);

Route::get("/dashboard/showAllBrands/brandProducts/{id}",[BrandController::class,"brandProducts"]);

Route::get("/dashboard/showAllBrands/delete/{id}",[BrandController::class,"delete"]);

// Category routes:
Route::get("/dashboard/showAllCategories",[CategoryController::class,"showAll"])->name("showAllCategories");

Route::get("/dashboard/showCategoryForm",[CategoryController::class, "show"])->name("showCategoryForm");

Route::post("/dashboard/addCategory",[CategoryController::class,"add"])->name("addCategory");

Route::get("/dashboard/showAllCategories/edit/{id}",[CategoryController::class,"edit"]);

Route::post("/dashboard/showAllCategories/update/{id}",[CategoryController::class,"update"]);

Route::get("/dashboard/showAllCategories/categoryProducts/{id}",[CategoryController::class,"categoryProducts"]);

Route::get("/dashboard/showAllCategories/delete/{id}",[CategoryController::class,"delete"]);

// Product Routes:
Route::get("/dashboard/showAllProducts",[ProductController::class,"showAll"])->name("showAllProducts");

Route::get("/dashboard/showAllProducts/filter/{catId}",[ProductController::class,"filterProducts"]);

Route::get("/dashboard/showProductForm",[ProductController::class, "show"])->name("showProductForm");

Route::post("/dashboard/addProduct",[ProductController::class,"add"])->name("addProduct");

Route::get("/dashboard/showAllProducts/edit/{id}",[ProductController::class,"edit"]);

Route::post("/dashboard/showAllProducts/update/{id}",[ProductController::class,"update"]);

Route::get("/dashboard/showAllProducts/delete/{id}",[ProductController::class,"delete"]);

// BasicInfos Routes:
Route::get("/dashboard/showAllBasicInfos",[BasicInfoController::class,"showAll"])->name("showAllBasicInfos");

Route::get("/dashboard/showBasicInfoForm",[BasicInfoController::class, "show"])->name("showBasicInfoForm");

Route::post("/dashboard/addBasicInfo",[BasicInfoController::class,"add"])->name("addBasicInfo");

Route::get("/dashboard/showAllBasicInfos/edit/{id}",[BasicInfoController::class,"edit"]);

Route::post("/dashboard/showAllBasicInfos/update/{id}",[BasicInfoController::class,"update"]);

Route::get("/dashboard/showAllBasicInfos/delete/{id}",[BasicInfoController::class,"delete"]);

//Social Links Route
Route::post("/dashboard/showAllSocialLinks/update",[SocialController::class,"update"])->name("updateSocialLinks");

//Hero Image Routes:
Route::post("/dashboard/showAllHeroImages/update/{id}",[HeroImageController::class,"update"]);

//HeroOverlay Routes
Route::get("/dashboard/showAllHeroOverlays",[HeroOverlayController::class,"show"]);

Route::get("/dashboard/showAllHeroOverlays/showHeroOverlayForm",[HeroOverlayController::class, "showForm"])->name("showHeroOverlayForm");

Route::post("/dashboard/showAllHeroOverlays/addHeroOverlay",[HeroOverlayController::class,"add"])->name("addHeroOverlay");

Route::get("/dashboard/showAllHeroOverlays/edit/{id}",[HeroOverlayController::class,"edit"]);

Route::post("/dashboard/showAllHeroOverlays/update/{id}",[HeroOverlayController::class,"update"]);

Route::get("/dashboard/showAllHeroOverlays/delete/{id}",[HeroOverlayController::class,"delete"]);

//WhyShop Routes:
Route::get("/dashboard/showAllWhies",[WhyController::class,"show"]);

Route::get("/dashboard/showAllWhies/showWhyForm",[WhyController::class, "showForm"])->name("showWhyForm");

Route::post("/dashboard/showAllWhies/addWhy",[WhyController::class,"add"])->name("addWhy");

Route::get("/dashboard/showAllWhies/edit/{id}",[WhyController::class,"edit"]);

Route::post("/dashboard/showAllWhies/update/{id}",[WhyController::class,"update"]);

Route::get("/dashboard/showAllWhies/delete/{id}",[WhyController::class,"delete"]);

//Arrival Routes:
Route::get("/dashboard/showAllArrivals",[ArrivalController::class,"show"]);

Route::get("/dashboard/showAllArrivals/edit/{id}",[ArrivalController::class,"edit"]);

Route::post("/dashboard/showAllArrivals/update/{id}",[ArrivalController::class,"update"]);

Route::post("/dashboard/showAllArrivals/updateImage/{id}",[ArrivalController::class,"updateImage"]);

//Subscribe Routes:
Route::get("/dashboard/showAllSubscribes",[SubscribeController::class,"show"]);

Route::get("/dashboard/showAllSubscribes/edit/{id}",[SubscribeController::class,"edit"]);

Route::post("/dashboard/showAllSubscribes/update/{id}",[SubscribeController::class,"update"]);

// Testimonial Routes:
Route::get("/dashboard/showAllTestimonials",[TestimonialController::class,"showAll"])->name("showAllTestimonials");

Route::get("/dashboard/showAllTestimonials/filter/{catId}",[TestimonialController::class,"filterTestimonials"]);

Route::get("/dashboard/showTestimonialForm",[TestimonialController::class, "show"])->name("showTestimonialForm");

Route::post("/dashboard/addTestimonial",[TestimonialController::class,"add"])->name("addTestimonial");

Route::get("/dashboard/showAllTestimonials/edit/{id}",[TestimonialController::class,"edit"]);

Route::post("/dashboard/showAllTestimonials/update/{id}",[TestimonialController::class,"update"]);

Route::get("/dashboard/showAllTestimonials/delete/{id}",[TestimonialController::class,"delete"]);

//Message Routes
Route::get("/dashboard/showAllContacts",[ContactController::class,"showAll"])->name("showAllMessages");

Route::get("/dashboard/showAllContacts/delete/{id}",[ContactController::class,"delete"]);

//Subscribers List Routes
Route::get("/dashboard/showAllSubscribers",[SubscribersController::class,"showAll"])->name("showAllSubscribers");

Route::get("/dashboard/showAllSubscribers/delete/{id}",[SubscribersController::class,"delete"]);

//Unisersal Routes:
Route::get("/dashboard/logout",[UniversalController::class,"logout"]);

Route::get("/dashboard/changePasswordForm",[UniversalController::class,"changePasswordForm"])->name("changePasswordForm");

Route::Post("/dashboard/changePassword",[UniversalController::class,"changePassword"])->name("changePassword");

Route::get("/dashboard/changeProfileForm",[UniversalController::class,"changeProfileForm"])->name("changeProfileForm");

Route::Post("/dashboard/changeProfile",[UniversalController::class,"changeProfile"])->name("changeProfile");