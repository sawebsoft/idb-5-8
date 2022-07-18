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

Route::get('/ComputerFundamental51', function () {
    return view('ComputerFundamental51');
});

Route::get('/ComputerFundamental52', 'IdbC@ComputerFundamental52');

Route::get('/ValuePass/{FName}/{ContactNo}', 'IdbC@ValuePass');

Route::get('/Pwad/{St}/{Su}/{Sv}', 'IdbC@Pwad');

Route::group(['prefix'=>'Accounts'], function()
{
    Route:: get('/Profile', function()
    {
        return 'Profile Details';
    });

    Route:: get('/Signup', function()
    {
        return 'Signup Form';
    });

    Route:: get('/Signin', function()
    {
        return 'Signin ID';
    });

    Route:: get('/Logout', function()
    {
        return 'Logout Success...';
    });
});

Route::get('/ControllerTypes', 'ControllerTypes@SingleController');

Route::get('/HtmlSpecialChar', 'IdbC@HtmlSpecialChar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Crud', PostController::class);

Route::get('PostController/store', 'PostController@store');