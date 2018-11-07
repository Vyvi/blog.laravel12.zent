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
use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;


Route::get('/', function () {
	// Add some items in your Controller.
	Cart::add('192ao12', 'Product 1', 1, 9.99);
	Cart::add('1239ad0', 'Product 2', 2, 5.95, ['size' => 'large']);

    return view('cart');
});
Route::get('/content', function () {
    return Cart::content();
});
Route::get('/function', function () {
    return Cart::content();
    $rowId = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';

	Cart::update($rowId, 2); // sẽ update số lượng thành 2
	Cart::update($rowId, ['name' => 'Product 1']); // Update tên

	Cart::update($rowId, $product); // update id, tên, giá​
	Cart::remove($rowId);
	Cart::get($rowId);
	Cart::destroy();
	//Tổng tiền
	Cart::total();

	//tuỳ chọn các tham số định dạng số liệu
	Cart::total($decimals, $decimalSeperator, $thousandSeperator);

	//Tổng tiền trước thuế
	Cart::subtotal($decimals, $decimalSeperator, $thousandSeperator);

	//Tổng thuế
	Cart::tax($decimals, $decimalSeperator, $thousandSeperator);
	//Lấy ra tổng số lượng hàng hoá trong giỏ hàng
	Cart::count();

	//Lấy ra tổng số mặt hàng trong giỏ
	Cart::content()->count();
});


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::middleware('auth')->group( function (){
// // 	Route::get('/', function () {
// // 	    return 'kjjhadjajdbadb';
// // 	});
// })​;


// Route::middleware('auth')->group(function(){
	
//  	Route::get('/', function () {
//  	    return view('welcome');
//  	});


// });

// Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');

// // Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');

// sửa thành như dưới đây (lọc đi những route chưa dùng tới trong bài này)

// Route::get('login', 'AdminAuth\AdminLoginController@showLoginForm')->name('admin.login');
// Route::post('login', 'AdminAuth\AdminLoginController@login')->name('admin.auth');
// Route::post('logout', 'AdminAuth\AdminLoginController@logout')->name('admin.logout');

// Route::get('register', 'AdminAuth\AdminRegisterController@showRegistrationForm')->name('admin.register');
// Route::post('register', 'AdminAuth\AdminRegisterController@register')->name('admin.signup');

//coppy đoạn đã sửa paste vào web.php
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
