@extends('layouts.app')

@section('content')
    <div>
        <div class="jumboContainer">
            <img class="w-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
        </div>
    </div>
    <div class="mainContainer">
        <div class="currentSeries text-white bg-primary">
            <h3>CURRENT SERIES</h3>
        </div>
        <div class="container-lg comicsContainer">

            @foreach ($data as $comic)
                <div class="card mb-5">
                    <img class="thumb" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                    <p class="text-white">{{ strtoupper($comic['title']) }}</p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
