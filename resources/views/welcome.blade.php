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
        <div class="container-lg d-flex justify-content-center">
            <div class="loadMore text-white bg-primary">
                <p class="fs-6">LOAD MORE</p>
            </div>
        </div>
        <div class="midNav bg-primary w-100">
            <div class="container-lg d-flex justify-content-center align-items-center">
                <div class="midContainer d-flex justify-content-center align-items-center me-5">
                    <img class="midItem me-3" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <p class="text-white mt-3">DIGITAL COMICS</p>
                </div>
                <div class="midContainer d-flex justify-content-center align-items-center me-5">
                    <img class="midItem me-3" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <p class="text-white mt-3">DIGITAL COMICS</p>
                </div>
                <div class="midContainer d-flex justify-content-center align-items-center me-5">
                    <img class="midItem me-3" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <p class="text-white mt-3">DIGITAL COMICS</p>
                </div>
                <div class="midContainer d-flex justify-content-center align-items-center me-5">
                    <img class="midItem me-3" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <p class="text-white mt-3">DIGITAL COMICS</p>
                </div>
                <div class="midContainer d-flex justify-content-center align-items-center me-5">
                    <img class="midItem me-3" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <p class="text-white mt-3">DIGITAL COMICS</p>
                </div>
                
            </div>
        </div>
    </div>
@endsection
