<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\giftController;
use App\Http\Controllers\adminController;

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
// admin controller
Route::get('/usa_product', [adminController::class, 'addUsaProduct']);   
Route::get('/showusa_product', [adminController::class, 'showUSaProduct']);   
Route::get('/editusa_product/{id}', [adminController::class, 'editusaProducts']);   
Route::post('/update_products/{id}', [adminController::class, 'updateProducts']);   
Route::get('/uk_products', [adminController::class, 'addUkProduct']);   
Route::get('/showuk_product', [adminController::class, 'showUkProduct']);   
Route::get('/edituk_product/{id}', [adminController::class, 'editUkProducts']);   
Route::post('/updateuk_products/{id}', [adminController::class, 'updateUkProducts']);   
Route::get('/canada_products', [adminController::class, 'addCanadaProduct']);   
Route::get('/showcanada_products', [adminController::class, 'showCanadaProduct']);   
Route::get('/editcanada_product/{id}', [adminController::class, 'editCanadaProducts']);   
Route::post('/updatecanada_products/{id}', [adminController::class, 'updateCanadaProducts']);   
Route::get('/europe_products', [adminController::class, 'addEuropeProduct']);   
Route::get('/showeurope_products', [adminController::class, 'showCanadaProduct']);   
Route::get('/editeurope_product/{id}', [adminController::class, 'editCanadaProducts']);   
Route::post('/updateeurope_products/{id}', [adminController::class, 'updateEuropeProducts']);   
Route::get('/others_products', [adminController::class, 'addOtherProduct']);   

Route::post('/addusa_products', [adminController::class, 'postusaprod']);   
Route::post('/adduk_products', [adminController::class, 'postukprod']);   
Route::post('/other_products', [adminController::class, 'postOtherprod']);   
Route::post('/addcanada_products', [adminController::class, 'postCanadaprod']);   
Route::post('/addeurope_products', [adminController::class, 'postEuropeprod']);   


// product single us
Route::get('/us/jewelry', [giftController::class, 'jewelry']);   

