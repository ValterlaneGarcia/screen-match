<?php
namespace ScreenMatch\Modelo;


abstract class Titulo implements Avaliavel {
    
    private string $nome;
    private int $anoLancamento ;
    private string $genero;
    
    use ComAvaliacao;

    public function __construct(string $nome, int $anoLancamento, string $genero)
    {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
    }

    public function anoLancamento(): int {
        return $this->anoLancamento;
    }

    public function nome(): string {
        return $this->nome;
    }

    public function genero(): string {
        return $this->genero;
    }

    abstract public function duracaoEmMinutos(): int;

}