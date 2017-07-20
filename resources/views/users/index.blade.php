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
                                <td>email</td>
                                <td>role</td>
                                <td>registration date</td>
                            </tr>
                            @foreach($users as $user)
                            <tr class="info">
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
