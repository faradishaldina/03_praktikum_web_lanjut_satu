<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::prefix('products')->group(function(){
    Route::get('/',[ProductController::class, 'index']);
    Route::get('/one',[ProductController::class, 'one']);
    Route::get('/two',[ProductController::class, 'two']);
    Route::get('/three',[ProductController::class, 'three']);
});
Route::get('/news/{title}', [NewsController::class, 'news']);
Route::prefix('program')->group(function(){
    Route::get('/one',[ProgramController::class, 'one']);
    Route::get('/two',[ProgramController::class, 'two']);
    Route::get('/three',[ProgramController::class, 'three']);
});
Route::get('/about-us', function(){
    return view('about-us');
});
Route::resource('/contact-us', ContactUsController::class)->only(['index']);
