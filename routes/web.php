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
//Route::get('adminpanel/messages','AdminpanelController@show');


Route::get('adminpanel/{id}','AdminpanelController@current');

Route::get('/adminmail','AdminpanelController@show');

Route::get('/adminmail/new','MailController@render_new');
Route::get('/users/new','MailController@render_new');
Route::get('/adminmail/old','MailController@render_old');

Route::resource('mail','MailController');
Route::get('home/render_all','MailController@render_all');
Route::get('home/old','MailController@old');
Route::get('home/new','MailController@new');
Route::get('home/current','MailController@current');


//Route::get('adminpanel/{id}',function($id) {
//   // dd($user_id);
//    $mail = DB::table('mails')->where('user_id',$id)->get();
//    return view('admins.adminmail',compact('mail'));
//});

//Route::get('/adminmail', function () {
//
//    return view('admins.adminmail');
//});



//Route::get('/mail/create', 'MailController@create');
//Route::get('/mail', 'MailController@show');//
//Route::get('/mail/{id}/edit', 'MailController@edit');//???
//Route::patch('/mail/{id}', 'MailController@edit');//?????
//Route::get('/mail/{id}', 'MailController@show');//?????
//Route::delete('/mail/{id}', 'MailController@delete');//?????
//Route::post('/mail/create', 'MailController@store');

//Route::get('/mailsent', 'MailController@show');
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