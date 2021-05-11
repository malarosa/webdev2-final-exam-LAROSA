<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/bible-study-request-form', 'BibleStudyController@form');
Route::post('/bible-study-request-createform', 'BibleStudyController@createform');

Route::get('/bible-study-request', 'BibleStudyController@table');

Route::get('/thank-you', 'BibleStudyController@thankyou');
