<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/', ['as' => 'dashboard', 'uses' => 'OrderController@dashboard']);
	Route::get('GiaoTrongNgay', ['as' => 'giaotrongngay', 'uses' => 'OrderController@GiaoTrongNgayView']);
	Route::get('/getDashboardData', ['as' => 'getDashboardData', 'uses' => 'OrderController@getDashboardData']);
	Route::get('/getGiaoTrongNgayData', ['as' => 'getGiaoTrongNgayData', 'uses' => 'OrderController@getGiaoTrongNgayData']);
    Route::get('/add', ['as' => 'order.getAdd', 'uses' => 'OrderController@getAdd']);
    Route::post('/add',['as'=>'admin.order.postAdd' ,'uses'=>'OrderController@ThemDonHang']);
    Route::get('/account/add', ['as' => 'admin.account.getAdd', function () {
    	return view ( 'admin.account.add' );
    	}]);
});