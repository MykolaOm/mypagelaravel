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

Route::get('/home', 'HomeController@index');//->name('home');
Route::get('/adminpanel', 'AdminpanelController@index');//->name('adminpanel');
/*
Route::get('/adminmail',function () {
    $mails = DB::table('mails')->get();

    return view('admins.adminmail',compact('mails'));
});
Route::get('/home/{userid}',function ($userid) {
    $mails = DB::table('mails')->find($userid);

    return view('home',compact('mails'));
});
*/