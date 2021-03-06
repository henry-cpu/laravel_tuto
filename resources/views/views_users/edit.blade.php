@extends('templateForm')

@section('contents')
    <div class="container">
        <h2>Benutzer modifizieren</h2>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>Ausfüllen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <form method="POST" action="{{route('user.update', [$user->id])}}" accept-charset="UTF-8" class="was-validated">
                        {!! csrf_field() !!}
                        {{method_field('PATCH')}}
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" id="admin" name="admin"> Administrator
                            </label>
                        </div>

                        <button type="submit" class="btn btn-warning float-right">
                            <i class='fas fa-fire-alt'></i> Submit</button>
                    </form>
                </td>
            </tr>
            </tbody>
        </table>
        <a href="{{route('user.index')}}" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> back</a>

    </div>

@endsection