<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('report', 'ReportController@index');

Route::post('shorten', 'LinksController@shorten');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'Admin\AdminController@index');
});

Route::get('/{key}', 'RedirectController@redirect')->where('key', '[A-Za-z0-9]{6}');

Route::get('/', 'HomeController@index');

// DANGER! DANGER! DANGER! - Disable this on live website
if (env('APP_ENV') == 'local' && env('APP_DEBUG')) {
    Route::get('loginas/{id}', function ($id) {
        auth()->loginUsingId($id);
        return redirect('/');
    });
}

Route::get('bootstrap', function () {
    return view('bootstrap');
});
