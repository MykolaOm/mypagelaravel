@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Main page formating</div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-10">
    <form class="form-horizontal" method="POST" action="{{ action('AdminpanelController@updatecv') }}">

        <div class="form-group">
            {{csrf_field()}}
            <label for="name" class="col-sm-2 control-label">Photolink</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="link" name="link" placeholder="Theme" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Advance skills</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" id="advanced" name="advanced"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Basic skills</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" id="basic" name="basic"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Additional skills</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="4" id="addition" name="addition"></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <! Will be used to display an alert to the user>
            </div>
        </div>
    </form>

                </div>


                <div class="col-md-3">

                </div>
                <div class="col-md-3"></div>

            </div>
        </div>
    </div>

    @endsection
