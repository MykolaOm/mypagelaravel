@extends('layouts.app')
@section('content')
   {{--{{dd($contentcv)}}--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ADMIN CV</div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img id="adminfoto" src="{{$contentcv->link}}" alt="">
                            </div>
                            <div class="col-md-6">
                                <dl>
                                    <dt>
                                        <span>My way:</span>
                                    </dt>
                                    <dd>
                                        <span>I choose to learn web-programming.</span>
                                    </dd>
                                    <dt>
                                        <span>My expirience:</span>
                                    </dt>
                                    <dd>
                                        <span>Start to code in begining of 2016</span>
                                    </dd>
                                    <dd>
                                        <span>Become IT-academy student in 2016</span>
                                    </dd>
                                    <dt>
                                        <span >Soft skills:</span>
                                    </dt>
                                    <dd>
                                        <span >Stress handling, team player, fast-educated.</span>
                                    </dd>
                                    <dd>
                                        <span >flexible, good in timemanagment.</span>
                                    </dd>
                                    <dt>
                                        <span>Hard skills:</span>
                                    </dt>
                                    <dd>
                                        <span id="advancedskills">Advanced: {{$contentcv->advanced}};</span>
                                    </dd>
                                    <dd>
                                        <span id="basicdskills">Basic: {{$contentcv->basic}}.</span>
                                    </dd>
                                    <dd>
                                        <span id="Additionskills">Addition: {{$contentcv->addition}}.</span>
                                    </dd>

                                </dl>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection