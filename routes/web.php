<?php

use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('links', 'LinksController@index');

Route::get('report', 'ReportController@index');

Route::post('shorten', 'LinksController@shorten');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'Admin\AdminController@index');
    Route::get('links', 'Admin\LinksAdminController@index');
    Route::get('reports', 'Admin\ReportsAdminController@index');
    Route::get('users', 'Admin\UsersAdminController@index');
    Route::get('lists/{list}', 'Admin\ListsAdminController@index')->where('list', 'allow|block');
});

Route::get('/{key}', 'RedirectController@redirect')->where('key', '[A-Za-z0-9]{6}');

Route::get('/', 'HomeController@index');

Route::get('bootstrap', function () {
    return view('bootstrap');
});

Route::get('tinkered', function () {
    $anon = app(\App\Services\AnonServices::class);
    foreach (\App\Models\Link::take(1000)->get() as $link) {
        echo $anon->getUrl($link->hash);
    }
});
