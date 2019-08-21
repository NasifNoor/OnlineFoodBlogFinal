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

// Route::get('/', function () {
//     return view('welcome');
// });


//Home
Route::get('/', 'HomeController@index');

//Customer login
Route::get('/loginPage', 'LoginController@loginPage')->name('Login.index');
Route::post('/loginPage', 'LoginController@verify');

//Customer registration
Route::get('/registrationPage', 'RegistrationController@registrationPage');
Route::post('/registrationPage', 'RegistrationController@register');

Route::group(['middleware'=>['sess']], function(){
	Route::get('/admin', 'AdminController@index')->name('Admin.index');
	Route::get('/member', 'MemberController@index')->name('Member.index');

// 	Route::get('/customer', 'CustomerController@index')->name('Customer.index');
	
	Route::get('/memberList', 'AdminController@memberList');
	Route::get('/blogInfo', 'AdminController@blogInfo')->name('Admin.bloginfo');
	Route::post('/blogInfo', 'AdminController@blogInfoUpdate');
	
	Route::get('/addRestaurant', 'AdminController@addRestaurant');
	Route::post('/addRestaurant', 'AdminController@registerRestaurant');
	Route::get('/availableRestaurant', 'AdminController@availableRestaurant')->name('Admin.availableRestaurant');
	Route::get('/availableRes', 'MemberController@availableRestaurant')->name('Member.availableRestaurant');
	Route::get('/updateRestaurant/{rid}', 'AdminController@updateRestaurant');
	Route::post('/updateRestaurant/{rid}', 'AdminController@updatedRestaurant');
	Route::get('/deleteRestaurant/{rid}', 'AdminController@deleteRestaurant');
	Route::get('/restaurant/{rid}', 'AdminController@restaurant');
	Route::post('/restaurant/{rid}', 'AdminController@addToRestaurant');


	Route::get('/availableMenu', 'AdminController@availableMenu');
	Route::get('/addMenu', 'AdminController@addMenu');
	Route::post('/addMenu', 'AdminController@registerMenu');
	
	Route::get('/availableRes/search','MemberController@searchProduct')->name('member.searchProduct');

// 	Route::get('/employee', 'CustomerController@employee');
// 	Route::get('/report', 'CustomerController@report');

// 	Route::get('/admin', 'AdminController@index')->name('Admin.index');
// 	Route::get('/availableProductAdmin', 'AdminController@availableProduct');
// 	Route::get('/orders', 'AdminController@orders');
// 	Route::get('/confirm/{oid}', 'AdminController@confirm');

// 	//Update profile
	Route::get('/editProfile', 'AdminController@editProfile');
	Route::post('/editProfile', 'AdminController@updateInfo');

	Route::get('/editMemberProfile', 'MemberController@editProfile');
	Route::post('/editMemberProfile', 'MemberController@updateInfo');

// 	//Update password
	Route::get('/changePassword', 'AdminController@changePassword');
	Route::post('/changePassword', 'AdminController@updatePassword');

	Route::get('/changeMemberPassword', 'MemberController@changePassword');
	Route::post('/changeMemberPassword', 'MemberController@updatePassword');



// 	Route::post('/details/{pid}', 'CustomerController@doComment');
// 	Route::get('/details/{pid}', 'CustomerController@productDetails');
// 	Route::get('/order/{pid}', 'CustomerController@orderProduct');
// 	Route::get('/cart/{pid}', 'CustomerController@cartProduct');
// 	Route::get('/cencel/{orderid}', 'CustomerController@cencelOrder');
	Route::get('/removeMember/{mid}', 'AdminController@removeMember');


// 	Route::get('/availableProduct/search','CustomerController@searchProduct')->name('customer.searchProduct');


});


	Route::get('/resVisitor', 'HomeController@availableRestaurant')->name('Home.availableRestaurant');
//logout
Route::get('/logout', 'LogoutController@index');