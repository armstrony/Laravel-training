<?php

use App\Models\Art;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\DashboardArtController;

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
    return view('home',[
        "title"=>"Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=>"About"
    ]);
});

Route::get('/gallery', [ArtController::class, 'index']);

Route::get('/commission', function () {
    return view('commission',[
        "title"=>"Commission"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('/dashboard/gallery', DashboardArtController::class);




