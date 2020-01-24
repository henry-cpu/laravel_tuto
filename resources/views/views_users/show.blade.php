@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>Konto</h2>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Informationen</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td style="color: #feca57"><strong>{{$user->name}}</strong></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td style="color: #feca57"><strong>{{$user->email}}</strong></td>
                </tr>
                @if($user->admin == true)
                    <tr>
                        <td style="color: #feca57"><strong>Administrator</strong></td>
                        <td></td>
                    </tr>
                @endif
            </tbody>
        </table>
        <a href="{{route('user.index')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> back</a>
    </div>
@endsection
