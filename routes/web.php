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

//front end route

Route::get('/',[App\Http\Controllers\front\homePost::class,'home']);

Route::get('/post/{category}/{id}',[App\Http\Controllers\front\singlePost::class,'index']);

Route::get('/{page}', function ($page) {
    return view('front.'.$page);
}); 

Route::post('/contactSubmit',[App\Http\Controllers\front\Contact::class,'contact']);

//front end route



Route::view('/admin/', 'admin.login');

//admin login
Route::post('admin/login_submit', [App\Http\Controllers\adminLogin::class, 'login']);

//admin logout
Route::get('/admin/logout', function () {
    session()->forget('adminLogin');
    session()->forget('adminId');
    session()->flash('error', 'Successfully Logout');
    return view('/admin/login');
});


//public restrict

Route::middleware(['publicRestrict'])->group(function () {

    Route::get('/admin/post/list', [App\Http\Controllers\admin\Post::class, 'listing']);

    Route::view('/admin/post/add', 'admin.post.add');

    Route::post('/admin/post/post_add', [App\Http\Controllers\admin\Post::class, 'add']);

    Route::get('/admin/post/delete/{id}', [App\Http\Controllers\admin\Post::class, 'delete']);

    Route::get('/admin/post/edit/{id}', [App\Http\Controllers\admin\Post::class, 'edit']);

    Route::post('/admin/post/post_update/{id}', [App\Http\Controllers\admin\Post::class, 'update']);


    Route::get('/admin/page/list', [App\Http\Controllers\admin\Page::class, 'listing']);

    Route::view('/admin/page/add', 'admin.page.add');

    Route::post('/admin/page/page_add', [App\Http\Controllers\admin\Page::class, 'add']);

    Route::get('/admin/page/delete/{id}', [App\Http\Controllers\admin\Page::class, 'delete']);

    Route::get('/admin/page/edit/{id}', [App\Http\Controllers\admin\Page::class, 'edit']);

    Route::post('/admin/page/page_update/{id}', [App\Http\Controllers\admin\Page::class, 'update']);


    Route::get('/admin/contact/list',[App\Http\Controllers\admin\Contact::class,'listing']);

});
