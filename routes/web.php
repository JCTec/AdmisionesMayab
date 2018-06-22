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
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/subirArchivos', 'HomeController@uploadFiles')->name('uploadFiles');
Route::get('/cuestionario', 'HomeController@cuestionario')->name('cuestionario');
Route::get('/orientacionVocacional', 'HomeController@orientacionVocacional')->name('orientacionVocacional');
Route::get('/orientacionVocacional/settings/back', 'AlumnoController@backOV')->name('backOV');
Route::get('/familiar', 'HomeController@familiar')->name('familiar');
Route::get('/familiar/settings/back', 'AlumnoController@back')->name('back');
Route::get('/familiar/tutor/info', 'HomeController@familiarTutorInfo')->name('familiarTutorInfo');
Route::get('/familiar/setTutor/{id}', 'AlumnoController@setTutor');
Route::get('/payment', 'PaymentController@payment')->name('payment');
Route::get('/isFinnished', 'AlumnoController@isFinnished')->name('isFinnished');

Route::get('/payment/dummy', 'PaymentController@dummy')->name('dummy');

Route::post('/postHelper', 'HomeController@postHelper')->name('postHelper');

Route::get('/getMyInfo','AlumnoController@getMyInfo')->name('getMyInfo');

Route::get('me','AuthController@me')->name('me');
Route::get('getFiles','AlumnoController@getFiles')->name('getFiles');
Route::get('refresh','AuthController@refresh')->name('refresh');
Route::post('Usercreate','AlumnoController@Usercreate')->name('Usercreate');

Route::post('saveAlumno',array(
    'uses' => 'AlumnoController@saveAlumno',
    'as'   => 'user.saveAlumno'
));

Route::post('createFamiliar',array(
    'uses' => 'AlumnoController@createFamiliar',
    'as'   => 'user.createFamiliar'
));

Route::post('createOV',array(
    'uses' => 'AlumnoController@createOV',
    'as'   => 'user.createOV'
));

Route::post('createIdiomas',array(
    'uses' => 'AlumnoController@createIdiomas',
    'as'   => 'user.createIdiomas'
));

Route::get('email','AlumnoController@emailAB')->name('emailAB');

Route::get('search/{data}','AlumnoController@search')->name('search/{data}');
Route::post('addFiles','FileEntryController@add')->name('addFiles');
Route::get('get/{filename}','FileEntryController@get')->name('get/{filename}');
Route::get('userSetPP','AlumnoController@setPP')->name('userSetPP');
Route::get('getMyInfo','AlumnoController@getMyInfo')->name('getMyInfo');
Route::get('fileuploads','FileEntryController@fileuploads')->name('fileuploads');



$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {

    /*
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

    $api->post('saveAlumno', [
        'uses'      => 'App\Http\Controllers\AlumnoController@saveAlumno',
        'as'        => 'api.saveAlumno'
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
    */

});