@extends('layouts.main')

@section('title', 'Movie List')

@section('content')
    @forelse($movies as $movie)
        <h2>{{ $movie->title }}</h2>
        <h3>{{ $movie->original_title }}</h3>
        <h6>{{ $movie->nationality }}</h6>
        <h6>{{ $movie->date }}</h6>
        <h6>{{ $movie->vote }}</h6>
    @empty
        <h2>Non ci sono film</h2>
    @endempty
@endforelse
@endsection
