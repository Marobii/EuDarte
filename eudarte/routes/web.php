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



Route::get('/sobrenos', 'SobreNosController@index');

Route::get('/qas', 'FqaController@index');

Route::get('/contacto', function () {
    return view('contacto');
});


//Admin//

Route::get('backoffice', function () {
    return view('login');
})->name('backoffice');

Route::get('backoffice/register', function () {
    return view('register');
})->name('auth.register');


Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/backoffice');
})->name('logout');


Route::get('/admindex', function () {
    return view('admindex');
});


//Rota da equipa //
Route::resource('team','TeamController');


Route::get('/backoffice/Team/index', 'TeamController@index')->name('index');
Route::get('/backoffice/Team/create', 'TeamController@create');
Route::post('/backoffice/Team/store', 'TeamController@store');
Route::get('/backoffice/Team/show/{id}', 'TeamController@show');
Route::get('/backoffice/Team/edit/{id}', 'TeamController@edit');
Route::put('/backoffice/Team/edit/{id}', 'TeamController@update');
Route::delete('/backoffice/Team/destroy/{id}', 'TeamController@destroy');


//Rota da qa //
Route::resource('qa','QasController');

Route::get('/backoffice/Qa/index', 'QasController@index')->name('index');
Route::get('/backoffice/Qa/create', 'QasController@create');
Route::post('/backoffice/Qa/store', 'QasController@store');
Route::get('/backoffice/Qa/show/{id}', 'QasController@show');
Route::get('/backoffice/Qa/edit/{id}', 'QasController@edit');
Route::put('/backoffice/Qa/edit/{id}', 'QasController@update');
Route::delete('/backoffice/Qa/destroy/{id}', 'QasController@destroy');


//Rota da Email//
Route::resource('email','EmailController');

Route::get('/backoffice/Email/index', 'EmailController@index')->name('index');
Route::post('/contacto/Email/store', 'EmailController@store');
Route::get('/backoffice/Email/show/{id}', 'EmailController@show');
Route::delete('/backoffice/Email/destroy/{id}', 'EmailController@destroy');


//Auth::routes();//

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();




