<!DOCTYPE html>
<html lang="es-Mx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        rel="stylesheet"integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
        crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container container text-center col-sm-4">
        <img class="pokemon-banner" src="{{ asset('img/what_pokemon.png') }}" alt="Pokemon">
        <form action="/" method="get" enctype="multipart/form-data">
            <div data-poke-card class="card text-center poke-card">
                <div class=" h2 text-danger">
                    <h2 for="name">{{ $json->name }}</h2>
                </div>
                <div data-poke-img-container class="img-container ">
                    <img data-poke-img class="poke-img border border-5 " src={{ $json->sprites->front_default }}
                        width="200px" />
                    <div>Id: {{ $json->id }}</div>
                    <div>
                        <input type="submit" class="btn btn-outline-warning" value="Mostrar"></input>
                    </div>
                </div>
            </div>
        </form>
        <div style="margin: 5px;">
            <a href="tabla"><button type="button" class="btn btn-outline-primary pokeball">Mostrar pokemons</button></a>
        </div>

        <!-- bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>
