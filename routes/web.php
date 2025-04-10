<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\giftController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\admincheck;
use App\Http\Middleware\userChecker;


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
Route::get('/testing', function () {
    return view('others');
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

// Route::post('/test_produ', [giftController::class, 'testPayment']);     
Route::get('/redirect', [giftController::class, 'redirect']);     

Route::get('/gift/usa', [giftController::class, 'us_available_gift']);     
Route::get('/gift/united_kingdom', [giftController::class, 'gift_to_uk']);     
Route::get('/gift/canada', [giftController::class, 'canadaGift']);     
Route::get('/gift/asian', [giftController::class, 'AsianGift']);     
Route::get('/gift/europe', [giftController::class, 'europeGift']);     
Route::get('/gift/others_part', [giftController::class, 'othersGift']);   

// product single usa
Route::get('/us/jewelry', [giftController::class, 'jewelry']);   
Route::get('/us/adult', [giftController::class, 'usadult']);   
Route::get('/us/clothing', [giftController::class, 'usaclothing']);   
Route::get('/us/flower', [giftController::class, 'usaFlower']);   
Route::get('/us/food', [giftController::class, 'usaFood']);   
Route::get('/us/footwear', [giftController::class, 'usaFootwear']);   
Route::get('/us/kids', [giftController::class, 'usaKids']);   
Route::get('/us/perfume', [giftController::class, 'usaPerfume']);   
Route::get('/us/rings', [giftController::class, 'usaRings']);   
Route::get('/us/teddy', [giftController::class, 'usaTeddy']);   
Route::get('/us/urgent', [giftController::class, 'usaUrgent']);   
Route::get('/us/watch', [giftController::class, 'usaWatch']);   
Route::get('/us/items', [giftController::class, 'items']);   
Route::get('/us/fancard', [giftController::class, 'fancard']);   
Route::get('/us/document', [giftController::class, 'document']);   
Route::get('us/car', [giftController::class, 'car']);   
Route::get('/usa_productdetails/{id}', [giftController::class, 'UsaProductsDetails']);   
// product single United Kingdom
Route::get('uk/jewelry', [giftController::class, 'ukjewelry']);   
Route::get('uk/adult', [giftController::class, 'ukdult']);   
Route::get('uk/clothing', [giftController::class, 'ukclothing']);   
Route::get('uk/flower', [giftController::class, 'ukFlower']);   
Route::get('uk/food', [giftController::class, 'ukFood']);   
Route::get('uk/footwear', [giftController::class, 'ukFootwear']);   
Route::get('uk/kids', [giftController::class, 'ukKids']);   
Route::get('uk/perfume', [giftController::class, 'ukPerfume']);   
Route::get('uk/rings', [giftController::class, 'ukRings']);   
Route::get('uk/teddy', [giftController::class, 'ukTeddy']);   
Route::get('uk/urgent', [giftController::class, 'ukUrgent']);   
Route::get('uk/watch', [giftController::class, 'ukWatch']);  
Route::get('uk/items', [giftController::class, 'ukitems']);   
Route::get('uk/fancard', [giftController::class, 'ukfancard']);   
Route::get('uk/document', [giftController::class, 'ukdocument']); 
Route::get('uk/car', [giftController::class, 'ukCar']); 
Route::get('/uk_productdetails/{id}', [giftController::class, 'UkProductsDetails']); 
  

// product single Canada
Route::get('canada/jewelry', [giftController::class, 'canadajewelry']);   
Route::get('canada/adult', [giftController::class, 'canadadult']);   
Route::get('canada/clothing', [giftController::class, 'canadaclothing']);   
Route::get('canada/flower', [giftController::class, 'canadaFlower']);   
Route::get('canada/food', [giftController::class, 'canadaFood']);   
Route::get('canada/footwear', [giftController::class, 'ucanadaFootwear']);   
Route::get('canada/kids', [giftController::class, 'canadaKids']);   
Route::get('canada/perfume', [giftController::class, 'canadaPerfume']);   
Route::get('canada/rings', [giftController::class, 'canadaRings']);   
Route::get('canada/teddy', [giftController::class, 'canadaTeddy']);   
Route::get('canada/urgent', [giftController::class, 'canadaUrgent']);   
Route::get('canada/watch', [giftController::class, 'canadaWatch']);   
Route::get('canada/items', [giftController::class, 'canadaitems']);   
Route::get('canada/fancard', [giftController::class, 'canadafancard']);   
Route::get('canada/document', [giftController::class, 'canadadocument']);   
Route::get('canada/car', [giftController::class, 'canadaCar']);   
Route::get('/canada_productdetails/{id}', [giftController::class, 'CanadaProductsDetails']);
// product single Europe
Route::get('europe/jewelry', [giftController::class, 'europejewelry']);   
Route::get('europe/adult', [giftController::class, 'europedult']);   
Route::get('europe/clothing', [giftController::class, 'europeclothing']);   
Route::get('europe/flower', [giftController::class, 'europeFlower']);   
Route::get('europe/food', [giftController::class, 'europeFood']);   
Route::get('europe/footwear', [giftController::class, 'ueuropeFootwear']);   
Route::get('europe/kids', [giftController::class, 'europeKids']);   
Route::get('europe/perfume', [giftController::class, 'europePerfume']);   
Route::get('europe/rings', [giftController::class, 'europeRings']);   
Route::get('europe/teddy', [giftController::class, 'europeTeddy']);   
Route::get('europe/urgent', [giftController::class, 'europeUrgent']);   
Route::get('europe/watch', [giftController::class, 'europeWatch']);  
Route::get('europe/items', [giftController::class, 'europeitems']);   
Route::get('europe/fancard', [giftController::class, 'europefancard']);   
Route::get('europe/document', [giftController::class, 'europedocument']);  
Route::get('europe/car', [giftController::class, 'europeCar']);  
Route::get('/europe_productdetails/{id}', [giftController::class, 'EuropeProductsDetails']);

// product single Asian
Route::get('asian/jewelry', [giftController::class, 'asianjewelry']);   
Route::get('asian/adult', [giftController::class, 'asiandult']);   
Route::get('asian/clothing', [giftController::class, 'asianclothing']);   
Route::get('asian/flower', [giftController::class, 'asianFlower']);   
Route::get('asian/food', [giftController::class, 'asianFood']);   
Route::get('asian/footwear', [giftController::class, 'uasianFootwear']);   
Route::get('asian/kids', [giftController::class, 'asianKids']);   
Route::get('asian/perfume', [giftController::class, 'asianPerfume']);   
Route::get('asian/rings', [giftController::class, 'asianRings']);   
Route::get('asian/teddy', [giftController::class, 'asianTeddy']);   
Route::get('asian/urgent', [giftController::class, 'asianUrgent']);   
Route::get('asian/watch', [giftController::class, 'asianWatch']);  
Route::get('asian/items', [giftController::class, 'asianitems']);   
Route::get('asian/fancard', [giftController::class, 'asianfancard']);   
Route::get('asian/document', [giftController::class, 'asiandocument']);   
Route::get('asian/car', [giftController::class, 'asiancar']);   
Route::get('/asian_productdetails/{id}', [giftController::class, 'AsianProductsDetails']);

Route::middleware([userChecker::class])->group(function(){
Route::get('/buy_usa/{id}', [giftController::class, 'formUsa']);   
Route::get('/buy_uk/{id}', [giftController::class, 'formUk']);   
Route::get('/buy_canada/{id}', [giftController::class, 'formCanada']);   
Route::get('/buy_europe/{id}', [giftController::class, 'formEurope']);   
Route::get('/buy_asian/{id}', [giftController::class, 'formAsian']);   

Route::post('/logout', [giftController::class, 'logout'])->name('logout'); 
Route::get('/orders', [giftController::class, 'myorders']); 


Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
});

Route::middleware([admincheck::class])->group(function(){
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
Route::get('/showeurope_products', [adminController::class, 'showEuropeProduct']);   
Route::get('/editeurope_product/{id}', [adminController::class, 'editEuropeProducts']);   
Route::post('/updateeurope_products/{id}', [adminController::class, 'updateEuropeProducts']);   
Route::get('/asianproduct', [adminController::class, 'addAsianProduct']);   
Route::get('/showasianproduct', [adminController::class, 'showAsianProduct']);   
Route::get('/editasian_products/{id}', [adminController::class, 'editAsianProduct']);   
Route::post('/updateasian_products/{id}', [adminController::class, 'updateAsianProduct']);   
Route::get('/admin_order', [adminController::class, 'order']);   
Route::post('/send_email/{id}', [adminController::class, 'sendEmail']);   
Route::post('/send_email_notification/{id}', [adminController::class, 'sendEmailNotification']);   


Route::post('/addusa_products', [adminController::class, 'postusaprod']);   
Route::post('/adduk_products', [adminController::class, 'postukprod']);   
Route::post('/addasianproduct', [adminController::class, 'postAsianprod']);   
Route::post('/addcanada_products', [adminController::class, 'postCanadaprod']);   
Route::post('/addeurope_products', [adminController::class, 'postEuropeprod']);   
Route::get('/deleteasian_product/{id}', [adminController::class, 'deleteAsian']);   
Route::get('/deletecanada_product/{id}', [adminController::class, 'deleteCanada']);   
Route::get('/deleteeuro_product/{id}', [adminController::class, 'deleteEurope']);   
Route::get('/deleteuk_product/{id}', [adminController::class, 'deleteUk']);   
Route::get('/deleteusa_product/{id}', [adminController::class, 'deleteUsa']);   
Route::get('/delivered/{id}', [adminController::class, 'delivered']);   
Route::get('/view_user', [adminController::class, 'AllUser']);   
Route::get('/view_payment', [adminController::class, 'Viewpayment']);   
});
Route::post('/search', [giftController::class, 'search']); 
// payments
