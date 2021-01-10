@extends('layouts/main')
@section('contenuto-main')
    <div class="container">
        <!-- inserisco le freccette avanti e indietro -->
        <div class="navigazione">
            
            @if( $id > 0)
            {{-- clicco icona e mi porta in route del prodotto con $id -1, quindi indietro di 1 --}}
            <a href="{{ route('prodotti', $id - 1)}}">&lt; PREV</a>
            @endif

            @if( $id < $lenght)
            {{-- clicco icona e mi porta in route del prodotto con $id +1, quindi avanti di 1 --}}
            <a href="{{ route('prodotti', $id + 1)}}"> NEXT &gt;</a>
            @endif

        </div>
        <div class="hero">
            <h1>{{ $prodotto['titolo'] }}</h1>
            <img src=" {{$prodotto['src-h']}} " alt="img-pasta">
            <img src="{{$prodotto['src-p']}} " alt="img confezione pasta">
        </div>
        <div class="descrizione">
            {{-- Laravel porta anche i br e le parti unascpaed,
                per evitare questo problema, guardando la guida
                nella sezione: displaying unascaped data --}}
            {{-- <p>{{$product['descrizione']}} </p> --}}
            <p>{!! $prodotto['descrizione'] !!}</p>
        </div>
    </div>
@endsection