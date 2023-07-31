@extends('layout.default')

@section('content')

<div>
    {{ $movie->title }}
    {{ $movie->genre }}
    {{ $movie->director }}
    {{ $movie->year }}
    {{ $movie->storyline }}
</div>