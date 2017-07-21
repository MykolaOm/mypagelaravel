@extends('layouts.app')
@section('content')
    <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">User mails list</div>

                    <div class="panel-body">

            <?php $number = 1 ;?>
            <table class="table table-striped">
                <tr class="success">
                    <td>id</td>
                    <td>user name</td>
                    {{--<td>user email</td>--}}
                    {{--<td>registration date</td>--}}
                    <td>action</td>
                    {{--<td> <form method="get" action="/mypage/public/index.php/adminpanel/current/{{$number++}}">--}}
                            {{--<button class="btn btn-success" type="submit">My messages</button>--}}
                        {{--</form></td>--}}
                </tr>
                @foreach($users as $user)
                <tr class="info">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>

                    <td> <form method="get" action="/mypage/public/index.php/adminpanel/current/{{$number++}}">
                            <button class="btn btn-success" type="submit">view user messages</button>
                        </form></td>
                    @endforeach


                </table>
                    </div>
                </div>
            </div>
    </div>
    {{--<td>{{$user->email}}</td>--}}
    {{--<td>{{$user->created_at()}}</td>--}}
    {{--<td>{{destroy}}</td>--}}
    {{--</tr>--}}
@endsection