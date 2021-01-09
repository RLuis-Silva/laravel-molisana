
@extends('layouts/main')
@section('contenuto-main')
<section class="container">

</section>
    <h1>HOME PAGE- MOLISANA</h1>
    <div class="cards">
        {{-- stampo ogni singolo elemento dell' array --}}
        @foreach ($cards as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="">Vedi prodotto</a>    
            </div>    
        @endforeach
    </div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Nobis repellendus at, perferendis pariatur adipisci, repellat sunt recusandae corrupti tempora reiciendis 
        quaerat itaque inventore vel amet eum, distinctio unde ea deleniti.

    </p>
@endsection 