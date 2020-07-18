<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('links', 'LinksController@index');

Route::get('report', 'ReportController@index');
Route::post('report', 'ReportController@post');

Route::post('shorten', 'LinksController@shorten');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'Admin\AdminController@index');

    Route::get('links', 'Admin\LinksAdminController@index');
    Route::delete('link/delete/{id}', 'Admin\LinksAdminController@delete');
    Route::delete('link/ban/{id}', 'Admin\LinksAdminController@ban');
    Route::delete('link/allow/{id}', 'Admin\LinksAdminController@allow');

    Route::get('redirects', 'Admin\RedirectsAdminController@index');
    Route::delete('redirect/allow/{id}', 'Admin\RedirectsAdminController@allow');
    Route::delete('redirect/ban/{id}', 'Admin\RedirectsAdminController@ban');

    Route::get('reports', 'Admin\ReportsAdminController@index');
    Route::delete('report/ignore/{id}', 'Admin\ReportsAdminController@ignore');
    Route::delete('report/delete/{id}', 'Admin\ReportsAdminController@delete');
    Route::delete('report/ban/{id}', 'Admin\ReportsAdminController@ban');

    Route::get('users', 'Admin\UsersAdminController@index');
    Route::delete('user/delete/{id}', 'Admin\UsersAdminController@delete');

    Route::get('lists', 'Admin\ListsAdminController@index');
    Route::post('lists', 'Admin\ListsAdminController@post');
    Route::delete('lists/delete/{id}', 'Admin\ListsAdminController@delete');
});

Route::get('/{key}', 'RedirectController@redirect')->where('key', '[A-Za-z0-9]{6}');

Route::get('/', 'HomeController@index');

Route::get('bootstrap', function () {
    return view('bootstrap');
});

