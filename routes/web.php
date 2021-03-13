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

<<<<<<< HEAD
Route::get('/test', function () {
    $config = new \RouterOS\Config([
        'host' => '192.168.88.1',
        'user' => 'admin',
        'pass' => 'admin',
        'port' => 8728,
    ]);
    $client = new \RouterOS\Client($config);
    dd($client);
});
=======
Route::get('/test', [App\Http\Controllers\GuestController::class, 'lipaNaMpesaPassword']);
>>>>>>> ac913a7865316ba8996f2dd59cd8ea4221fc0e27

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/router_login', [App\Http\Controllers\HomeController::class, 'routerLogin'])->name('router_login');
    Route::post('/router_verify', [App\Http\Controllers\HomeController::class, 'init'])->name('router_verify');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
