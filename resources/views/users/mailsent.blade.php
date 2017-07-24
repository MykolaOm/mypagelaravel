@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">


        @foreach($mails as $mail)
          <article>
              <?php ?>
            <?php $mail->answers ?>
              @foreach( $mail->answers as $answer)

             <p> question number:  {{$answer->mail_id}}</p>
              <p>answer: {{$answer->text}}</p>
                    <hr>
              @endforeach
          </article>
          @endforeach
            </div>
        </div>
    </div>
@endsection
