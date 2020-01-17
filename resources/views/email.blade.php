@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>Abonnieren</h2>
        <!--@if(session()->has('error'))
            <div class="alert alert-danger">{!! session('error') !!}</div>
        @endif -->
        <form method="post" action="{!! url('email') !!}" accept-charset="UTF-8">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="enter your email" required>

            </div>
            <button type="submit" class="btn btn-danger">submit</button>
        </form>
        @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
        @endif

    </div>


@endsection