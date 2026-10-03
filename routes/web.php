<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
Route::get("/",function(){return view ('home');});
Route::get("/about",function(){return view ('about');});
Route::get("/contact",function(){return view ('contactus');});
Route::get("/projects", [ProjectController::class,"showprojects"]);


Route::get("/admin/projects", [ProjectController::class,"index"]);
Route::get("/admin/addprojects/", [ProjectController::class,"create"]);

Route::post("/admin/saveproject", [ProjectController::class,"store"]);
Route::delete("/admin/deleteproject/{id}",[ProjectController::class,"destroy"]);
Route::get("/editproject/{id}",[ProjectController :: class,"edit"]);
Route::put("/updateproject/{id}",[ProjectController ::class,"update"]);
Route::get("/admin/dashboard" , [DashboardController::class,"showsummary"]);

Route::get("/admin/contact", [EnquiryController::class,"index"]);
Route::get("/admin/addcontacts", [EnquiryController::class,"create"]);
Route::post("/admin/saverecord", [EnquiryController::class,"store"]);
Route::delete("/admin/deletecontact/{id}",[EnquiryController::class,"destroy"]);
Route::get("/editcontact/{id}",[EnquiryController :: class,"edit"]);
Route::put("/updatecontact/{id}",[EnquiryController ::class,"update"]);
Route::get("/login" , [UserController::class,"login"]);
Route::get("/logincheck" , [UserController::class,"logincheck"]);

