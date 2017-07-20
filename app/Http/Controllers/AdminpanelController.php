<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail;
use DB;
use App\User;
////use App\Admin;


class AdminpanelController extends Controller
{
    //


    public function index()
    {
        $isAdminName = Auth::user()->name == 'admin';
        if (Auth::check()){
//            $isAdminName = Auth::user()->name == 'admin';
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
}
