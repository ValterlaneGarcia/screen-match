<?php 
namespace ScreenMatch\Modelo;

class Episodio implements Avaliavel{

    use ComAvaliacao;


    public function __construct(Serie $serie, string $nome, int $numero)
    {

    }


}