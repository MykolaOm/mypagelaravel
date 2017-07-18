<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function render_all()
//    {
//        //
//        $mails = DB::table('mails')->get();
//
//        return view('mails',compact('mails'));
//    }
//    public function old()
//    {
//        //
//        $mails = DB::table('mails')->where('status', '0')->get();
//
//        return view('mails', compact('mails'));
//    }
//    public function new()
//    {
//        //
//        $mails = DB::table('mails')->where('status', '1')->get();
//
//        return view('mails', compact('mails'));
//    }
//    public function current()
//    {
//        //
//        $user_id = Auth::user()->id;
//        $mails = DB::table('mails')->find($user_id);
//
//        return view('mails.show', compact('mails'));
//    }



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
        //
      // dd(  Auth::user()->id);

        //dump($request);
       //dd(request()->all());
       // $user_id = Auth::user()->id;
        $mail = new Mail([
        'title' => $request->get('mailtitle'),
        'text' => $request->get('mailmessage'),
        'user_id' => Auth::user()->id
        ]);
//        dd($mail);
        $mail->save();
        return redirect('home');

////
//        $mail = new Mail ($request->all());
//        $mail->user_id = Auth::user()->id;
//        $mail->'title' => $request->get('mailtitle'),
//        $mail->'text' => $request->get('mailmessage')
//        $mail->save();

//        return redirect('home');
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

        return view('mails{id}', compact('mails'));
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
    }
}
