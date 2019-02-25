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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


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
     * URL authen.com/admin/register
     */
    Route::get('register', 'AdminController@create')->name('admin.register');

    /**
     * URL authen.com/admin/register
     * Route dđăng kí từ form POST
     */
    Route::post('register', 'AdminController@store')->name('admin.register.store');

    /**
     * URL authen.com\admin\login
     * Route trả về view đăng nhập admin
     */
    Route::get('login', 'Auth\Admin\LoginController@login')->name('admin.auth.login');

    /**
     * URL authen.com\admin\login
     * Xử lý đăng nhập
     */
    Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');

    /**
     * Route dùng để đăng xuất
     */
    Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');


    /**
     * -----------Route admin shopping------------
     * ----------------------------------------
     * ----------------------------------------
     */
    Route::get('shop/category', function (){
        return view('admin.content.shop.category.index');
    });

    Route::get('shop/product', function (){
        return view('admin.content.shop.product.index');
    });

    Route::get('shop/oder', function (){
        return view('admin.content.shop.oder.index');
    });

    Route::get('shop/review', function (){
        return view('admin.content.shop.review.index');
    });

    Route::get('shop/customer', function (){
        return view('admin.content.shop.customer.index');
    });

    Route::get('shop/brand', function (){
        return view('admin.content.shop.brand.index');
    });

    Route::get('shop/statistic', function (){
        return view('admin.content.shop.statistic.index');
    });

    Route::get('shop/product/order', function (){
        return view('admin.content.shop.adminorder.index');
    });

    /**
     * -----------Route admin nội dung------------
     * ----------------------------------------
     * ----------------------------------------
     */

    Route::get('content/category', function (){
        return view('admin.content.category.index');
    });

    Route::get('content/category', function (){
        return view('admin.content.post.index');
    });

    Route::get('content/page', function (){
        return view('admin.content.page.index');
    });

    Route::get('content/tag', function (){
        return view('admin.content.tag.index');
    });

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
