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

Route::view('/', 'welcome')->name('inicio');
Route::view('conocenos', 'conocenos')->name('conocenos');
Route::view('enlaces', 'enlaces')->name('enlaces');

Route::resource('sites', SiteController::class,[
    'names' => 'sites',
    'parameters' => ['site' => 'id']
]);