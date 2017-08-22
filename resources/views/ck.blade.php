@extends('layouts.app')


@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <textarea id="my-editor" name="content" class="form-control">{!! old('content', 'test editor content') !!}</textarea>
                        <script>
                        CKEDITOR.replace('editor', {
                        filebrowserImageBrowseUrl: '/ck?type=Images',
                        filebrowserBrowseUrl: '/ck?type=Files'
                        });
                        </script>
                        <script>
                            CKEDITOR.replace('my-editor', options);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection