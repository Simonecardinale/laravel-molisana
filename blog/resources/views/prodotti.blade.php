@extends('layouts.app')

@section('container-prodotti')
    <div class="container-prodotti">
        @foreach ($pasta as $item)
            <div class="card-prodotti">
                <div class="layover">
                    <img class="img-prodotti" src="{{ $item['src'] }}" alt="">
                </div>
                <h2>{{ $item['titolo'] }}</h2>
            </div>
        @endforeach
    </div>
@endsection