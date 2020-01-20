@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>List von Benutzer</h2>
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
                            <!--<form method="DELETE" action="{{route('user.destroy', [$user->id])}}">
                                <a type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">löschen</a>
                            </form>-->
                            <form method="POST" action="{{route('user.destroy', [$user->id])}}">
                                {{method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" class="btn btn-danger" onclick="return confirm('Sind Sie sicher?')" value="löschen">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('user.create')}}" class="btn btn-warning"><i class='fas fa-user-plus'></i> Add Benutzer</a>
        <br/><br/>

        {{ $users->links() }}
        <!--{!! $links !!}-->

    </div>


@endsection