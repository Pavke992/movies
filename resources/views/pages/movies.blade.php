@extends('layout.default')


@section('content')
   <div> @foreach ($movies as $movie)

    @include('components.moviedetails')
</div>
    @endforeach
@endsection