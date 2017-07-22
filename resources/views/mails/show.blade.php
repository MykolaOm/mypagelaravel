@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mail table</div>

                    <?php  // $curentUserId = Auth::user()->id;
                           // $mails = DB::table('mails')->(where('user_id','$currentUserId'))->get(); ?>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr class="success">
                                <td>id</td>
                                <td>authorid</td>
                                <td>title</td>
                                <td>text</td>
                                <td>action</td>
                            </tr>
                            @foreach($mails as $mail)
                            <tr class="info">
                            <td>{{$mail->id}}</td>
                            <td>{{$mail->user_id}}</td>
                            <td>{{$mail->title}}</td>
                            <td>{{$mail->text}}</td>
                        {{--<td>--}}
                            {{--<form action="{{action('MailController@destroy', $post['id'])}}" method="POST">--}}
                                {{--{{csrf_field()}}--}}
                                {{--<input name="_method" type="hidden" value="DELETE">--}}
                                {{--<button class="btn btn-danger" type="submit">Delete</button>--}}
                            {{--</form>--}}
                        {{--</td>--}}

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
