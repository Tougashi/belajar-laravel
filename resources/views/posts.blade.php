
@extends('layouts.main')

@section('container')

    @foreach ($Posts as $posts)
        <h2> <a href="/posts/{{ $posts["slug"] }}">{{ $posts["title"] }}</a></h2>
        <h5>{{ $posts["author"] }}</h5>
        <p>{{ $posts["body"] }}</p>
    @endforeach

@endsection
