<?php
/**
 * Created by PhpStorm.
 * User: mykol
 * Date: 20.07.2017
 * Time: 15:50

garbage storage
 * <?php  // $curentUserId = Auth::user()->id;
// $mails = DB::table('mails')->(where('user_id','$currentUserId'))->get(); ?>
{{--<table class="table table-striped">--}}
{{--<tr class="success">--}}
{{--<td>id</td>--}}
{{--<td>authorid</td>--}}
{{--<td>title</td>--}}
{{--<td>text</td>--}}
{{--<td>action</td>--}}
{{--</tr>--}}
{{--@foreach($mails as $mail)--}}
{{--<tr class="info">--}}
{{--<td>{{$mail->id}}</td>--}}
{{--<td>{{$mail->user_id}}</td>--}}
{{--<td>{{$mail->title}}</td>--}}
{{--<td>{{$mail->text}}</td>--}}
{{--<td>--}}
{{--<form action="{{action('MailController@destroy', $post['id'])}}" method="POST">--}}
{{--{{csrf_field()}}--}}
{{--<input name="_method" type="hidden" value="DELETE">--}}
{{--<button class="btn btn-danger" type="submit">Delete</button>--}}
{{--</form>--}}
{{--</td>--}}

{{--</tr>--}}
{{--@endforeach--}}
{{--</table>--}}

{{--<tr class="success">--}}
{{--<td>id</td>--}}
{{--<td>authorid</td>--}}
{{--<td>title</td>--}}
{{--<td>text</td>--}}
{{--<td>actionop</td>--}}

{{--</tr>--}}
{{--@foreach($mails as $mail)--}}
{{--<tr class="info">--}}
{{--<td>{{$mail->id}}</td>--}}
{{--<td>{{$mail->user_id}}</td>--}}
{{--<td>{{$mail->title}}</td>--}}
{{--<td>{{$mail->text}}</td>--}}
{{--<form method="post" action="mail/create">--}}
{{--<button class="btn btn-primary" type="submit">create message</button>--}}
{{--</form>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</table>--}}


{{--<td>user email</td>--}}
{{--<td>registration date</td>--}}
{{--<td> <form method="get" action="/mypage/public/index.php/adminpanel/current/{{$number++}}">--}}
{{--<button class="btn btn-success" type="submit">My messages</button>--}}
{{--</form></td>--}}
 *
 *      {{--<table class="table table-striped">--}}
{{--<tr class="success">--}}
{{--<td>id</td>--}}
{{--<td>authorid</td>--}}
{{--<td>title</td>--}}
{{--<td>text</td>--}}
{{--<td>status</td>--}}
{{--<td>action</td>--}}
{{--</tr>--}}
{{--@foreach($mails as $mail)--}}
{{--<tr class="info">--}}
{{--<td>{{$mail->id}}</td>--}}
{{--<td>{{$mail->user_id}}</td>--}}
{{--<td>{{$mail->title}}</td>--}}
{{--<td>{{$mail->text}}</td>--}}
{{--<td>{{$mail->status}}</td>--}}
{{--<td>{{destroy}}</td>--}}
{{--</tr>--}}
{{--@endforeach--}}
{{--</table>--}}


{{--<a href="{{ url('/adminpanel')}}">--}}
{{--Back to panel--}}
{{--</a>--}}
 *
 *  <!--                    --><?php // // $curentUserId = Auth::user()->id;
//                    // $mails = DB::table('mails')->(where('user_id','$currentUserId'))->get(); ?>



{{--<table class="table table-striped">--}}
{{--<tr class="success">--}}
{{--<td>id</td>--}}
{{--<td>authorid</td>--}}
{{--<td>title</td>--}}
{{--<td>text</td>--}}
{{--<td>action</td>--}}
{{--</tr>--}}
{{--@foreach($mails as $mail)--}}
{{--<tr class="info">--}}
{{--<td>{{$mail->id}}</td>--}}
{{--<td>{{$mail->user_id}}</td>--}}
{{--<td>{{$mail->title}}</td>--}}
{{--<td>{{$mail->text}}</td>--}}
{{--<form method="get" action="mail/create">--}}
{{--<button class="btn btn-primary" type="submit">create message</button>--}}
{{--</form>--}}

{{--</tr>--}}
{{--@endforeach--}}
{{--</table>--}}

<?php  // $curentUserId = Auth::user()->id;
// $mails = DB::table('mails')->(where('user_id','$currentUserId'))->get(); ?>

{{--<button type="button" formaction="{{ action('MailController@render_all') }}">Click Me!</button>--}}
{{--<button class="btn btn-primary" formaction="{{ action('MailController@render_all') }}"> Все письма</button>--}}
{{--<button class="btn btn-primary" formaction="{{ action('MailController@old') }}">не отвеченые</button>--}}
{{--<button class="btn btn-primary" formaction="{{ action('MailController@new') }}">отвеченые</button>--}}
{{--<button class="btn btn-primary" formaction="{{ action('MailController@current') }}">свои письма</button>--}}
 *
 *   {{--<hr>--}}
{{--<form method="get" action="home/current">--}}
{{--<button class="btn btn-success" type="submit">My messages</button>--}}
{{--</form>--}}
 *
 *      {{--<form class="form-horizontal" method="get" action="{{ url('adminpanel/current/id }}">--}}
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
 */

