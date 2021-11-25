<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\CategoryController;

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
#admin 
Route::prefix('admin')->group(function() {  
    Route::resource('category', CategoryController::class)->parameters([
        'category' => 'category_id'
    ]);
    Route::get('form', function() {
        return view('admin.template.form');
    });
    Route::get('table', function() {
        return view('admin.template.table_data');
    });
});
Route::prefix('client/page')->group(function () {
    Route::get('shop', function () {
        return view('client.page.shop');
    })->name('client.shop');
    #home
    Route::get('home', function () {
        return view('client.page.home');
    })->name('client.home');   
    #cart
    Route::get('cart', function () {
        return view('client.page.cart');
    })->name('client.cart');
    #checkout
    Route::get('checkout', function () {
        return view('client.page.checkout');
    })->name('client.checkout');
    #detail
    // Route::get('detail', [Client_Product_Controller::class, 'get_detail'])->name('client.detail');
    #login
    Route::get('login', function () {
        return view('client.page.login');
    })->name('client.login');
    #register
    Route::get('register', function () {
        return view('client.page.register');
    })->name('client.register');
    #about
    Route::get('about', function () {
        return view('client.page.about');
    })->name('client.about');
    #contact
    Route::get('contact', function () {
        return view('client.page.contact');
    })->name('client.contact');
    #thankyou
    Route::get('thankyou', function () {
        return view('client.page.thankyou');
    })->name('client.thankyou');
    #privacy policy
    Route::get('privacy', function () {
        return view('client.page.privacy');
    })->name('client.privacy');
    #terms conditions
    Route::get('terms-conditions', function () {
        return view('client.page.terms_conditions');
    })->name('client.terms_conditions');
    # return policy
    Route::get('return-policy', function () {
        return view('client.page.return_policy');
    })->name('client.return_policy');
});
