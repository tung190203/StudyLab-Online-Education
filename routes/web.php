<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[ClientController::class,'home'])->name("client.home");
Route::get("/about",[ClientController::class,'about'])->name("client.about");
Route::get("/course",[ClientController::class,'course'])->name("client.course");
Route::get("/instructor",[ClientController::class,'instructor'])->name("client.instructor");
Route::get("/instructor-detail",[ClientController::class,'instructorDetail'])->name("client.instructor-detail");
Route::get("/blog",[ClientController::class,'blog'])->name("client.blog");
Route::get("/blog-detail",[ClientController::class,'blogDetail'])->name("client.blog-detail");
Route::get("/contact",[ClientController::class,'contact'])->name("client.contact");
