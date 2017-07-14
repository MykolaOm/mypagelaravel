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
                            <div class="col-md-3"></div>
                            <table class="table table-striped">
                                <tr class="success">
                                    <td>title</td>
                                    <td>text</td>
                                </tr>
                                @foreach(@mails as @mail)
                                    <tr class="success">
                                        <td>{{$mail->title}}</td>
                                        <td>{{$mail->text}}</td>
                                    </tr>
                                @endforeach
                            </table>
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