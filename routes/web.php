<?php

use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\allUmkmController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\dataUmkmController;
use App\Http\Controllers\dataUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ownerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\umkmDetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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





Route::redirect('/', '/guestPage');

Route::get('/guestPage', function () {
    return view('menu.guest');
})->name('guest');

Route::middleware('auth')->group(function () {


    Route::get('/admin', [AdminController::class, 'index'])->name('admins');
    Route::get('/home/{id}', [HomeController::class, 'index'])->name('home');
    Route::get('/dataUmkm', [dataUmkmController::class, 'index'])->name('dataUmkm');
    Route::get('/dataUser', [dataUserController::class, 'index'])->name('dataUser');
    Route::get('/owner/{id}', [ownerController::class, 'index'])->name('owner');
    Route::get('/allUmkm', [allUmkmController::class, 'index'])->name('allUmkm');


    Route::get('/umkmDetail/{id}', [umkmDetailController::class, 'index'])->name('detail');

    Route::get('/aboutUs', [aboutUsController::class, 'index'])->name('about');
});


Auth::routes();

Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
Route::post('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordPost'])->name('forgot.password.post');

Route::get('/resetPassword/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');

Route::post('/resetPassword', [ForgotPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

Route::resource('umkm', UMKMController::class);
Route::resource('admin', AdminController::class);


Route::get('getUmkm', [HomeController::class, 'getData'])->name('umkm.getData');
Route::get('getUser', [HomeController::class, 'getUser'])->name('getUser');


Route::get('exportExcel', [AdminController::class, 'exportExcel'])->name('admin.exportExcel');
Route::get('exportPdf', [AdminController::class, 'exportPdf'])->name('admin.exportPdf');
Route::get('download-file/{umkmId}', [AdminController::class, 'downloadFile'])->name('admin.downloadFile');


