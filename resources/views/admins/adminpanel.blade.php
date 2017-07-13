@extends('layouts.app')
@if (Auth::check())

<?php $isAdminName = Auth::user()->name == 'admin' ?>
        @if($isAdminName)
        {{--{{ Auth::user()->name }}--}}
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Admins Dashboard</div>

                            <div class="panel-body">
                                You are logged in as Admin!
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
                                <div class="panel-heading">not for you</div>

                                <div class="panel-body">
                                    GO AWAY NOOB!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
        @endif
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