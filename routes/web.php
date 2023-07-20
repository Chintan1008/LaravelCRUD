<?php

use Illuminate\Support\Facades\Route;
use App\Models\Ajax;
use App\Http\Controllers\AjaxController;
// use App\Http\Middleware\alreadyLogin;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/registration',[AjaxController::class,'index']);
Route::get('/registration',function(){
    return view('registerUser');
});

// Route::get('/registration',[AjaxController::class,'registration'])->middleware('alreadyLogin');
Route::post('/registration',[AjaxController::class,'store']);

Route::get('/login',[AjaxController::class,'index']) ;

Route::get('/userData',[AjaxController::class,'show'])->middleware('isLogin');

Route::get('user/{id}/edit',[AjaxController::class,'edit'])->middleware('isLogin');

Route::put('/user/{id}/update',[AjaxController::class,'update'])->middleware('isLogin');

Route::get('user/{id}/delete',[AjaxController::class,'destroy'])->middleware('isLogin');

Route::post('/login_user',[AjaxController::class,'authUser']);

Route::get('/logout',[AjaxController::class,'logout']);

// Route::get('/new',function(){
//     return view('registerUser');
// });
