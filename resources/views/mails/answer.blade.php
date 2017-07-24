
@extends('layouts.app')
<?php //$isAdminName = Auth::user()->name == 'admin' $isAdminName ?>
@if(1)

    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">


<?php $mails = DB::table('mails')->get()?>
                        <?php $number = 1?>
<!--                        --><?php //dd($mails)?>

                                    <form class="form-horizontal" method="POST" action="{{ action('AdminpanelController@store') }}">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                            <label for="message" class="col-sm-3 control-label">Message id</label>
                                            <div class="col-sm-9">
                                            <input list="browsers" name="mail_id">
                                            <datalist id="browsers">


                                                @foreach($mails as $mail)

                                                         <option value='{{$mail->id}}'>

                                                @endforeach

                                            </datalist>


                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="message" class="col-sm-3 control-label">Message</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="4" id="answermessage" name="answermessage"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-9 col-sm-offset-3">
                                                <! Will be used to display an alert to the user>
                                            </div>
                                        </div>
                                    </form>

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