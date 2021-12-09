<?php

use App\Http\Controllers\AdminController\ArticleController;
use App\Http\Controllers\AdminController\AuthController;

use App\Http\Controllers\AdminController\FeedbackControllerAdmin;
use App\Http\Controllers\ClientController\FeedbackController;
use App\Http\Controllers\ClientController\AuthCustomerController;
use Illuminate\Support\Facades\Auth;
use App\Http\ExportExcelController\ExportExcelMobileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController\OrderDetailController;
use App\Http\ExportExcelController\ExportExcelBrandController;
use App\Http\ExportExcelController\ExportExcelCategoryController;
use App\Http\ExportExcelController\ExportExcelOrderController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\LaptopController;
use App\Http\Controllers\AdminController\MobileController;
use App\Http\Controllers\AdminController\UserControllerAdmin;
use App\Http\Controllers\AdminController\OrderControllerAdmin;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\ClientController\UserController;
use App\Http\Controllers\ClientController\OrderController;
use App\Http\Controllers\ClientController\PayPalController;
use App\Http\Controllers\AdminController\AccessoryController;
use App\Http\Controllers\ClientController\MobileShopController;
use App\Http\Controllers\ClientController\ShoppingCartController;

#Route admin




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
#auth


//Admin Route after authentication
Auth::routes();
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home.dashboard');
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
    Route::delete('/mobile/deleteAll', [MobileController::class, 'deleteAll']);
    Route::resource('mobile', MobileController::class)->parameters([
        'mobile' => 'mobile_id'
    ]);
    #2. laptop
    // Route::resource('laptop', LaptopController::class)->parameters([
    //     'laptop' => 'laptop_id'
    // ]);
    #3. accessory
    // Route::resource('accessory', AccessoryController::class)->parameters([
    //     'accessory' => 'accessory_id'
    // ]);
    #4. order
    Route::get('/order/fetch_data', [OrderControllerAdmin::class, 'fetch_data']);
    Route::resource('orders', OrderControllerAdmin::class)->parameters([
        'orders' => 'order_id'
    ]);
    #5. user
    Route::resource('user', UserControllerAdmin::class)->parameters([
        'user' => 'user_id'
    ]);
    #6. order-detail
    Route::get('/order-detail/fetch_data', [OrderDetailController::class, 'fetch_data']);
    Route::resource('order-detail', OrderDetailController::class)->parameters([
        'order-detail' => 'order-detail_id'
    ]);

    #7. Export Excel Admin
    Route::get('/export-excel/excel/category', [ExportExcelCategoryController::class, 'excel']);
    #Export excel Brand
    Route::get('/export-excel/excel/brand', [ExportExcelBrandController::class, 'excel']);
    #Export excel Order
    Route::get('/export-excel/excel/order', [ExportExcelOrderController::class, 'excel']);
    #Export excel Mobile
    Route::get('/export-excel/excel/mobile', [ExportExcelMobileController::class, 'excel']);
    #8. Feedback
    Route::get('/feedback/fetch_data', [FeedbackControllerAdmin::class, 'fetch_data']);
    Route::resource('feedback', FeedbackControllerAdmin::class)->parameters([
        'feedback' => 'feedback_id'
    ]);

    #8. Article
    Route::get('/article/fetch_data', [ArticleController::class, 'fetch_data']);
    Route::resource('article', ArticleController::class)->parameters([
        'article' => 'article_id'
    ]);

    Route::get('form', function () {
        return view('admin.template.form');
    });
    Route::get('table', function () {
        return view('admin.template.table_data');
    });

});

//Login Admin
Route::group([
    'prefix' => 'auth',
    'middleware' => ['check.after.admin.login']
],function(){
    Route::get('/adminlogin', [AuthController::class, 'adminGetLogin'])->name('admin.login');
    Route::post('/adminlogin', [AuthController::class, 'adminPostLogin'])->name('admin.process.login');
});
Route::group([
    'prefix' => 'auth',
    'middleware' => ['auth']
],function(){
    Route::post('/adminlogout', [AuthController::class, 'logout'])->name('admin.process.logout');
    Route::resource('account', AuthController::class)->parameters([
        'auth' => 'auth_id'
    ]);
});

#Route client

Route::group([
    'prefix' => 'client/page',
    'middleware' => ['check.after.customer.login']
], function () {
    Route::get('/login/get', [AuthCustomerController::class, 'customerGetLogin'])->name('customer.login.get');
});

Route::group([
    'prefix' => 'client/page',
    'middleware' => ['login_require']
], function () {
    Route::resource('user', UserController::class)->parameters([
        'user' => 'user_id'
    ]);
});
Route::prefix('client/page')->group(function () {
    Route::get('/404', [UserController::class, 'redirect404'])->name('404page');
    #Customer Login
//    Route::get('/login/get', [AuthCustomerController::class, 'customerGetLogin'])->name('customer.login.get');
    Route::post('/login', [AuthCustomerController::class, 'customerPostLogin'])->name('customer.login.post');
    Route::post('/logout', [AuthCustomerController::class, 'logout'])->name('customer.logout');
    #Route resource order
    #thankyou
    Route::get('thankyou/{id}', [OrderController::class, 'show_thankyou'])->name('client.thankyou');
    Route::post('validate', [OrderController::class, 'validateOrder'])->name('validate.order');
    Route::resource('order', OrderController::class)->parameters([
        'order' => 'order_id'
    ]);
    #shop resource
    #feedback
    Route::resource('feedback', FeedbackController::class)->parameters([
        'feedback' => 'feedback_id'
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
//    Route::get('detail', [ShopMobileController::class, 'get_detail'])->name('client.detail');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
