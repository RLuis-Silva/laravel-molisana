
@extends('layouts/main')
@section('contenuto-main')
<section class="container">

</section>
<div class="container">
    <h1>HOME PAGE- MOLISANA</h1>
    {{-- prima --}}
    {{-- <div class="cards"> --}}
        {{-- stampo ogni singolo elemento dell' array --}}
        {{-- @foreach ($cards as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="">Vedi prodotto</a>    
            </div>    
        @endforeach
    </div> --}}

    <h2>Le lunghe</h2>
    <div class="cards">
        {{-- stampo ogni singolo elemento dell' array lunghe --}}
        @foreach ($lunghe as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="">Vedi prodotto</a>    
            </div>    
        @endforeach
    </div>

    <h2>Le corte</h2>
    <div class="cards">
        {{-- stampo ogni singolo elemento dell' array corte --}}
        @foreach ($corte as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="">Vedi prodotto</a>    
            </div>    
        @endforeach
    </div>

    <h2>Le cortissime</h2>
    <div class="cards">
        {{-- stampo ogni singolo elemento dell' array cortissime --}}
        @foreach ($cortissime as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="">Vedi prodotto</a>    
            </div>    
        @endforeach
    </div>
</div>
@endsection 