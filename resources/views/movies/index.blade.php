@extends('layouts.main')

@section('title', 'Movie List')

@section('content')
    @forelse($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                <h6>{{ $movie->nationality }}</h6>
                <h6>{{ $movie->date }}</h6>
                <h6>{{ $movie->vote }}</h6>


            </div>
        </div>
    @empty
        <h2>Non ci sono film</h2>
    @endforelse


@endsection
