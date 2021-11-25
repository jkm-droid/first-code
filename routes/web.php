<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'show_welcome_page'])->name('home');
Route::get('/systems', [SiteController::class, 'show_systems'])->name('site.systems');
Route::post('/contact', [SiteController::class, 'save_contact_message'])->name('site.contact');
