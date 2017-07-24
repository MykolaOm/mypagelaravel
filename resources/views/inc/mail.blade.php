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


        </tr>
    @endforeach
</table>
