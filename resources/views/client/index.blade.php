@extends('templates.main')

@section('content')
    <h2>Latest Books</h2>
    <div class="row">
        @foreach ($books as $book)
        <div class="col-3">
            <a href="{{route('book', ['book'=>$book->id])}}">
                <img src="{{asset($book->image)}}" alt="{{$book->name}}" class="img-fluid">
                <div class="h3">{{$book->name}}</div>
            </a>
        </div>
        @endforeach
    </div>
@endsection
