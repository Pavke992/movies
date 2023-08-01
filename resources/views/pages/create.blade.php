@extends('layouts.default')

@section('content')
    <div class="container">
        <h1 class="jumbotron-heading">Add new movie</h1>

        <form method="POST" action="{{ url('/movies.create') }}">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" />
                @include('components.errors')
            </div>

            <div class="form-group">
                <label for="genre">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" />
                @include('components.errors')
            </div>

            <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director" />
                @include('components.errors')
            </div>

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" id="year" name="year" />
                @include('components.errors')
            </div>

            <div class="form-group">
                <label for="storyline">Storyline</label>
                <input type="text" class="form-control" id="    storyline" name="storyline" />
                @include('components.errors')
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Add movie</button>
            </div>

        </form>
    </div>
@endsection
