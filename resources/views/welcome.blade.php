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

    <main>
        @foreach ($trains as $train )
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Codice treno: {{$train['codice_treno']}}</div>
            <div class="card-body">
              <p class="card-text">Success card title</p>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        @endforeach
          
    </main>

</body>

</html>