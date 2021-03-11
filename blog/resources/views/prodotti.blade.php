@extends('layouts.app')

{{-- @section('tipo-pasta')
    @foreach ($tipologiaPasta as $key => $element)
    <h2>{{ $key }}</h2>
    @endforeach

@endsection --}}

@section('container-prodotti')
    @foreach ($tipologiaPasta as $key => $element)
    <h2>{{ $key }}</h2>
    <div class="container-prodotti">
            @foreach ($element as $item)
                <div class="card-prodotti">
                    <div class="layover">
                        <img class="img-prodotti" src="{{ $item['src'] }}" alt="">
                    </div>
                    <h2><a href="{{ route('pagina-dettaglio', ['id' =>$key]) }}">{{ $item['titolo'] }}</a></h2>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection