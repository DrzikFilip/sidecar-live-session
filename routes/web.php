<?php

use Illuminate\Support\Facades\Route;
use App\Sidecar\PrintInterval;

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
    return view('welcome');
});

Route::get('/lambda', function () {
    // If you're looking for "fire-and-forget" style execution
    $result = PrintInterval::executeAsEvent([
        'max' => 4
    ]);

    dd($result);
});
