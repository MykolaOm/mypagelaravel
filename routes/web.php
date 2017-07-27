<?php
use App\Http\Controllers\MailController;
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
Route::get('/adminpanel', 'AdminpanelController@index')->name('adminpanel');
Route::get('adminpanel/render_all','AdminpanelController@render_all');
//Route::post('adminpanel/render_all','AdminpanelController@render_all');

Route::get('adminpanel/current/{id}','AdminpanelController@current');
Route::post('adminpanel/current/{id}','AdminpanelController@delete');

Route::get('adminpanel/allusers','AdminpanelController@selectuser');

Route::get('adminpanel/adminmail','AdminpanelController@show');

Route::get('/adminmail/new','MailController@render_new');
Route::get('/users/new','MailController@render_new');
Route::get('/adminmail/old','MailController@render_old');
Route::get('/op','AdminpanelController@createanswer');
Route::post('/op','AdminpanelController@store');


Route::get('/allanswered', 'MailController@show_mail_answer' );
Route::get('home/answered', 'MailController@show_mail_answer_current' );

Route::resource('mail','MailController');
Route::get('home/render_all','MailController@render_all');
Route::get('home/old','MailController@old');
//Route::get('home/new','MailController@new');
Route::get('home/current','MailController@current');

