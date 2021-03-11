@extends('layouts/app')

@section('title', $formato['titolo'])
    
@section('prodotto-dettaglio')
    <div class="container-dettaglio">
        <h2>{{ $formato['titolo'] }}</h2>
        <img src="{{ $formato['src-h'] }}" alt="">
        <img src="{{ $formato['src-p'] }}" alt="">
    </div>
@endsection