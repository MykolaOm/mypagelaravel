<?php

namespace App\Http\Controllers;

use App\Contentcv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail;

use Illuminate\Database\Seeder;
use \database\seeds\DatabaseSeeder;

use DB;
use App\User;
use App\Answer;
use App\Mail\Notify;
use App\Mail\Markd;

class AdminpanelController extends Controller
{
    //


    public function index()
    {
//        $isAdminName = Auth::user()->name == 'admin';
        if (Auth::check()){
            $isAdminName = Auth::user()->name == 'admin';
            if($isAdminName){
                return view('admins.adminpanel');
            }
            else{
                return view('welcome');
            }
        }
        else{
            return view('welcome');
        }

    }
    public function render_all()
    {
        //
        $users = DB::table('users')->get();

        return view('users.index',compact('users'));
    }
    public function current($id)
    {
        //
//    $user_id = Auth::user()->id;
        //$mails = DB::table('mails')->find($user_id);
        $mails = DB::table('mails')->where('user_id',$id)->get();

        return view('admins.directuser', compact('mails'));
    }

    public function create()
    {
        //
        return view('mails.create');
    }
    public function show()
    {
        //
        $mails = DB::table('mails')->get();
//        ->where('id', $id)
        return view('admins.adminmail', compact('mails'));
    }
//    public function current($id)
//    {
//        //
//        $mails = DB::table('mails')->where('id', $id);
//        //->get()
//        return view('admins.directusers', compact('mails'));
//    }
    public function showusers()
    {
        //
        $mails = DB::table('users')->get();
//        ->where('id', $id)

        return view('admins.adminmail', compact('mails'));
    }
    public function selectuser()
    {
        //
        $users = DB::table('users')->get();
//        ->where('id', $id)

        return view('admins.allusers', compact('users'));
    }

    public function createanswer(){

//    $mails = DB::table('mails');
//        $user = DB::table('users');
//
//        ,compact('mails')
        return view ('mails.answer');
    }
    public function store(Request $request)
    {
//        mail_id =>DB::mails->id

        $answer = new Answer([
            'text' => $request->get('answermessage'),
            'mail_id' => $request->get('mail_id')
        ]);

        $answer->save();
        $m_id = $answer->mail_id;

        $current_mail = Mail::find($m_id);
        $user_id = $current_mail->user_id;

        $notify_to = DB::table('users')->where('id', $user_id)->first()->email;

//        $adress = $nitify_to->email;

        \Mail::to($notify_to)->send(new Notify());
        \Mail::to($notify_to)->send(new Markd());
        return redirect('home');
//       Mail::find($id)[
//       'status' = 1
//           ]


        return redirect('home');

    }
    public function createcv()
    {
        //
        return view('admins.editpage');
    }
    public function storecv(Request $request)
    {
//        mail_id =>DB::mails->id

        $contentcv = new Contentcv([
            'link' => $request->get('link'),
            'advanced' => $request->get('advanced'),
            'basic' => $request->get('basic'),
            'addition' => $request->get('addition')
        ]);

        $contentcv->save();



        return redirect('resume');

    }
    public function show_content(){

        $contentcv= Contentcv::first();
        $contentcv->link = DB::table('contentcvs')->first()->link;
//        dd($contentcv);
        return view('layouts.resume',compact('contentcv'));
    }

    public function editcv()
    {
        //
        return view('admins.editpageto');
    }
    public function updatecv(Request $request)
    {
        //

//        Contentcv::first()->update(['link' => $request->get('link')],
//           ['advanced' => $request->get('advanced')],
//           ['basic' => $request->get('basic')],
//           ['addition' => $request->get('adition')]
//        );

//        $contentcv->link = $request->get('link');
//        $contentcv->advanced = $request->get('advanced');
//        $contentcv->basic = $request->get('basic');
//        $contentcv->addition = $request->get('adition');

///
///
         $contentcv = Contentcv::first();
//        if($request->get('link') != NULL){
        $contentcv->link = $request->get('link');

//        }
//        if($request->get('advanced')!= NULL){
        $contentcv->advanced = $request->get('advanced');

//        }
//        if($request->get('basic')!= NULL){
        $contentcv->basic = $request->get('basic');
//        }
//        if($request->get('adition')!= NULL){
        $contentcv->addition = $request->get('addition');
//        }
        $contentcv->update();
//        $contentcv->save();

        return redirect('resume');
    }
    public function firstrun()
    {
        \DatabaseSeeder::run();
    }

}
