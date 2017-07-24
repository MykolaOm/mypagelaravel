<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail;

use DB;
use App\User;
use App\Answer;


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

//       Mail::find($id)[
//       'status' = 1
//           ]

        return redirect('home');

    }

}
