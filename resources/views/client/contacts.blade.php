@extends('templates.main')

@section('content')
    <h1>Contact Us</h1>
    <form action="{{route('contacts.send')}}" method="post">
        <div class="mt-3">
            <label for="" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mt-3">
            <label for="" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="mt-3">
            <label for="" class="form-label">Message:</label>
            <textarea class="form-control" name="message"></textarea>
        </div>

        <button class="btn btn-primary mt-3">Send</button>

    </form>
@endsection
