<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminpanelController extends Controller
{
    //
    public function index()
    {

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

}
