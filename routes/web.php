<?php

use App\Models\Link;
use App\Services\AnonServices;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('links', 'LinksController@index');

Route::get('report', 'ReportController@index');

Route::post('shorten', 'LinksController@shorten');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('links', 'Admin\LinksAdminController@index');
    Route::get('redirects', 'Admin\RedirectsAdminController@index');
    Route::get('reports', 'Admin\ReportsAdminController@index');
    Route::get('users', 'Admin\UsersAdminController@index');
    Route::get('lists', 'Admin\ListsAdminController@index');
    Route::post('lists', 'Admin\ListsAdminController@post');
});

Route::get('/{key}', 'RedirectController@redirect')->where('key', '[A-Za-z0-9]{6}');

Route::get('/', 'HomeController@index');

Route::get('bootstrap', function () {
    return view('bootstrap');
});

