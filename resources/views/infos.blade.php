@extends('templateForm')

@section('contents')


    {!! Form::open(['url' => 'users']) !!}
        {!! Form::label('name', 'Enter your name: ') !!}
        {!! Form::text('name') !!}
        {!! Form::submit('Send') !!}

    {!! Form::close() !!}



    <form method="post" action="{!! url('users') !!}" accept-charset="UTF-8">

        <label for="name">Enter your names: </label>
        <input name="name" type="text" id="name">
        <input type="submit" value="send">

    </form>




@endsection