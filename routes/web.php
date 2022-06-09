<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssementModelController;

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

Route::get('/','App\Http\Controllers\Frontend\ViewProductController@index')->name('frontendhome');
Route::get('/singleproductdetails/{id}','App\Http\Controllers\Frontend\ViewProductController@show')->name('singleproductdetails');

Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
    Route::group(['prefix'=>'/product'],function(){
        Route::get('/addproduct',[AssementModelController::class,'create'])->middleware(['auth'])->name('addproduct');
        Route::post('/addproductstore',[AssementModelController::class,'store'])->middleware(['auth'])->name('addproductstore');
        Route::get('/manageproduct',[AssementModelController::class,'index'])->middleware(['auth'])->name('manageproduct');
        Route::get('/productedit/{id}',[AssementModelController::class,'edit'])->middleware(['auth'])->name('productedit');
        Route::post('/productupdate/{id}',[AssementModelController::class,'update'])->middleware(['auth'])->name('productupdate');
        Route::get('/productdelete/{id}',[AssementModelController::class,'destroy'])->middleware(['auth'])->name('productdelete');
    });
});




require __DIR__.'/auth.php';
