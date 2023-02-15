<?php

use Illuminate\Support\Facades\Artisan;
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
Route::get('/migrate', function () {
    $output = [];
    Artisan::call('migrate', $output);
    dd(Artisan::output());
});
Route::get('/pull', function () {
    $output = exec('git pull 2>&1', $output, $return_var);
    dd($output);
});
Route::get('/', function () {
    return view('welcome');
});
