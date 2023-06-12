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

Route::get('clear', function () {
    \Artisan::call('cache:clear');
    \Artisan::call('config:clear');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('optimize');
    dd("All clear!");
});

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/service-list', [\App\Http\Controllers\Frontend\FrontendController::class, 'list']);
Route::post('/service/request', [\App\Http\Controllers\Frontend\FrontendController::class, 'serviceRequest']);
Route::get('/service/details/{id}/{slug}', [\App\Http\Controllers\Frontend\FrontendController::class, 'details']);
Route::get('/contact', [\App\Http\Controllers\Frontend\FrontendController::class, 'contact']);
Route::post('/contact/store', [\App\Http\Controllers\Frontend\FrontendController::class, 'contactStore']);
Route::get('/all-project', [\App\Http\Controllers\Frontend\FrontendController::class, 'showAllProject']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list/contact', [App\Http\Controllers\Admin\ServiceController::class, 'contactList']);
Route::get('/delete/contact/list/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'contactListDelete']);
Route::get('/client/feedback', [App\Http\Controllers\Admin\AdminController::class, 'clientFeedback']);
Route::get('/create/client/feedback', [App\Http\Controllers\Admin\AdminController::class, 'clientFeedbackCreate']);
Route::post('/feedback/store', [App\Http\Controllers\Admin\AdminController::class, 'clientFeedbackStore']);
Route::get('/feedback/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'clientFeedbackDelete']);
Route::group(['prefix' => 'service'], function (){
    Route::get('/manage', [App\Http\Controllers\Admin\ServiceController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\Admin\ServiceController::class, 'create']);
    Route::post('/store', [App\Http\Controllers\Admin\ServiceController::class, 'store']);
    Route::get('/edit/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'edit']);
    Route::post('/update/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'update']);
    Route::get('/delete/{service}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy']);

    //Service list
    Route::get('/request/list', [App\Http\Controllers\Admin\ServiceController::class, 'service_list']);
    Route::get('/request/delete/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'service_delete']);
});

Route::group(['prefix' => 'portfolio'], function (){
    Route::get('/manage', [App\Http\Controllers\Admin\PortfolioController::class, 'index']);
    Route::get('/create', [App\Http\Controllers\Admin\PortfolioController::class, 'create']);
    Route::post('/store', [App\Http\Controllers\Admin\PortfolioController::class, 'store']);
    Route::get('/edit/{portfolio}', [App\Http\Controllers\Admin\PortfolioController::class, 'edit']);
    Route::post('/update/{portfolio}', [App\Http\Controllers\Admin\PortfolioController::class, 'update']);
    Route::get('/delete/{portfolio}', [App\Http\Controllers\Admin\PortfolioController::class, 'destroy']);
});

Route::get('/sliders', [\App\Http\Controllers\Admin\SettingController::class, 'sliders']);
Route::get('/slider/create', [\App\Http\Controllers\Admin\SettingController::class, 'sliderCreateForm']);
Route::post('/slider/store', [\App\Http\Controllers\Admin\SettingController::class, 'sliderStore']);
Route::get('/slider/edit/{slider}', [\App\Http\Controllers\Admin\SettingController::class, 'sliderEdit']);
Route::post('/slider/update/{slider}', [\App\Http\Controllers\Admin\SettingController::class, 'sliderUpdate']);
Route::get('/slider/delete/{slider}', [\App\Http\Controllers\Admin\SettingController::class, 'sliderDelete']);
