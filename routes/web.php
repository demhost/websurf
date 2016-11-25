<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['domain' => config('app.domains.sub')], function () {
	Route::get('/', function () {
	    return 'start surf';
	});
});

Route::group(['domain' => config('app.domains.app')], function () {

Route::get('test/push', function () {
    return view('test/push');
});


Route::get('test/yandex', function () {
    return view('test/yandex');
});

Route::get('test/vue', function () {
    return view('test/vue');
});

Route::get('test/vuejs', function () {
        $data = [['name'=>'name 3'], ['name'=>'name 4'], ['name'=>'name 5'], ['name'=>'name 6'], ['name'=>'name 7']];
        return $data;
});

Route::post('test/vuejs', function () {
        $data = [['name'=>'name 3'], ['name'=>'name 4'], ['name'=>'name 5'], ['name'=>'name 6'], ['name'=>'name 7']];
        return $data;
});

Validator::extend('recaptcha', 'ReCaptchaValidation@recaptcha');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


});