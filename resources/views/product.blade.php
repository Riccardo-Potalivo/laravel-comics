@extends('layouts.app')

@section('title', 'Product')

@section('content')

    <main>
        <section class="poster">
            {{-- <div class="container position-relative h-100 ">
                <div class="img_box">
                    <img src="{{ $comics[0]['thumb'] }}" alt="{{ $comics[0]['title'] }}">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="text-uppercase ">{{ $comics[0]['title'] }}</h2>
                <p>{{ $comics[$index]['description'] }}</p>
            </div> --}}
            <div class="container position-relative h-100 ">
                <div class="img_box">
                    <img src="{{ $thumb }}" alt="{{ $title }}">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <h2 class="text-uppercase ">{{ $title }}</h2>
                <p>{{ $description }}</p>
            </div>
        </section>

    </main>


@endsection