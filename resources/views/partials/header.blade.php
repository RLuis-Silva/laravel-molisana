{{-- HEADER DEL SITO --}}
<header>
    <a href="{{route('home')}} ">
        <img class="brand" src="{{ asset('img/logo.png') }}" alt="logo molisana">
    </a>
    
    <nav>
        <ul>
            <li><a href=" {{route('home')}} ">HOME</a></li>
            <li><a href=" {{route('news')}} ">NEWS</a></li>
        </ul>
    </nav>
</header>