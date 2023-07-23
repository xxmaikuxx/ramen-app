<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\user\MypageController as UserMypageController;
use App\http\Controllers\admin\MypageController as AdminMypageController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\admin\Store_informationController;
use App\http\Controllers\admin\Store_listController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/admin/mypage', [AdminMypageController::class, 'mypage'])->name('admin.mypage');
Route::get('/home', [HomeController::class, 'index'])->name('mypage/home');
Route::view('/admin/login', 'admin/login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('admin/logout', [LoginController::class,'logout']);
Route::view('/admin/register', 'admin/register');
Route::post('/admin/register', [RegisterController::class, 'register']);
Route::view('/admin/home', 'admin/home')->middleware('auth:admin');
Route::get('/admin/store_information', [Store_informationController::class, 'store_information'])->name('admin.store_information.index');
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/mypage',function(){ return view('admin.mypage');})->name('admin.mypage');
    Route::get('/admin/store_information', function(){ return view('admin.store_information.index');})->name('admin.store_information.index');
    Route::post('/admin/store_information', [Store_informationController::class,'store'])->name('store_information.index');
    Route::get('/admin/storelist', [Store_listController::class, 'store_list'])->name('admin.storelist');
    });