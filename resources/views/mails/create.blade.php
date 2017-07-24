{{--<script src="https://cdn.ckeditor.com/4.3.5/basic/ckeditor.js"></script>--}}
{{--<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>--}}
{{--<script type="text/javascript" src="/ckeditor/adapters/jquery.js"></script>--}}
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