<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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
    return view('front.index');
});
Route::get('contact', function () {
    return view('front.contact');
});
Route::post('save-contact', [ContactController::class, 'save_contact'])->name('save.contact');

Route::get('about', function () {
    return view('front.about');
});
