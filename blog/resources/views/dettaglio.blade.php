@extends('layouts/app')

@section('title', $formato['titolo'])

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
@endsection
    
@section('prodotto-dettaglio')
    <div class="container-dettaglio">
        <h2>{{ $formato['titolo'] }}</h2>
        <img src="{{ $formato['src-h'] }}" alt="">
        <img src="{{ $formato['src-p'] }}" alt="">
        <p>{!! $formato['descrizione'] !!}</p>
        <div class="icon-container">
            <div class="icon-set">
                <i class="fas fa-ruler-vertical"></i>
                <h3>{{ $formato['tipo'] }}</h3>
            </div>
            <div class="icon-set">
                <i class="fas fa-stopwatch"></i>
                <h3>{{ $formato['cottura'] }}</h3>
            </div>
            <div class="icon-set">
                <i class="fas fa-weight-hanging"></i>
                <h3>{{ $formato['peso'] }}</h3>
            </div>
        </div>
    </div>
@endsection