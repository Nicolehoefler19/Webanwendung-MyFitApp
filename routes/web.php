<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UploadController;

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

Route::get('/', function () {
    return view('start');
});

Route::get('/arme', function () {
    return view('arme');
});

Route::get('/ausdauer', function () {
    return view('ausdauer');
});

Route::get('/brust', function () {
    return view('brust');
});

Route::get('/ruecken', function () {
    return view('ruecken');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/allusers', [App\Http\Controllers\UsertableController::class, 'userTable']);

Route::get('/training', [App\Http\Controllers\HomeController::class, 'training'])->name('training');

Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');

Route::post('/upload', [App\Http\Controllers\UploadController::class, 'uploadImage']);

Route::post('/edit', [App\Http\Controllers\UploadController::class, 'editImage']);

Route::post('/savebirth', [App\Http\Controllers\ProfilupdateController::class, 'saveBirthdate']);

Route::get('/deletebirth', [App\Http\Controllers\ProfilupdateController::class, 'deleteBirthdate']);

Route::post('/savecountry', [App\Http\Controllers\ProfilupdateController::class, 'saveCountry']);

Route::get('/deletecountry', [App\Http\Controllers\ProfilupdateController::class, 'deleteCountry']);

Route::get('/delete', [App\Http\Controllers\UploadController::class, 'deleteImage']);

Route::get('/search', [App\Http\Controllers\UsersearchController::class, 'search']);

Route::get('/store', [App\Http\Controllers\BookmarkController::class, 'collectVideos']);

Route::get('/insertvid1', [App\Http\Controllers\BookmarkController::class, 'insertv1']);

Route::get('/insertvid2', [App\Http\Controllers\BookmarkController::class, 'insertv2']);

Route::get('/insertvid3', [App\Http\Controllers\BookmarkController::class, 'insertv3']);

Route::get('/insertvid4', [App\Http\Controllers\BookmarkController::class, 'insertv4']);

Route::get('/insertvid4', [App\Http\Controllers\BookmarkController::class, 'insertv4']);

Route::post('/insertcom1', [App\Http\Controllers\CommentController::class, 'postCommentOne']);

Route::post('/insertcom2', [App\Http\Controllers\CommentController::class, 'postCommentTwo']);

Route::post('/insertcom3', [App\Http\Controllers\CommentController::class, 'postCommentThree']);

Route::post('/insertcom4', [App\Http\Controllers\CommentController::class, 'postCommentFour']);

Route::get('/deletecom1', [App\Http\Controllers\CommentController::class, 'deleteCommentOne']);


Route::get('/clear-cache-all', function() {

    Artisan::call('cache:clear');

  

    dd("Cache Clear All");

});

Auth::routes();

