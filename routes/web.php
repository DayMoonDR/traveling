<?php
use App\User;
use App\Http\Controllers\HomeController;
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
    return view('pages.welcome');
    return View::make('includes.head');
    return View::make('includes.navbar');
    return View::make('pages.projects');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('projects', function()
{

});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
