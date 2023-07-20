<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/',[UserController::class,'show'])->name('login.view');
Route::post('/login',[UserController::class,'checklogin'])->name('login.check');
// Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::middleware(['admin'])->group( function () {

    Route::get('/admin/home',[AdminController::class,'show'])->name('admin.view');
    Route::get('/logout',[UserController::class,'logout'])->name('user.logout');


    //category
    Route::get('/category',[CategoryController::class,"create"])->name('category.create') ;
    Route::post('/category/save',[CategoryController::class,"save"])->name('category.save') ;
    Route::get('/category/view',[CategoryController::class,"view"])->name('category.view') ;
    Route::get('/category/destroy/{id}',[CategoryController::class,"delete"])->name('category.destroy') ;
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');

  //blogs
  Route::get('/blog',[BlogController::class,"create"])->name('blog.create') ;
  Route::post('/blog/save',[BlogController::class,"save"])->name('blog.save') ;
  Route::get('/blog/view',[BlogController::class,"view"])->name('blog.view') ;
  Route::get('/blog/destroy/{id}',[BlogController::class,"delete"])->name('blog.destroy') ;
  Route::get('/blog/edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
  Route::post('/blog/update/{id}',[BlogController::class,'update'])->name('blog.update');

  Route::get('/blog/details',[BlogController::class,"viewDetails"])->name('blog.details') ;
  Route::get('/blog/content',[BlogController::class,"viewContent"])->name('blog.content') ;


});
