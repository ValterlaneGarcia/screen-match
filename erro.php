<?php

require __DIR__ . "/src/Modelo/ComAvalicao.php";
require __DIR__ . "/src/Modelo/Avaliavel.php";
require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Episodio.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConversorNotaEstrela.php";

use ScreenMatch\Modelo\{Filme, Episodio, serie, Genero};
use ScreenMatch\Calculos\{CalculadoraMaratona, ConversorNotaEstrela};

$serie = new Serie(
    'Lost',
     2007,
      Genero::DRAMA,
       10 ,
       20,
       30
);

$episodio = new Episodio(
    $serie,
    'Episodio Piloto',
     1
);
try {
    $episodio->avalia(5);
    $episodio->avalia(510);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio);
} catch (Exception $e) {
    echo "Um problema aconteceu:" . $e->getMessage();
}