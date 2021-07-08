@extends('layout.app')

@section('title', "Homepage")

@section('content')

<section>
    @foreach($fumetti as $fumetto) 
        <div class="card">
            <img src="{{ $fumetto['thumb'] }}" alt="">
            <h3>{{ $fumetto['series'] }}</h3>
        </div>

    @endforeach
</section>

@endsection