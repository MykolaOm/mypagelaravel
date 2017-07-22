@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mail table</div>

                    <!--                    --><?php // // $curentUserId = Auth::user()->id;
                    //                    // $mails = DB::table('mails')->(where('user_id','$currentUserId'))->get(); ?>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr class="success">
                                <td>id</td>
                                <td>authorid</td>
                                <td>title</td>
                                <td>text</td>
                                <td>actionop</td>

                            </tr>
                            @foreach($mails as $mail)
                            <tr class="info">
                                <td>{{$mail->id}}</td>
                                <td>{{$mail->user_id}}</td>
                                <td>{{$mail->title}}</td>
                                <td>{{$mail->text}}</td>
                                <form method="post" action="mail/create">
                                    <button class="btn btn-primary" type="submit">create message</button>
                                </form>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
