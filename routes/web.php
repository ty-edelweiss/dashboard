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

Route::get('/', 'HomeController@index');

Route::get('/sources', 'SourceController@index');
Route::get('/sources/{display}', 'SourceController@update');

Route::get('/charts', 'ChartController@index');

Route::get('/explore', 'ExploreController@index');

Route::namespace('Settings')->group(function() {

    Route::prefix('settings')->group(function () {

        Route::resource('table', 'TableController', [ 'only' => [
            'update'
        ]]);

    });

});
