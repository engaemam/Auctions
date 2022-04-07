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
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

handle_auctions();

Route::get('/', 'HomeController@home');
Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');
Route::get('/user/auctions', 'UserController@auctions');
Route::get('/auction/details/{id}', 'UserController@auction_details');
Route::post('/send/message', 'UserController@save_message');


Route::group(['middleware'=>'user:user'],function(){

Route::get('/auction/request', 'UserController@add_auction');
Route::post('/auction/save', 'UserController@request_auction');
Route::get('/history/auctions', 'UserController@my_auctions');
Route::get('/history/biddings', 'UserController@my_biddings');
Route::get('/user/profile', 'UserController@profile');
Route::post('/auction/bid', 'UserController@bidding');
Route::any('/user/logout','UserController@logout');
Route::get('/paypal/{id}','PaypalController@getCheckout');
Route::get('/get_done','PaypalController@get_done');
Route::get('/get_cancel','PaypalController@get_cancel');

});

Route::group(['middleware'=>'admin:admin'],function(){

Route::get('/admin/messages', 'AdminController@messages');
Route::get('/admin/requests', 'AdminController@requests');
Route::any('/admin/logout','AdminController@logout');
Route::get('/accept/request/{id}', 'AdminController@accept_request');
Route::get('/refuse/request/{id}', 'AdminController@refuse_request');
Route::get('/admin/profile', 'AdminController@profile');
});


Route::group(['middleware'=>'guest'],function(){

Route::post('/check/admin','AdminController@check_login');	
Route::post('/check/user','UserController@check_login');	
Route::get('/admin/login', 'AdminController@login');
Route::get('/user/login', 'UserController@login');
Route::get('/user/register', 'UserController@register');
Route::post('/user/doregister', 'UserController@do_register');
Route::get('/admin/register', 'AdminController@register');
Route::post('/admin/doregister', 'AdminController@do_register');


});