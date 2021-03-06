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

Route::get('/', function () {
    return view('home');})->name('home');

Route::get('/product', function (){
    return view('product'); })->name('product');

Route::get('/about', function (){
    return view('about');})->name('about');

Route::get('/contact', function (){
    return view('contact');})->name('contact');



use App\Http\Controllers\ContactController;

Route::post('/contact/sumbit',  [ContactController::class, 'sumbit'])->name('contact-form');
Route::get('/contact/all',  [ContactController::class, 'allData'])->name('contact-data');
