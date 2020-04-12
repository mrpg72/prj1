<?php

use Illuminate\Support\Facades\Route;

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
//Auth::routes();
Route::prefix('admin')->middleware('checkrole')->group(function(){
    Route::get('/', 'Back\AdminController@index' )->name('admin.index');// middleware('auth') این دستوز برای زمانیه که فقط بخوایم کاربر لاگین بشه بدوت سطح بندی
    Route::get('/users', 'Back\Usercontroller@index' )->name('admin.users');
    Route::get('/profile/{user}', 'Back\Usercontroller@edit' )->name('admin.profile');
    Route::post('/profileupdate/{user}', 'Back\Usercontroller@update' )->name('admin.profileupdate');
    Route::get('/users/delete/{user}', 'Back\Usercontroller@destroy' )->name('admin.userdelete');
    Route::get('/users/register', 'Back\Usercontroller@show' )->name('admin.userregister');
    Route::post('/users/create', 'Back\Usercontroller@create' )->name('admin.usercreate');
    Route::get('/users/statuse/{user}', 'Back\Usercontroller@updatestatuse' )->name('admin.userstatuse');

});

Route::prefix('admin/categories')->middleware('checkrole')->group(function(){
    Route::get('/create', 'Back\CategoryController@create' )->name('admin.categories.create');
    Route::get('/', 'Back\CategoryController@index' )->name('admin.categories');// middleware('auth') این دستوز برای زمانیه که فقط بخوایم کاربر لاگین بشه بدوت سطح بندی
  
    Route::post('/store', 'Back\CategoryController@store' )->name('admin.categories.store');
    Route::get('/edit/{category}', 'Back\CategoryController@edit' )->name('admin.categories.edit');
    Route::post('/update/{category}', 'Back\CategoryController@update' )->name('admin.categories.update');
    Route::get('/destroy/{category}', 'Back\CategoryController@destroy' )->name('admin.categories.destroy');
  
});

Route::prefix('admin/articles')->middleware('checkrole')->group(function(){
    Route::get('/', 'Back\ArticleController@index' )->name('admin.articles');// middleware('auth') این دستوز برای زمانیه که فقط بخوایم کاربر لاگین بشه بدوت سطح بندی
    Route::get('/create', 'Back\ArticleController@create' )->name('admin.articles.create');
    Route::post('/store', 'Back\ArticleController@store' )->name('admin.articles.store');
    Route::get('/edit/{article}', 'Back\ArticleController@edit' )->name('admin.articles.edit');
    Route::post('/update/{article}', 'Back\ArticleController@update' )->name('admin.articles.update');
    Route::get('/destroy/{article}', 'Back\ArticleController@destroy' )->name('admin.articles.destroy');
    Route::get('/statuse/{article}', 'Back\ArticleController@updatestatuse' )->name('admin.articles.statuse');
});


//Route::get('/register', 'RegisterController@index')->name('register');

Route::get('/profile/{user}', 'Usercontroller@edit' )->name('profile');
Route::post('/upadte/{user}', 'Usercontroller@update' )->name('profileupdate');

Route::get('/', function () {
    return view('front.main');
})->name('home');

Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () { \UniSharp\LaravelFilemanager\Lfm::routes();});
//Route::get('/home', 'HomeController@index')->;
