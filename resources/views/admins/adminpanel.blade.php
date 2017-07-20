@extends('layouts.app')
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">Admins Dashboard</div>

                            <div class="panel-body">
                                <div >
                                    <form method="get" action="home/render_all">
                                        <button class="btn btn-success" type="submit">Show all</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="home/old">
                                        <button class="btn btn-success" type="submit">Unanswered</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="home/new">
                                        <button class="btn btn-success" type="submit">Answered</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="home/current">
                                        <button class="btn btn-success" type="submit">My messages</button>
                                    </form>
                                    <hr>
                                    <form method="get" action="mail/create">
                                        <button class="btn btn-primary" type="submit">create message</button>
                                    </form>
                                    {{--<form class="form-horizontal" method="get" action="{{ url('adminpanel/current/id }}">--}}
                                    {{--<div class="form-group">--}}
                                        {{--{{csrf_field()}}--}}
                                        {{--<label for="name" class="col-sm-2 control-label">Enter user id</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                            {{--<input type="text" class="form-control" id="useridd" name="userid" placeholder="choose number" value="">--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                        {{--<div class="form-group">--}}
                                            {{--<div class="col-sm-10 col-sm-offset-2">--}}
                                                {{--<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
