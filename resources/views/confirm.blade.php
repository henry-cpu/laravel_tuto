@extends('templateForm')

@section('contents')
    <div class="container">
        <div class="jumbotron">
            <h1>Successful</h1>
            <br>
            <p>Danke {{ $name }}, deine Nachricht wurde geschickt!</p>
        </div>
    </div>

@endsection