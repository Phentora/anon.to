<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('report', 'ReportController@index');

Route::get('/{key}', 'RedirectController@redirect')->where('key', '[A-Za-z0-9]{6}');

Route::post('shorten', 'LinksController@shorten');

Route::get('/', 'HomeController@index');

Route::get('bootstrap', function () {
    return view('bootstrap');
});
