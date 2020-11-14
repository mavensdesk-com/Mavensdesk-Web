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
    return view('index');
});

Auth::routes();

Route::get('/index.html', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/application_services', [App\Http\Controllers\HomeController::class, 'application_services'])->name('application_services');
Route::get('/digital_services', [App\Http\Controllers\HomeController::class, 'digital_services'])->name('digital_services');
Route::get('/training_services', [App\Http\Controllers\HomeController::class, 'training_services'])->name('training_services');
Route::get('/consulting_services', [App\Http\Controllers\HomeController::class, 'consulting_services'])->name('consulting_services');
Route::get('/recruitment_services', [App\Http\Controllers\HomeController::class, 'recruitment_services'])->name('recruitment_services');
Route::get('/public_relations_services', [App\Http\Controllers\HomeController::class, 'public_relations_services'])->name('public_relations_services');
Route::get('/branding_promotion_services', [App\Http\Controllers\HomeController::class, 'branding_promotion_services'])->name('branding_promotion_services');
Route::get('/business_Advisory_services', [App\Http\Controllers\HomeController::class, 'business_Advisory_services'])->name('business_Advisory_services');
Route::get('/clientTele', [App\Http\Controllers\HomeController::class, 'clientTele'])->name('clientTele');
Route::get('/myapps', [App\Http\Controllers\HomeController::class, 'myapps'])->name('myapps');

Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'contactUS']);
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'contactSaveData'])->name('contactus.store');