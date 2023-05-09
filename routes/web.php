<?php

use App\Http\Controllers\TestController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('LoginAdmin', ['as'=>'LoginAdmin', 'uses' => 'Auth\LoginAdminController@getLogin']);
Route::post('LoginAdmin', ['as'=>'LoginAdmin', 'uses' => 'Auth\LoginAdminController@postLogin']);

Route::get('LoginClient', ['as'=>'LoginClient', 'uses' => 'Auth\LoginClientController@getLogin']);
Route::post('LoginClientPost', ['as'=>'LoginClientPost', 'uses' => 'Auth\LoginClientController@postLogin']);

Route::get('logOut', ['as'=>'route_BackEnd_LogOut', 'uses' => 'Auth\LogOutController@index']);

Route::middleware(['admin'])->group(function(){
    Route::get('/admin/product','ProductController@index')->name('route_BackEnd_productList');
    Route::match(['get','post'],'/admin/product/add','ProductController@add')->name('route_Backend_Product_Add');;
    Route::post('/admin/product/update/{id}','ProductController@update')->name('route_Backend_Product_Update');
    Route::get('/admin/product/detail/{id}','ProductController@detail')->name('route_Backend_Product_Detail');

    Route::match(['get','post'],'/admin/user/add','UserController@add')->name('route_Backend_User_Add');;
    Route::get('/admin/user/detail/{id}','UserController@detail')->name('route_Backend_User_Detail');
    Route::get('/admin/user','UserController@index')->name('route_Backend_userList');
    Route::post('/admin/User/update/{id}','UserController@update')->name('route_Backend_User_Update');

    Route::get('/admin/category','CategoryController@index')->name('route_BackEnd_categoryList');
    Route::match(['get','post'],'/admin/category/add','CategoryController@add')->name('route_Backend_Category_Add');
    Route::get('admin/category/detail/{id}','CategoryController@detail')->name('route_Backend_Category_Detail');
    Route::post('admin/category/update/{id}','CategoryController@update')->name('route_Backend_Category_Update');
    Route::get('admin/category/productList/{id}','ProductController@product_category_list')->name('route_Backend_Category_Product_Category_List');

    Route::get('/admin/order','OrderController@index')->name('route_BackEnd_OrderList');
    Route::match(['get','post'],'/admin/Order/add','OrderController@add')->name('route_Backend_Order_Add');
    Route::get('admin/order/detail/{id}','OrderController@detail')->name('route_Backend_Order_Detail');
    Route::post('admin/order/update/{id}','OrderController@update')->name('route_Backend_Order_Update');
    Route::get('admin/order/update/status','OrderController@save_update_status')->name('route_Backend_Order_Update_Status');

    Route::get('/admin/order_origin','OrderOriginController@index')->name('route_BackEnd_Order_Origin_List');
    Route::match(['get','post'],'/admin/order_origin/add','OrderOriginController@add')->name('route_Backend_Order_Origin_Add');
    Route::get('admin/order_origin/detail/{id}','OrderOriginController@detail')->name('route_Backend_Order_Origin_Detail');
    Route::post('admin/order_origin/update/{id}','OrderOriginController@update')->name('route_Backend_Order_Origin_Update');
    Route::get('admin/order_origin/order_at_time/{id}','OrderOriginController@order_at_time')->name('route_Backend_Order_Origin_Order_At_Time');
    Route::get('/admin/order_origin/isset_order','OrderOriginController@isset_order')->name('route_BackEnd_Order_Origin_Isset_Order');

    Route::get('/admin/sale','SaleController@index')->name('route_BackEnd_saleList');
    Route::match(['get','post'],'/admin/sale/add','SaleController@add')->name('route_Backend_Sale_Add');
    Route::get('admin/sale/detail/{id}','SaleController@detail')->name('route_Backend_Sale_Detail');
    Route::post('admin/sale/update/{id}','SaleController@update')->name('route_Backend_Sale_Update');

    Route::get('/admin/sale_origin','SaleOriginController@index')->name('route_BackEnd_Sale_Origin_List');
    Route::match(['get','post'],'/admin/sale_origin/add','SaleOriginController@add')->name('route_Backend_Sale_Origin_Add');
    Route::get('admin/sale_origin/detail/{id}','SaleOriginController@detail')->name('route_Backend_Sale_Origin_Detail');
    Route::post('admin/sale_origin/update/{id}','SaleOriginController@update')->name('route_Backend_Sale_Origin_Update');
});

    Route::get('/home','client\HomeController@index')->name('home');
    Route::get('/product/{id}','client\ProductDetailController@detail')->name('route_Frontend_Product_Detail');
    Route::get('/cart','client\CartController@index')->name('route_Frontend_Cart');
    Route::get('/Checkout','client\CheckoutController@index')->name('route_Frontend_Checkout');
    Route::get('/contact','client\ContactController@index')->name('contact');
    Route::get('/shop','client\ShopController@index')->name('shop');
    Route::get('/about','client\AboutController@index')->name('about');
    Route::get('/blog','client\BlogController@index')->name('blog');

    Route::middleware(['client'])->group(function(){
        Route::get('/my-account','client\AccountController@index')->name('my-account');
        Route::get('/my-account/order','client\dashboard_account\OrderController@index')->name('my-account-order');
        Route::get('/my-account/order-at-time/{id}','client\dashboard_account\Order_at_timeController@index')->name('my-account-order-at-time');
        Route::get('/my-account/order_at_time','client\dashboard_account\Order_at_timeController@index')->name('my-account-order_at_time');
        Route::get('/my-account/address','client\dashboard_account\AddressController@index')->name('my-account-address');
        Route::get('/my-account/detail','client\dashboard_account\Account_detailsController@index')->name('my-account-detail');
        Route::post('/add-cart','client\CreateOrderController@index')->name('route_Frontend_add_order');
    });
?>
