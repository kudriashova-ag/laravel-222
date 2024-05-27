@extends('templates.main')

@section('content')
    <h1>{{ $title }}</h1>
    <h2>{!! $subtitle !!}</h2>

    @foreach ($users as $user)
        {{ $loop->iteration }}. {{ $user }} <br>
    @endforeach
@endsection


@section('title', $title)