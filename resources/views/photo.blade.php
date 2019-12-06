@extends('templateForm')

@section('contents')

    <div class="container">

        <h2>Sende ein Bild</h2>
        @if(session()->has('error'))
            <div class="alert alert-danger">{!! session('error') !!}}</div>
        @endif
        <form method="post" action="{!! url('photo') !!}" accept-charset="UTF-8" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <input type="file" class="form-control-file border" name="foto" id="foto">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection