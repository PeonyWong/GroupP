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

Route::get('/contact_us', 'App\Http\Controllers\TaskController@index');

Route::get('/album', 'App\Http\Controllers\AlbumController@index');

Route::get('/careercare', 'App\Http\Controllers\CareerController@index');

Route::get('/youth_service', 'App\Http\Controllers\YServiceController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/register', 'App\Http\Controllers\RegistController@index');

Route::get('/survey', function() {
    return view('survey');
});

Route::get('/scheme', function() {
    return view('scheme');
});

Route::get('/highlight', function() {
    return view('highlight');
});

Route::get('/course1', function() {
    return view('course1');
});
Route::get('/course2', function() {
    return view('course2');
});
Route::get('/course3', function() {
    return view('course3');
});
Route::get('/course4', function() {
    return view('course4');
});

Route::get('/course5', function() {
    return view('course5');
});

Route::get('/message', function() {
    return view('message');
});

Route::get('/history', function() {
    return view('history');
});

Route::get('/youthcrimepreventing', function() {
    return view('youthcrimepreventing');
});

Route::get('/createeducation', function() {
    return view('createeducation');
});
