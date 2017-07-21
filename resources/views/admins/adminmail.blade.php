@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <table class="table table-striped">
                <tr class="success">
                    <td>id</td>
                    <td>authorid</td>
                    <td>title</td>
                    <td>text</td>
                    <td>status</td>
                    {{--<td>action</td>--}}
                </tr>
                @foreach($mails as $mail)
                <tr class="info">
                    <td>{{$mail->id}}</td>
                    <td>{{$mail->user_id}}</td>
                    <td>{{$mail->title}}</td>
                    <td>{{$mail->text}}</td>
                    <td>{{$mail->status}}</td>
                    {{--<td>{{destroy}}</td>--}}
                </tr>
                @endforeach
            </table>


        </div>
        <div class="col-md-4"></div>
    </div>

@endsection