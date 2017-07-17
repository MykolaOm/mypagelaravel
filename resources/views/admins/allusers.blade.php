@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <table class="table table-striped">
                <tr class="success">
                    <td>id</td>
                    <td>user name</td>
                    <td>user email</td>
                    <td>registration date</td>
                    <td>action</td>
                </tr>
                {{--@foreach($users as $user)--}}
                {{--<tr class="info">--}}
                {{--<td>{{$user->id}}</td>--}}
                {{--<td>{{$user->name}}</td>--}}
                {{--<td>{{$user->email}}</td>--}}
                {{--<td>{{$user->created_at()}}</td>--}}
                {{--<td>{{destroy}}</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
            </table>
