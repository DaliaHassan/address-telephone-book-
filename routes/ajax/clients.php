<?php
/**
 * Created by PhpStorm.
 * User: Dalia
 * Date: 10/13/2017
 * Time: 11:57 AM
 */

Route::group([ 'prefix' => 'clients', 'as' => 'clients.' ], function () {
    Route::get('/', [ 'as' => 'index', 'uses' => 'ClientController@index' ]);
});