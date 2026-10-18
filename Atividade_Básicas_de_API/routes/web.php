
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/pokemon', function () {
    $resposta = Http::get(
        'https://pokeapi.co/api/v2/pokemon/pikachu'
    );

    if ($resposta->failed()) {
        return response('Erro ao consultar a API.', 502);
    }

    $pokemon = $resposta->json();

    return view('pokemon', compact('pokemon'));
});
