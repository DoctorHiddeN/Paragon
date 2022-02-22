<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\SearchController;

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

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/About',[HomeController::class, 'about'])->name('about');
Route::post('/result',[SearchController::class, 'result'])->name('result');
Route::get('/Categories/{category}/{article}',[HomeController::class, 'show'])->name('show');
Route::get('/templates',[HomeController::class, 'templates'])->name('templates');
Route::get('/Categories/{category}',[HomeController::class, 'category'])->name('category');
Route::get('ajax',function() {
    return view('message');
 });




                    //Body content Routes
Route::prefix('Articles')->group(function(){
    Route::get('/{slug}',[HomeController::class,'show'])->name('showart');
    Route::Post('/comments/insert',[CommentsController::class,'store'])->name('ins-comment');
});
                    //All User Routes 
Route::group(['prefix' =>('user'),'middleware'=>['isUser','auth']],function(){
    Route::get('/pannel',[UserController::class,'index'])->name('us-pannel');
    Route::post('/pannel',[UserController::class,'order'])->name('order');

});

                    //All Admin Routes 

Route::group(['prefix' =>('admin'),'middleware'=>['isAdmin','auth']],function(){
                                //Article Routes //
    Route::put('/articles/edit/{name}',[ArticlesController::class,'thumbnail'])->name('thumbnail');
    Route::post('/articles/edit/flag/{flag}', [ ArticlesController::class, 'flags' ])->name('flag');
    Route::get('/',[AdminController::class,'index'])->name('ad-home');
    Route::get('/admin-log',[AdminController::class,'adLogin']);
    Route::get('/articles/add',[ArticlesController::class,'create'])->name('articles-add');
    Route::get('/articles',[ArticlesController::class,'index'])->name('articles-list');
    Route::get('/articles/destroy/{article}',[ArticlesController::class,'destroy'])->name('artdelete');
    Route::put('/articles/edit/update/{article}',[ArticlesController::class,'update'])->name('artupdate');
    Route::get('/articles/edit/{article}',[ArticlesController::class,'edit'])->name('artedit');
    Route::post('/articles/add',[ArticlesController::class,'store'])->name('artadd');
    Route::get('/test',[ArticlesController::class,'test'])->name('test');
    Route::get('image-upload', [ ArticlesController::class, 'upImages' ])->name('image.upload');
    Route::post('image-upload', [ ArticlesController::class, 'upImages' ])->name('image.upload.post');
    Route::post('/test/{test1}/{test2}',[ArticlesController::class,'testshow'])->name('testshow');
                                    //Category Routes//
    Route::get('/categories',[CategoriesController::class,'catList'])->name('catList');
    Route::get('/categories/destroy/{categories}',[CategoriesController::class,'destroy'])->name('catdelete');
    Route::get('/categories/add',[CategoriesController::class,'create'])->name('categories-add');
    Route::post('/categories/add',[CategoriesController::class,'store'])->name('catadd');
                                        //Comment Routes//
    Route::get('/comments',[CommentsController::class,'index'])->name('comments');
    Route::get('/comments/{comment}',[CommentsController::class,'flag'])->name('cm-flag');
    Route::get('/reload-captcha', [CaptchaServiceController::class, 'reloadCaptcha']);
                                        //admin-Configs
    Route::get('/new-user',[UsersController::class,'register'])->name('register');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
  //images upload \\

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
