<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::match(["POST", "GET"], '/', [FrontController::class, 'home'])
    ->name('home');
Route::match(["POST", "GET"], '/join/{id}', [FrontController::class, 'join_us'])
    ->name('join_us');
Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {
    Route::match(["POST", "GET"], '/signin', [AuthController::class, 'signin'])
        ->name('signin');
    Route::match(["POST", "GET"], '/signin', [AuthController::class, 'signin'])
        ->name('signin');
    Route::match(["POST", "GET"], '/register', [AuthController::class, 'register'])
        ->name('register');
    Route::match(["POST", "GET"], '/email_verified', [AuthController::class, 'email_verified'])
        ->name('email_verified');
    Route::match(["POST", "GET"], '/sign_out', [AuthController::class, 'destroy'])
        ->name('sign_out');
    Route::match(["POST", "GET"], '/lock', [AuthController::class, 'lock'])
        ->name('lock');
});

Route::group(['prefix' => 'back', 'as' => 'back.','middleware' => ['isCustomer']], function () {
    Route::match(["POST", "GET"], '/dashboard', [FrontController::class, 'dashboard'])
        ->name('dashboard');
    Route::match(["POST", "GET"], '/trade', [FrontController::class, 'trade'])
        ->name('trade');
    Route::match(["POST", "GET"], '/price', [FrontController::class, 'price'])
        ->name('price');
    Route::match(["POST", "GET"], '/price/detail/{id}', [FrontController::class, 'price_detail'])
        ->name('price_detail');
    Route::match(["POST", "GET"], '/wallet', [FrontController::class, 'wallet'])
        ->name('wallet');
    Route::match(["POST", "GET"], '/country', [FrontController::class, 'country'])
        ->name('country');
    Route::match(["POST", "GET"], '/setting-profil', [SettingController::class, 'profil'])
        ->name('setting-profil');
    Route::match(["POST", "GET"], '/setting-application', [SettingController::class, 'application'])
        ->name('setting-application');
    Route::match(["POST", "GET"], '/setting-security', [SettingController::class, 'security'])
        ->name('setting-security');
    Route::match(["POST", "GET"], '/setting-activity', [SettingController::class, 'activity'])
        ->name('setting-activity');
    Route::match(["POST", "GET"], '/setting-privacy', [SettingController::class, 'privacy'])
        ->name('setting-privacy');
    Route::match(["POST", "GET"], '/setting-fees', [SettingController::class, 'fees'])
        ->name('setting-fees');
    Route::match(['GET','POST'],'/add_wallet/{id}',[SettingController::class,'add_wallet'])->name('add_wallet');
    Route::match(["POST", "GET"], '/crypto_buy', [SettingController::class, 'getCryptoBuy'])
        ->name('crypto_buy');
    Route::match(["POST", "GET"], '/crypto_sell', [SettingController::class, 'getCryptoSell'])
        ->name('crypto_sell');
    Route::match(["POST", "GET"], '/sell_modal', [SettingController::class, 'sell_modal'])
        ->name('sell_modal');
    Route::match(["POST", "GET"], '/buy_modal', [SettingController::class, 'buy_modal'])
        ->name('buy_modal');
    Route::match(["POST", "GET"], '/withdraw', [PaymentController::class, 'withDrawModal'])
        ->name('withdraw');
    Route::match(["POST", "GET"], '/deposit', [PaymentController::class, 'deposit'])
        ->name('deposit');
});
Route::group(['prefix' => 'payment', 'as' => 'payment.','middleware' => ['isCustomer']], function () {
    Route::match(["POST", "GET"], '/fluttercallback', [PaymentController::class, 'fluttercallback'])
        ->name('fluttercallback');
    Route::match(["POST", "GET"], '/collect_flutterware', [PaymentController::class, 'collect_flutterware'])
        ->name('collect_flutterware');
    Route::match(["POST", "GET"], '/finish_transaction', [PaymentController::class, 'finish_transaction'])
        ->name('finish_transaction');
    Route::match(["POST", "GET"], '/finish_trade', [PaymentController::class, 'finish_trade'])
        ->name('finish_trade');
    Route::match(["POST", "GET"], '/web3bnb', [PaymentController::class, 'web3bnb'])
        ->name('web3bnb');
});
Route::group(['prefix' => 'bk_admin', 'as' => 'admin.','middleware' => ['isAdmin']],function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('bc_dashboard');
    Route::get('/countries',[DashboardController::class,'countries'])
        ->name('bc_countries');
});
