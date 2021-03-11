@extends('layouts/app')


@section('container-prodotti')
<div class="container-prodotti">
    @foreach ($pasta_corta as $key=> $item)
        <div class="card-prodotti">
            <div class="layover">
                <img class="img-prodotti" src="{{ $item['src'] }}" alt="">
            </div>
            <h2><a href="{{ route('pagina-dettaglio', ['id' =>$key]) }}">{{ $item['titolo'] }}</a></h2>
        </div>
    @endforeach
</div>
@endsection