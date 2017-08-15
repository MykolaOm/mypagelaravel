@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Admins Dashboard</div>

                            <div class="panel-body">
                                <div >
                                    <form method="get" action="adminpanel/adminmail">
                                        <button class="btn btn-success" type="submit">Show all</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="home/old">
                                        <button class="btn btn-success" type="submit">Unanswered</button>
                                    </form>
                                    <hr>
                                    {{--<form method="get" action="home/new">--}}
                                        {{--<button class="btn btn-success" type="submit">Answered</button>--}}
                                    {{--</form>--}}
                                    {{--<hr>--}}
                                    <form method="get" action="adminpanel/allusers">
                                        <button class="btn btn-default" type="submit">Select messages</button>
                                    </form>
                                    <hr>
                                    {{--<form method="get" action="cv">--}}
                                        {{--<button class="btn btn-success" type="submit">Create content</button>--}}
                                    {{--</form>--}}
                                    {{--<hr>--}}
                                    <form method="get" action="cv">
                                        <button class="btn btn-success" type="submit">Create content</button>
                                    </form>
                                    <form method="get" action="cv/edit">
                                        <button class="btn btn-success" type="submit">Edit content</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="op">
                                        <button class="btn btn-primary" type="submit">Answer to user</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="mail/create">
                                        <button class="btn btn-primary" type="submit">Create message</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
