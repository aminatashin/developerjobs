<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[listingController::class, 'index']);
//show create form
Route::get('/listings/create',[listingController::class, 'create'])->middleware('auth');
//Store data in listings/POST
Route::post('/listings', [listingController::class, 'store'])->middleware('auth');
//show edite form
// Route::get('/listings/{listing}/edit', [listingController::class, 'edit'])->middleware('auth');
// //PUT request for edit
// Route::put('/listings/{listing}', [listingController::class, 'update'])->middleware('auth');
// //Delete request
// Route::delete('/listings/{listing}',[listingController::class,'destroy'])->middleware('auth');
// // singile listing
// Route::get('/listings/{listing}', [listingController::class,'show']);
// // shoow register/create form
// Route::get('/register',[UserController::class,'create'])->middleware('guest');
// //Post register
// Route::post('/users',[UserController::class,'store']);
// //Logout
// Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
// //show Login
// Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
// //post Login
// Route::post('/users/authenticate',[UserController::class,'authenticate']);
