@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>List von Benutzer</h2>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td style="color: #feca57"><strong>John</strong></td>
                    <td><a href='/' class="btn btn-light">öffnen</a></td>
                    <td><a href='/' class="btn btn-secondary">ändern</a></td>
                    <td><form method="delete" action="{{route('user.delete', '$user->id')}}">

                        </form></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td style="color: #feca57"><strong>John</strong></td>
                    <td><a href='/' class="btn btn-light">öffnen</a></td>
                    <td><a href='/' class="btn btn-secondary">ändern</a></td>
                    <td><a href='/' class="btn btn-danger">löschen</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td style="color: #feca57"><strong>John</strong></td>
                    <td><a href='/' class="btn btn-light">öffnen</a></td>
                    <td><a href='/' class="btn btn-secondary">ändern</a></td>
                    <td><a href='/' class="btn btn-danger">löschen</a></td>
                </tr>
            </tbody>
        </table>
        <a href="{{route('user.create')}}" class="btn btn-warning"> Add Benutzer </a>






        <!--
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
        -->
    </div>


@endsection