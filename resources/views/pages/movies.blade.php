@extends('layout.default')


@section('content')
    <div class="container">
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="/movies/{{ $movie->id }}">
                        <h4>{{ $movie->title }}</h4>
                    </a>
                    <p>{{ $movie->storyline }}</p>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
