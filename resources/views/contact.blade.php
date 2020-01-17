@extends('templateForm')

@section('contents')

    <div class="container">
        <h2>Contact Us</h2>
        <form method="post" action="{!! url('contact') !!}" accept-charset="UTF-8" class="was-validated">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email" name="email" required>
            </div>
            <div class="form-group">
                <label for="msg">Message:</label>
                <textarea type="textarea" class="form-control" id="msg" placeholder="Your message" name="msg" required></textarea>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection