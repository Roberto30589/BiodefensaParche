<?php

use Illuminate\Support\Facades\Route;

Route::get('/'                                          , 'SesionController@home')->name('login');
Route::post('sesion/login'                              , 'SesionController@login');

Route::get('sesion/passwordlost'                        , 'SesionController@passwordLost');
Route::post('sesion/passwordlost/process'               , 'SesionController@passwordLostProcess');

Route::get('sesion/passwordreset/{user_id}/token/{token}'           , 'SesionController@passwordReset');
Route::post('sesion/passwordreset/{user_id}/token/{token}/process'  , 'SesionController@passwordResetProcess');


Route::group(['middleware' => ['auth']], function() {

    //Rutas Sesion
    Route::get('sesion/passwordchange'                  , 'SesionController@passwordChange');
    Route::post('sesion/passwordchange/process'         , 'SesionController@passwordChangeProcess');
    Route::get('sesion/logout'                          , 'SesionController@logout');

    //Rutas de Usuarios
    Route::get('config/user'                           , 'UserController@list')->name('users.list');
    Route::get('config/user/getdata'                   , 'UserController@getdata');
    Route::get('config/user/add'                       , 'UserController@add');
    Route::get('config/user/{user_id}'                 , 'UserController@edit');
    Route::post('config/user/store'                    , 'UserController@store');


    //Rutas Client
    Route::get('config/client',            'ClientController@list')->name('clients.list');
    Route::get('config/client/getlist',    'ClientController@getlist');
    Route::get('config/client/getdata',    'ClientController@getdata');

    Route::get('config/client/{id}',           'ClientController@select');
    Route::get('config/client/{id}/delete',    'ClientController@delete');
    Route::post('config/client/store',         'ClientController@store');

    
    //Rutas Files
    Route::get('main/file/{filetype_id}',           'FileController@list');
    Route::get('main/file/getlist',                 'FileController@getlist');

    Route::get('main/file/getdata/{filetype_id}',   'FileController@getdata');

    Route::get('main/file/{id}',           'FileController@select');
    Route::get('main/file/{id}/delete',    'FileController@delete');
    Route::post('main/file/store',         'FileController@store');

});
