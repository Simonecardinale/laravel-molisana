@extends('layouts.app')



@section('container-prodotti')
<div class="container-tipo">
    <h2 class="tipo-prodotti"><a href="{{ route('pagina-lunga') }}">Lunga</a></h2>
    <h2 class="tipo-prodotti"><a href="{{ route('pagina-corta') }}">Corta</a></h2>
    <h2 class="tipo-prodotti"><a href="{{ route('pagina-cortissima') }}">Cortissima</a></h2>

    </div>
    {{-- @foreach ($tipologiaPasta as $key => $element)
    <h2 class="tipo-prodotti">{{ $key }}</h2> --}}
    <div class="container-prodotti">
            @foreach ($pasta as $key=> $item)
            {{-- @foreach ($element as $key=> $item) --}}
                <div class="card-prodotti">
                    <div class="layover">
                        <img class="img-prodotti" src="{{ $item['src'] }}" alt="">
                    </div>
                    <h2><a href="{{ route('pagina-dettaglio', ['id' =>$key]) }}">{{ $item['titolo'] }}</a></h2>
                </div>
            @endforeach
        </div>
        {{-- @endforeach --}}
@endsection