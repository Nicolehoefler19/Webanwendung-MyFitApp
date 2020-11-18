<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/training', [App\Http\Controllers\HomeController::class, 'training'])->name('training');

Route::get('/profil', [App\Http\Controllers\HomeController::class, 'profil'])->name('profil');

Route::post('/upload', [App\Http\Controllers\UploadController::class, 'uploadImage']);

Route::post('/edit', [App\Http\Controllers\UploadController::class, 'editImage']);

Route::post('/savebirth', [App\Http\Controllers\ProfilupdateController::class, 'saveBirthdate']);

Route::get('/deletebirth', [App\Http\Controllers\ProfilupdateController::class, 'deleteBirthdate']);

Route::post('/savecountry', [App\Http\Controllers\ProfilupdateController::class, 'saveCountry']);

Route::get('/deletecountry', [App\Http\Controllers\ProfilupdateController::class, 'deleteCountry']);

Route::get('/delete', [App\Http\Controllers\UploadController::class, 'deleteImage']);

Route::get('nutrition', function () {
    return view('nutrition');
});

Auth::routes();

