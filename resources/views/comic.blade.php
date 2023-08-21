@extends('layout.main_layout')
@section('main')
    <section>
        <div>
            <img src="{{ $hero['thumb'] }}" alt="">
        </div>
        <h1>{{ $hero['title'] }}</h1>
        <div>{{ $hero['description'] }}</div>
        <div>{{ $hero['price'] }}</div>
        <img src="{{ Vite::asset('resources\img\adv.jpg') }}" alt="">
        @foreach ($hero['artists'] as $artist)
            <div>
                {{ $artist }}
            </div>
        @endforeach
        @foreach ($hero['writers'] as $writer)
            <div>
                {{ $writer }}
            </div>
        @endforeach
    </section>
@endsection
