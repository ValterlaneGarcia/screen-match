<?php

require __DIR__ . '/autoload.php';

use ScreenMatch\Modelo\{Filme, Episodio, serie, Genero};
use ScreenMatch\Calculos\{CalculadoraMaratona, ConversorNotaEstrela};

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SUPER_HEROI, //Usar constante de classe Genero
    180
);


$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media() ."\n";

echo $filme->anoLancamento();

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

echo $serie->anoLancamento() . "\n";

$serie->avalia(8);

echo $serie->media() . "\n";

$calculadora = new CalculadoraMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";

