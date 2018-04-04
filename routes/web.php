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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {

    $api->post('login', [
        'uses'      => 'App\Http\Controllers\AuthController@login',
        'as'        => 'api.login'
    ]);

    $api->get('logout', [
        'uses'      => 'App\Http\Controllers\AuthController@logout',
        'as'        => 'api.logout'
    ]);

    $api->get('me', [
        'uses'      => 'App\Http\Controllers\AuthController@me',
        'as'        => 'api.me'
    ]);

    $api->get('refresh',  array(
        'protected' => true,
        'as'        =>  'api.validate_token',
        'uses'        => 'App\Http\Controllers\AuthController@refresh'
    ));

    $api->post('Usercreate', [
        'uses'      => 'App\Http\Controllers\AlumnoController@store',
        'as'        => 'api.store'
    ]);

    $api->get('email',  array(
        'as'        =>  'api.email',
        'uses'        => 'App\Http\Controllers\AlumnoController@emailAB'
    ));

    $api->get('search/{data}',  array(
        'as'        =>  'api.search',
        'uses'        => 'App\Http\Controllers\AlumnoController@search'
    ));

    $api->post('addPicture', array(
        'as'        => 'api.addPP',
        'uses'      => 'App\Http\Controllers\FileEntryController@add'
    ));

    $api->get('get/{filename}', array(
        'as'        => 'api.getFile',
        'uses'      => 'App\Http\Controllers\FileEntryController@get'
    ));

    $api->get('userSetPP', array(
        'as'        => 'api.userSetPP',
        'uses'      => 'App\Http\Controllers\AlumnoController@setPP'
    ));

    $api->get('getMyInfo', array(
        'as'        => 'api.getMyInfo',
        'uses'      => 'App\Http\Controllers\AlumnoController@getMyInfo'
    ));

    $api->get('user/{id}', array(
        'as'        => 'api.getInfo',
        'uses'      => 'App\Http\Controllers\ProfesorController@getInfo'
    ));


});