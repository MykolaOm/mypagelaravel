@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Options</div>

                <div class="panel-body">
                    {{--<form class="form-horizontal" method="GET" action="{{ action('MailController@render_all') }}">--}}
                    {{--<div class="col-sm-10 col-sm-offset-2">--}}
                        {{--<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" >--}}
                    {{--</div>--}}
                        {{--</form>--}}
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
                    <form method="get" action="mail/create">
                        <button class="btn btn-primary" type="submit">create message</button>
                    </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
