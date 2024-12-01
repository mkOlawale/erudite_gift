<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\giftController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [giftController::class, 'redirect']);     
Route::get('/gift/usa', [giftController::class, 'us_available_gift']);     
Route::get('/gift/united_kingdom', [giftController::class, 'gift_to_uk']);     
Route::get('/gift/canada', [giftController::class, 'canadaGift']);     
Route::get('/gift/asian', [giftController::class, 'AsianGift']);     
Route::get('/gift/europe', [giftController::class, 'europeGift']);     
Route::get('/gift/others_part', [giftController::class, 'othersGift']);   


// product single us
Route::get('/us/jewelry', [giftController::class, 'jewelry']);   

