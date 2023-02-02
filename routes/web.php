<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardHeroSectionController;
use App\Http\Controllers\DashboardTrustedCompany;
use App\Http\Controllers\DashboardAboutSectionController;
use App\Http\Controllers\DashboardShopActionController;
use App\Http\Controllers\DashboardMenuSection;
use App\Http\Controllers\DashboardMenu;
use App\Http\Controllers\DashboardComunity;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/comunity', [ComunityController::class,'index']);

Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::resource('/dashboard/herosection',DashboardHeroSectionController::class)->middleware('auth');
Route::resource('/dashboard/trustedcompany',DashboardTrustedCompany::class)->middleware('auth');
Route::resource('/dashboard/aboutsection',DashboardAboutSectionController::class)->middleware('auth');
Route::resource('/dashboard/shopaction',DashboardShopActionController::class)->middleware('auth');
Route::resource('/dashboard/menusection',DashboardMenuSection::class)->middleware('auth');
Route::resource('/dashboard/menu',DashboardMenu::class)->middleware('auth');
Route::resource('/dashboard/comunity',DashboardComunity::class)->middleware('auth');
Route::resource('/dashboard/user',UserController::class)->middleware('auth');