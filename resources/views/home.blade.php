@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    {{--<form class="form-horizontal" method="GET" action="{{ action('MailController@render_all') }}">--}}
                    {{--<div class="col-sm-10 col-sm-offset-2">--}}
                        {{--<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary" >--}}
                    {{--</div>--}}
                        {{--</form>--}}
                    <form method="get" action="/mypage/public/index.php/home/render_all">
                        <button class="btn btn-primary" type="submit">To render all</button>
                    </form>
                    <form method="get" action="/mypage/public/index.php/home/old">
                        <button class="btn btn-primary" type="submit">Unanswered</button>
                    </form>
                    <form method="get" action="/mypage/public/index.php/home/new">
                        <button class="btn btn-primary" type="submit">Answered</button>
                    </form>
                    <form method="get" action="/mypage/public/index.php/mail/create">
                        <button class="btn btn-primary" type="submit">create message</button>
                    </form>
                   {{--<button type="button" formaction="{{ action('MailController@render_all') }}">Click Me!</button>--}}
                    {{--<button class="btn btn-primary" formaction="{{ action('MailController@render_all') }}"> Все письма</button>--}}
                    {{--<button class="btn btn-primary" formaction="{{ action('MailController@old') }}">не отвеченые</button>--}}
                    {{--<button class="btn btn-primary" formaction="{{ action('MailController@new') }}">отвеченые</button>--}}
                    {{--<button class="btn btn-primary" formaction="{{ action('MailController@current') }}">свои письма</button>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
