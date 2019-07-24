<?php

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

//Route::get('/', function () {
//    return view('frontend.homepages.index');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Homepage route
 */
Route::get('/', 'Frontend\HomepageController@index');

/**
 * Frontend route shop category
 */
Route::get('shop/category/{id}', 'Frontend\ShopCategoryController@detail');

/**
 * Frontend route shop product
 */
Route::get('shop/product/{id}', 'Frontend\ShopProductController@detail');

/**
 * Frontend route cart giỏ hàng
 */
Route::get('shop/cart', 'Frontend\ShopCartController@index');

/**
 * Frontend route payment thanh toán
 */
Route::get('shop/payment', 'Frontend\ShopPaymentController@index');

/**
 * Frontend route CMS page
 */
Route::get('page/{id}', 'Frontend\ContentPageController@detail');

/**
 * Frontend route content category
 */
Route::get('content/category/{id}', 'Frontend\ContentCategoryController@detail');

/**
 * Frontend route content tag
 */
Route::get('content/tag/{id}', 'Frontend\ContentTagController@detail');

/**
 * Frontend route shop product
 */
Route::get('content/post/{id}', 'Frontend\ContentPostController@detail');


/**
 * Route cho administration
 */

Route::prefix('admin')->group(function (){
    //gom nhóm cho các route phần admin
    //URL site/admin/

    /**
     * -----------Route admin authentication------------
     * ----------------------------------------
     * ----------------------------------------
     */
    Route::get('/','AdminController@index')->name('admin.dashboard');

    /**
     * //URL authem.com/admin/dashboard
     * Route ddang nhap thanh cong
     */

    Route::get('/dashboard','AdminController@index')->name('admin.dashboard');


    /**
     * -----------Route admin category------------
     * ----------------------------------------
     * ----------------------------------------
     */
    Route::get('category','Admin\CategoryController@index');
    Route::get('category/create','Admin\CategoryController@create');
    Route::get('category/{id}/edit','Admin\CategoryController@edit');
    Route::get('category/{id}/delete','Admin\CategoryController@delete');


    Route::post('category','Admin\CategoryController@store');
    Route::post('category/{id}','Admin\CategoryController@update');
    Route::post('category/{id}/delete','Admin\CategoryController@destroy');




    /**
     * -----------Route admin  product------------
     * ----------------------------------------
     * ----------------------------------------
     */


    Route::get('product', 'Admin\ProductController@index');
    Route::get('product/create','Admin\ProductController@create');
    Route::get('product/{id}/edit','Admin\ProductController@edit');
    Route::get('product/{id}/delete','Admin\ProductController@delete');


    Route::post('product','Admin\ProductController@store');
    Route::post('product/{id}','Admin\ProductController@update');
    Route::post('product/{id}/delete','Admin\ProductController@destroy');

    /**
     * -----------Route admin  order------------
     * ----------------------------------------
     * ----------------------------------------
     */


    Route::get('order', 'Admin\OrderController@index');
    Route::get('product/{id}/delete','Admin\OrderController@delete');
    Route::post('product/{id}/delete','Admin\OrderController@destroy');

});




/**
 * Route cho nhà cung cấp
 */
Route::prefix('seller')->group(function (){
    //gom nhóm cho các route phần seller
    //URL site/seller/
    Route::get('/','SellerController@index')->name('seller.dashboard');

    /**
     * //URL authem.com/seller/dashboard
     * Route ddang nhap thanh cong
     */

    Route::get('/dashboard','SellerController@index')->name('seller.dashboard');

    /**
     * URL authen.com/seller/register
     */
    Route::get('register', 'SellerController@create')->name('seller.register');

    /**
     * URL authen.com/admin/register
     * Route dđăng kí từ form POST
     */
    Route::post('register', 'SellerController@store')->name('seller.register.store');

    /**
     * URL authen.com\seller\login
     * Route trả về view đăng nhập admin
     */
    Route::get('login', 'Auth\Seller\LoginController@login')->name('seller.auth.login');

    /**
     * URL authen.com\seller\login
     * Xử lý đăng nhập
     */
    Route::post('login', 'Auth\Seller\LoginController@loginSeller')->name('seller.auth.loginSeller');

    /**
     * Route dùng để đăng xuất
     */
    Route::post('logout', 'Auth\Seller\LoginController@logout')->name('seller.auth.logout');

});


/**
 * Route cho nhà vận chuyển
 */
Route::prefix('shipper')->group(function (){
    //gom nhóm cho các route phần shipper
    //URL site/shipper/
    Route::get('/','ShipperController@index')->name('shipper.dashboard');

    /**
     * //URL authem.com/shipper/dashboard
     * Route ddang nhap thanh cong
     */

    Route::get('/dashboard','ShipperController@index')->name('shipper.dashboard');

    /**
     * URL authen.com/shipper/register
     */
    Route::get('register', 'ShipperController@create')->name('shipper.register');

    /**
     * URL authen.com/Shipper/register
     * Route dđăng kí từ form POST
     */
    Route::post('register', 'ShipperController@store')->name('shipper.register.store');

    /**
     * URL authen.com\Shipper\login
     * Route trả về view đăng nhập admin
     */
    Route::get('login', 'Auth\Shipper\LoginController@login')->name('shipper.auth.login');

    /**
     * URL authen.com\Shipper\login
     * Xử lý đăng nhập
     */
    Route::post('login', 'Auth\Shipper\LoginController@loginShipper')->name('shipper.auth.loginShipper');

    /**
     * Route dùng để đăng xuất
     */
    Route::post('logout', 'Auth\Shipper\LoginController@logout')->name('shipper.auth.logout');

});
