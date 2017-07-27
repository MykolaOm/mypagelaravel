<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail;
use DB;
use App\Answer;
use App\Mail\Welcome;
use App\Mail\Notify;
use App\Mail\CreationMessage;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function render_all()
    {
        //
        $my_id = Auth::user()->id;
        $mails = DB::table('mails')->where('user_id',$my_id)->get();

        return view('mails.show',compact('mails'));
    }
    public function old()
    {
        //
        $my_id = Auth::user()->id;

        $mails = DB::table('mails')->where('status', '0')->where('user_id',$my_id)->get();


        return view('mails.show', compact('mails'));
    }
    public function new()
    {
        //
        $my_id = Auth::user()->id;
        $mails = DB::table('mails')->where('status', '1')->where('user_id',$my_id)->get();

        return view('mails.show', compact('mails'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mail = new Mail([
            'title' => $request->get('mailtitle'),
            'text' => $request->get('mailmessage'),
            'user_id' => Auth::user()->id
        ]);

        $mail->save();
        $adress = Auth::user()->email;
        \Mail::to($adress)->send(new CreationMessage());
        return redirect('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $mails = DB::table('mails')->where('id', $id);
        //->get()
        return view('mails.show', compact('mails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mails = Mail::find($id);
        return view('mails.edit',compact('mails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$mail = DB::table('mails')->where('id', $id);m
        $mail = Mail::find($id);
        $mail->title = $request->get('title');
        $mail->text = $request->get('text');
        $mail->save();
        return redirect('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mails = Mail::find($id);
        $mails->delete();

        return redirect('welcome');
    }
    public function show_mail_answer(){
        $mails= Mail::all();
        return view('users.mailsent',compact('mails'));
    }
}
