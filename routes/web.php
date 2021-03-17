<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\transactController;
use App\Http\Middleware\checkUser;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('userProfile', 'userProfile');

Route::view('/', 'index');
Route::view('signup', 'signup');
Route::post('signingin', [userController::class, 'signin']);
Route::post('signingup', [userController::class, 'signup']);
Route::get('signingout', [userController::class, 'signout']);

Route::group(['middleware' =>['checkUser']], function(){

    Route::view('home', 'home');
    Route::view('about', 'about');
    Route::view('profile', 'profile');
    Route::view('contact', 'contact');
    
    Route::view('addMoney', 'addMoney');
    Route::view('sendMoney', 'sendMoney');
    Route::post('sending', [paymentController::class, 'send']);
    Route::post('adding', [paymentController::class, 'add']);

    Route::view('try', 'try');
    Route::get('card', [userController::class, 'cardView']);

    Route::get('transact', [transactController::class, 'history']);
    Route::view('cardDetails', 'cardDetails');
    Route::get('bills', [paymentController::class, 'payBill']);
    Route::get('sendBill/{name}/{id}', [paymentController::class, 'billing']);
    Route::post('sendBill/{name}/{id}/sending', [paymentController::class, 'send']);

});