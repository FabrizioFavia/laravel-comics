@extends('layouts.app')

@section('content')
    <div>
        <div class="jumboContainer">
            <img class="w-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
    </div>
    <div class="comicsContainer">
        <div class="container-lg">
            <div class="card">
                @foreach ($comics as $comic)
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                @endforeach
            </div>
        </div>
    </div>
@endsection
