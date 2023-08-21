@extends('layout.main_layout')
@section('main')
    <section class="container spotlight">
        <div class="pb">
            <img src="{{ $hero['thumb'] }}" alt="">
        </div>
        <section class="w-800">
            <h1>{{ $hero['title'] }}</h1>
            <div class="green-bar flex jc-between">
                <div>
                    <p>U.S. Price: </p>
                    <p class="c-white">{{ $hero['price'] }}</p>
                </div>
                <div>
                    <p>AVAILABLE</p>
                    <p>Check Available</p>
                </div>
            </div>
            <div class="pb-50">{{ $hero['description'] }}</div>
            <img src="{{ Vite::asset('resources\img\adv.jpg') }}" alt="">
            <div class="flex bg-grey w-800">
                <div class="w-50">
                    <h2>Talent</h2>
                    <div class="flex">
                        <h4 class="w-20">Art by:</h4>
                        <div class="w-80">
                            @foreach ($hero['artists'] as $artist)
                                <span class="fs-1">
                                    {{ $artist }},
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">Written by:</h4>
                        <div class="w-80">
                            @foreach ($hero['writers'] as $writer)
                                <span>
                                    {{ $writer }},
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <h2>Specs</h2>
                    <div class="flex">
                        <h4 class="w-20">Series:</h4>
                        <a class="w-80" href="">{{ $hero['series'] }}</a>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">U.S.Price:</h4>
                        <a class="w-80" href="">{{ $hero['price'] }}</a>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">On Sale Date:</h4>
                        <a class="w-80" href="">{{ $hero['sale_date'] }}</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
