<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewShopController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;


use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController;

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

/*home route*/

Route::get('/', [NewShopController::class, 'index']);


Route::group(['middleware'=>'login'], function (){

    /* catagory route*/
    Route::get('/add/catagory', [CatagoryController::class, 'addCatagoryPage'])->name('add');
    Route::post('/add/catagory/save', [CatagoryController::class, 'addCatagoryInfoSave'])->name('catagorysave');
    Route::get('/manage/catagory', [CatagoryController::class, 'manageCatagoryInfo'])->name('manage');
    Route::get('/manage/unpublished/{id}', [CatagoryController::class, 'unPublishedCatagoryInfo'])->name('unpublished-catagory');
    Route::get('/manage/published/{id}', [CatagoryController::class, 'publishedCatagoryInfo'])->name('published-catagory');
    Route::get('/edit/catagory/{id}', [CatagoryController::class, 'editCatagoryInfo'])->name('editcatagory');
    Route::post('/edit/catagory/save', [CatagoryController::class, 'editCatagoryInfoSave'])->name('update-catagory');
    Route::get('/delete/catagory/{id}', [CatagoryController::class, 'deleteCatagoryInfo'])->name('delete-catagory');

    /* brand route*/


    Route::get('/brand/catagory', [BrandController::class, 'brandCatagorypage'])->name('brand');

    Route::post('/brand/caragory/save', [BrandController::class, 'brandCatagoryInfo'])->name('brandsave');
    Route::get('/brand/manage', [BrandController::class, 'brandCatagoryManageInfo'])->name('brand-manage');
    Route::get('/brand/unpublished/{id}', [BrandController::class, 'brandCatagoryUnpublishedInfo'])->name('unpublished-brand');
    Route::get('/brand/published/{id}', [BrandController::class, 'brandCatagoryPublishedInfo'])->name('published-brand');
    Route::get('/brand/update/{id}', [BrandController::class, 'updateBrandInfo'])->name('update-brand');
    Route::post('/brand/update/save', [BrandController::class, 'updateBrandInfoSave'])->name('update-brandinfo');
    Route::get('/brand/delete/{id}', [BrandController::class, 'deleteBrandInfo'])->name('delete-brand');



    /*Product route*/

    Route::get('/add/product', [ProductController::class, 'addProductInfo'])->name('add-product');
    Route::post('/add/product/save', [ProductController::class, 'addProductInfoSave'])->name('add-productsave');
    Route::get('/product/view', [ProductController::class, 'productManageView'])->name('manage-product');
    Route::get('/product/unpublished{id}', [ProductController::class, 'productUnpublished'])->name('unpublisher');
    Route::get('/product/published{id}', [ProductController::class, 'productpublished'])->name('publisher');
    Route::get('/product/update/{id}', [ProductController::class, 'updateProductInfo'])->name('update-product');
    Route::post('/product/update/save', [ProductController::class, 'updateProductInfoSave'])->name('update-productsave');
    Route::get('/product/delete/{id}', [ProductController::class, 'deleteProductInfoSave'])->name('delete-product');


    /*order route*/
    Route::get('/dashboard', [OrderController::class, 'dashboardIndex'])->name('dash-index');
    Route::get('/order/manage', [OrderController::class, 'orderManageInfo'])->name('manage-order');
    Route::get('/order/details/{id}', [OrderController::class, 'orderDetailsInfo'])->name('order-detail');
    Route::get('/order/invoice/{id}', [OrderController::class, 'orderInvoiceInfoView'])->name('order-invoice');
    Route::get('/order/download/{id}', [OrderController::class, 'orderDownloadInfo'])->name('order-download');


});

/*contact route*/
Route::get('/tricket', [NewShopController::class, 'pdftricket' ]);
Route::get('/contact/us', [NewShopController::class, 'contactUsInfo' ])->name('contact-us');
Route::post('/search-items', [NewShopController::class, 'searchItemsProduct' ])->name('search-item');

Route::get('/product/details/{id}/{name}', [ProductController::class, 'productDetailsInfo'])->name('product-details');
Route::get('product/catagory/{id}',[NewShopController::class, 'catagoryProduct'])->name('catagory-product');


//-----this is cart route------//
Route::post('/cart/add',[CartController::class, 'addToCartInfo'])->name('add-to-cart');
Route::get('/cart/show',[CartController::class, 'showCartInfo'])->name('show-cartitems');
Route::post('/cart/show/update',[CartController::class, 'cartQuantityUpdate'])->name('cart-quantity-update');

Route::get('/cart/delete/{id}',[CartController::class, 'deleteCarItem'])->name('delete-cart-item');
Route::get('/cart/checkout',[CartController::class, 'checkOutInfoShow'])->name('checkout-form');
Route::get('/contact/us',[CartController::class, 'contactUsInfo'])->name('contact-us');


/*cart route*/
Route::post('/customer/registration', [CustomerController::class, 'customerRegistrationInfoSave'])->name('customer.registration');
Route::get('/ajax-email-check/{id}', [CustomerController::class, 'ajaxEmailCheck'])->name('ajax-email-check');

Route::post('/customer/login', [CustomerController::class, 'customerLoginInfo'])->name('customer-login');
Route::post('/customer/cart/login', [CustomerController::class, 'cartCustomerLoginInfo'])->name('cart.customer.login');
Route::post('/customer/login/info', [CustomerController::class, 'customerLoginInfoSave'])->name('customer.login.info');
Route::get('/checkout/shopping', [CustomerController::class, 'shoppingAddressInfoShow'])->name('shopping-checkout');
Route::post('/checkout/shopping/info', [CustomerController::class, 'shippingAddressInfoSave'])->name('shipping-address-save');
Route::get('/checkout/payment', [CustomerController::class, 'paymentsInfoSave'])->name('payments-form');
Route::post('/checkout/order', [CustomerController::class, 'newOrderSaveInof'])->name('new-order');

/*customer or login  route*/
Route::get('/customer/registration/form', [CustomerController::class, 'customerRegistrationForm'])->name('registration-form');
Route::post('/customer/registration/info', [CustomerController::class, 'customerRegistrationFormInfoSave'])->name('customer-registration-save');
Route::get('/customer/login', [CustomerController::class, 'loginForm'])->name('login-form');
Route::post('/customer/logout', [CustomerController::class, 'logoutCustomer'])->name('logout-customer');
Route::post('/customer/logout', [CustomerController::class, 'logoutCustomer'])->name('logout-customer');





/*language change */





// SSLCOMMERZ Start
/*Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);*/

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END














Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
