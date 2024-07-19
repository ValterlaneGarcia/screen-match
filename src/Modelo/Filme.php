<?php

class Filme extends Titulo {

    private int $duracaoEmMinutos;

    public function __construct(string $nome, int $anoLancamento, string $genero,  int $duracaoEmMinutos)
    {
   
        $this->duracaoEmMinutos = $duracaoEmMinutos;

        parent::__construct($nome, $anoLancamento, $genero);
    }

    public function duracaoEmMinutos(): int {
        return $this->duracaoEmMinutos;
    }
}