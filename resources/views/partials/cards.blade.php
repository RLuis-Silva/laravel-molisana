<h2>Le corte</h2>
    <div class="cards">
        {{-- stampo ogni singolo elemento dell' array corte --}}
        @foreach ($corte as $card)
            <div class="card">
                <img src=" {{$card['src']}} " alt="img-prodotto">
                <h3>{{$card['titolo']}}</h3>
                <a href="{{route('prodotti', $card['id'])}}">Vedi prodotto</a>       
            </div>    
        @endforeach
    </div>
