
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Consumo de API</title>
</head>
<body>
    <h1>Consumo da PokéAPI</h1>

    <h2>{{ ucfirst($pokemon['name']) }}</h2>

    <p>Altura: {{ $pokemon['height'] / 10 }} metros</p>

    <p>Peso: {{ $pokemon['weight'] / 10 }} kg</p>

    <h3>Habilidades</h3>

    <ul>
        @foreach ($pokemon['abilities'] as $habilidade)
            <li>
                {{ $habilidade['ability']['name'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
