{{-- LAYOUT PRINCIPALE DEL SITO --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- link stile CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>Laravel</title>
    </head>
    <body>
        <!-- inserisco il partial: HEADER -->
        @include('partials.header')
        <main>
            @yield('contenuto-main')
        </main>
        
        <!-- inserisco il partial:FOOTER -->
        @include('partials/footer')
    </body>
</html>