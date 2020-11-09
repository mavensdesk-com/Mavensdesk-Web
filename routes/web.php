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
Route::get('/service_web_app_development.html', [App\Http\Controllers\HomeController::class, 'service_web_app_development'])->name('service_web_app_development');
Route::get('/service_seo_digital_marketing.html', [App\Http\Controllers\HomeController::class, 'service_seo_digital_marketing'])->name('service_seo_digital_marketing');
Route::get('/service_traning_skills_development.html', [App\Http\Controllers\HomeController::class, 'service_traning_skills_development'])->name('service_traning_skills_development');
Route::get('/service_oracle_erp_consultancy.html', [App\Http\Controllers\HomeController::class, 'service_oracle_erp_consultancy'])->name('service_oracle_erp_consultancy');
Route::get('/service_recruitment_application.html', [App\Http\Controllers\HomeController::class, 'service_recruitment_application'])->name('service_recruitment_application');
Route::get('/service_public_relations.html', [App\Http\Controllers\HomeController::class, 'service_public_relations'])->name('service_public_relations');
Route::get('/service_branding_promotion.html', [App\Http\Controllers\HomeController::class, 'service_branding_promotion'])->name('service_branding_promotion');
Route::get('/service_business_Advisory.html', [App\Http\Controllers\HomeController::class, 'service_business_Advisory'])->name('service_business_Advisory');
Route::get('/myapps.html', [App\Http\Controllers\HomeController::class, 'myapps'])->name('myapps');

Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'contactUS']);
Route::post('contact-us', [App\Http\Controllers\ContactController::class, 'contactSaveData'])->name('contactus.store');