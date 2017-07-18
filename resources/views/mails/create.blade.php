@extends('layouts.app')
@if (Auth::check())

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-10">



                                    {{--<div class="form-group row">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>--}}
                                        {{--<div class="col-sm-6">--}}
                                            {{--<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Message</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<textarea name="post" rows="8" cols="80"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="exampleTextarea">Textarea</label>--}}
                                        {{--<textarea class="form-control" id="exampleTextarea" rows="3" cols="50"></textarea>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<div class="col-md-6"></div>--}}
                                        {{--<input type="submit" class="btn btn-primary">--}}
                                    {{--</div>--}}
                                {{--</form>--}}

                                {{--<form class="form-horizontal" role="form" method="post" action="index.php">--}}
                                {{--{{url('home')}}--}}

                                    <form class="form-horizontal" method="POST" action="{{ action('MailController@store') }}">

                                    <div class="form-group">
                                        {{csrf_field()}}
                                        <label for="name" class="col-sm-2 control-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="mailtitle" name="mailtitle" placeholder="Theme" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="col-sm-2 control-label">Message</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4" id="mailmessage" name="mailmessage"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <! Will be used to display an alert to the user>
                                        </div>
                                    </div>
                                </form>

                            </div>

















                            {{--<table class="table table-striped">--}}
                                {{--<tr class="success">--}}
                                    {{--<td>title</td>--}}
                                    {{--<td>text</td>--}}
                                {{--</tr>--}}
                            {{--</table>--}}

                                {{--<form method="post" action="http://testing3.loc/mypage/public/index.php/crud">--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<input type="hidden" name="_token" value="DaUfZJ3LAPysXZSz66S0AsbHofQohcFZwjstAccX">--}}
                                        {{--<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<textarea name="post" rows="8" cols="80"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group row">--}}
                                        {{--<div class="col-md-2"></div>--}}
                                        {{--<input type="submit" class="btn btn-primary">--}}
                                    {{--</div>--}}
                                {{--</form>--}}

                                {{--@foreach(@mails as @mail)--}}
                                    {{--<tr class="success">--}}
                                        {{--<td>{{$mail->title}}</td>--}}
                                        {{--<td>{{$mail->text}}</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                            {{--</table>--}}
                                <div class="col-md-3">

                            </div>
                            <div class="col-md-3"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@else
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ABRACADABRA!</div>

                    <div class="panel-body">
                        GO AWAY NOOB!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif