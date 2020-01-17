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
                <td><a href='/' class="btn btn-danger">löschen</a></td>
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
        <a href="{{route('user.create')}}" class="btn btn-warning"><i class='fas fa-user-plus'></i> Add Benutzer </a>

    </div><br/>


    <div class="container">
        <h2>Konto (öffnen)</h2>
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
                    <td style="color: #feca57"><strong>John Jonas</strong></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td style="color: #feca57"><strong>jj@email.mail</strong></td>
                </tr>
                <tr>
                    <td style="color: #feca57"><strong>Administrator</strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <a href="/" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> back</a>

    </div><br/>


    <div class="container">
        <h2>Benutzer modifizieren (ändern)</h2>
        <table class="table table-dark table-hover">
            <thead>
            <tr>
                <th>Ausfüllen</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <form>
                        {!! csrf_field() !!}
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
                                <input class="form-check-input" type="checkbox"> Administrator
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
    </div><br/>


    <div class="container">
        <h2>Neuer Benutzer herstellen (add benutzer)</h2>
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Ausfüllen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <form>
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password eingeben" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password"
                                       placeholder="Password wiederholen" required>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Administrator
                                </label>
                            </div>

                            <button type="submit" class="btn btn-warning float-right">
                                <i class='fas fa-fire-alt'></i> Submit</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="/" class="btn btn-primary"><i class="fa fa-arrow-circle-left"></i> back</a>

    </div>



@endsection

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



