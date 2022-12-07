<?php

use Illuminate\Support\Facades\Route;
use App\Sidecar\PrintInterval;
use \Hammerstone\Sidecar\Results\SettledResult;

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
    $pending = PrintInterval::executeAsync([
        'max' => 4
    ]);

    // Halt execution now while we wait for the Lambda
    // execution to finish. (It may already be done!)
    $result = $pending->settled();

    return $result instanceof \Hammerstone\Sidecar\Results\SettledResult;
});
