@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>Benutzer</h2>
    <!--@if(session()->has('error'))
        <div class="alert alert-danger">{!! session('error') !!}</div>
        @endif -->
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
            @foreach($users as $user)
                <tr>
                    <td>{!! $user->id !!}</td>
                    <td style="color: #feca57"><strong>{{$user->name}}</strong></td>
                    <td><a href="{{route('user.show', [$user->id])}}" class="btn btn-light">öffnen</a></td>
                    <td><a href="{{route('user.edit', [$user->id])}}" class="btn btn-secondary">ändern</a></td>
                    <td>
                        <form method="delete" action="{{route('user.delete', [$user->id])}}">
                            <a type="submit" >löschen</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{route('user.create')}}" class="btn btn-warning">Add Benutzer</a>
    </div>
    <a href="{{route('user.create')}}" class="btn btn-warning"> Add Benutzer </a>
    {{$links}}


@endsection
