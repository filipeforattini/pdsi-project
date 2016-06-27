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

Route::get('/', 'HomeController@index');

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


Route::group(['middleware' => 'web'], function () {
    Route::auth();
	
    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web','auth']], function () {

    Route::get('/establishments/create', 'EstablishmentsController@create');
    Route::post('/establishments/create', 'EstablishmentsController@store');
    Route::get('/establishments/{establishment}', 'EstablishmentsController@show');

});

Route::group(['middleware' => ['web','owner','auth']], function () {

    Route::get('/dashboard', 'HomeController@dashboard');

    Route::get('/my/establishments',    'EstablishmentsController@index');
    Route::get('/my/pinpads',           'PinpadsController@index');

    Route::get('/pinpads', 				'PinpadsController@index');
    Route::get('/pinpads/create', 		'PinpadsController@create');
    Route::post('/pinpads', 			'PinpadsController@store');
    Route::get('/pinpads/{pinpad}', 	'PinpadsController@show');

});

function mockTransactions($pinpad_id)
{
    $pinpad = \App\Pinpad::findOrFail($pinpad_id);
    $customer = factory('App\Customer')->create();
    $customer->establishment_id = $pinpad->establishment_id;
    $customer->save();

    $card = factory('App\Card')->create();
    $customer->cards()->saveMany([$card]);

    $transaction = factory('App\Transaction')->create();
    $transaction->card_id = $card->id;
    $transaction->pinpad_id = $pinpad->id;
    $transaction->calculateFee();
}

