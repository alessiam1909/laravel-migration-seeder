<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Trains</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main >
        <h1 class="text-center m-4">BOOLITALIA</h1>
        <div class="d-flex flex-wrap">
            @foreach ($trains as $train )
            <div class="card text-bg-success m-3 p-3" style="max-width: 18rem;">
                <div class="card-header">ID treno: {{$train['id']}}</div>
                <div class="card-body">
                  <p class="card-text">Partenza da: {{$train['stazione_di_partenza']}} alle ore: {{$train['orario_di_partenza']}}</p>
                  <p class="card-text">Arrivo a: {{$train['stazione_di_arrivo']}} alle ore: {{$train['orario_di_arrivo']}}</p>
                  <p class="card-text">Compagnia ferroviaria: {{$train['azienda']}}</p>
                  <p class="card-text">Codice treno: {{$train['codice_treno']}}</p>
                  <p class="card-text">Numero carrozze: {{$train['numero_carrozze']}}</p>
                  
                </div>
            </div>
            @endforeach
        </div>
          
    </main>

</body>

</html>