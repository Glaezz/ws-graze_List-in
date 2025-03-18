<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
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

Route::get("/", [UserController::class, "index"])->name("home");
Route::post("/add", [UserController::class, "store"])->name("workAdd");
Route::get("/userRead", [UserController::class, "userRead"])->name("userRead");

Route::post("/in", [AdminController::class, "in"])->name("in");
Route::post("/set", [AdminController::class, "set"])->name("set");
Route::get("/admin", [AdminController::class, "transit"])->name("admin");
Route::get("/login", [AdminController::class, "login"])->name("login");
Route::get("/logout", [AdminController::class, "logout"])->name("logout");

Route::put("/status/{user}/done", [WorkController::class, "statDone"])->name("statDone");
Route::put("/status/{user}/paid", [WorkController::class, "statPaid"])->name("statPaid");
Route::delete("/status/{user}/delete", [WorkController::class, "statDelete"])->name("statDelete");
Route::get("/data/{user}/edit", [WorkController::class, "dataEdit"])->name("dataEdit");
Route::put("/data/{user}/update", [WorkController::class, "dataUpdate"])->name("dataUpdate");

