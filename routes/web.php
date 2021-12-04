<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExportExcelController;
use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\ClientController\UserController;
use App\Http\Controllers\AdminController\LaptopController;
use App\Http\Controllers\AdminController\MobileController;
use App\Http\Controllers\ClientController\OrderController;
use App\Http\Controllers\ClientController\PayPalController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\AccessoryController;
use App\Http\Controllers\AdminController\UserControllerAdmin;
use App\Http\Controllers\ClientController\MobileShopController;
use App\Http\Controllers\ClientController\ShopMobileController;
use App\Http\Controllers\ClientController\ShoppingCartController;
#Route admin
Route::prefix('admin')->group(function () {
    #user
    Route::post('/update/user', [UserControllerAdmin::class, 'update'])->name('User.Info.Update');
    Route::get('/users_admin/fetch_data', [UserControllerAdmin::class, 'fetch_data']);
    Route::resource('user_admin', UserControllerAdmin::class)->parameters([
        'user_admin' => 'user_admin_id'
    ]);
    #category
    Route::get('/category/fetch_data', [CategoryController::class, 'fetch_data']);
    Route::resource('category', CategoryController::class)->parameters([
        'category' => 'category_id'
    ]);
    #brand
    Route::get('/brand/search', [BrandController::class, 'search']);
    Route::get('/brand/fetch_data', [BrandController::class, 'fetch_data']);
    Route::resource('brand', BrandController::class)->parameters([
        'brand' => 'brand_id'
    ]);
    //all product start here -------------------------------------------------------
    //1. mobile
    Route::get('/mobile/fetch_data', [MobileController::class, 'fetch_data']);
    Route::resource('mobile', MobileController::class)->parameters([
        'mobile' => 'mobile_id'
    ]);
    #2. laptop
    Route::resource('laptop', LaptopController::class)->parameters([
        'laptop' => 'laptop_id'
    ]);
    #3. accessory
    Route::resource('accessory', AccessoryController::class)->parameters([
        'accessory' => 'accessory_id'
    ]);
    #4. order
    Route::get('/order/fetch_data', [\App\Http\Controllers\AdminController\OrderController::class, 'fetch_data']);
    Route::resource('order', \App\Http\Controllers\AdminController\OrderController::class)->parameters([
        'order' => 'order_id'
    ]);
    #5. user
    Route::resource('user', UserControllerAdmin::class)->parameters([
        'user' => 'user_id'
    ]);
    Route::get('form', function () {
        return view('admin.template.form');
    });
    Route::get('table', function () {
        return view('admin.template.table_data');
    });
    #Export excel
    Route::get('/export_excel', [ExportExcelController::class, 'index']);
    Route::get('/export_excel/excel', [ExportExcelController::class, 'excel']);
});
#Route client
Route::prefix('client/page')->group(function () {
    #Route resource order
    #thankyou 
    Route::get('thankyou/{id}', [OrderController::class, 'show_thankyou'])->name('client.thankyou');
    Route::resource('order', OrderController::class)->parameters([
        'order' => 'order_id'
    ]);
    #shop resource
    Route::resource('user', UserController::class)->parameters([
        'user' => 'user_id'
    ]);
    #order resource
    Route::resource('order', OrderController::class)->parameters([
        'order' => 'order_id'
    ]);
    #shop mobile
    Route::post('shop/mobile/fetch_data', [MobileShopController::class, 'fetch_data'])->name('mobile_client.fetch_data');
    Route::resource('shop/mobile', MobileShopController::class, [
        'names' => [
            'index' => 'mobile_client.index',
            'show' => 'mobile_client.show',
            'store' => 'mobile_client.store',
            'create' => 'mobile_client.create',
            'update' => 'mobile_client.update',
            'edit' => 'mobile_client.edit',
            'destroy' => 'mobile_client.destroy'
        ]
    ]);
    #cart
    Route::prefix('shopping')->group(function () {
        Route::get('cart', [ShoppingCartController::class, 'cartList'])->name('cart.list');
        Route::post('cart', [ShoppingCartController::class, 'addToCart'])->name('cart.store');
        Route::post('update-cart', [ShoppingCartController::class, 'updateCart'])->name('cart.update');
        Route::post('remove', [ShoppingCartController::class, 'removeCart'])->name('cart.remove');
        Route::post('clear', [ShoppingCartController::class, 'clearAllCart'])->name('cart.clear');
    });
    #payPal
    Route::get('/checkout', [PayPalController::class, 'index'])->name('client.checkout');
    Route::get('/checkout-total', [PayPalController::class, 'getTotal'])->name('client.checkout_total');
    #Update order checkout
    Route::post('/update/checkout_order', [OrderController::class, 'update'])->name('order.update.checkout');
    #Address controller
    Route::get('/district', [OrderController::class, 'get_district'])->name('address.district');
    Route::get('/province', [OrderController::class, 'get_province'])->name('address.province');
    Route::get('/ward', [OrderController::class, 'get_ward'])->name('address.Ward');
    #home
    Route::get('home', function () {
        return view('client.page.home');
    })->name('client.home');
    #detail
    Route::get('detail', [ShopMobileController::class, 'get_detail'])->name('client.detail');
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
#route fall back show error page 404! 
Route::fallback(function () {
    return view('client.page.error.page_404');
});
