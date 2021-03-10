@extends('layouts.app')

@section('blogpost')
<div class="container-blog">
    @foreach ($blog as $val)
        <div class="card-blog">
            <img src="{{ $val['img'] }}" alt="">
            <h2>{{ $val['titolo'] }}</h2>
            <p>{{ $val['descrizione'] }}</p>
        </div>
    @endforeach
</div>
@endsection