@extends('layouts/main')
@section('contenuto-main')
    
    <div class="container">
        <div class="hero">
            <h1>{{ $product['titolo'] }}</h1>
            <img src=" {{$product['src-h']}} " alt="img-pasta">
            <img src="{{$product['src-p']}} " alt="img confezione pasta">
        </div>
        <div class="descrizione">
            {{-- Laravel porta anche i br e le parti unascpaed,
                per evitare questo problema, guardando la guida
                nella sezione: displaying unascaped data --}}
            {{-- <p>{{$product['descrizione']}} </p> --}}
            <p>{!! $product['descrizione'] !!}</p>
        </div>
    </div>
@endsection