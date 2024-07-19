<?php

class Titulo {
    private string $nome;
    private int $anoLancamento ;
    private string $genero;
    private array $notas;

    public function __construct(string $nome, int $anoLancamento, string $genero)
    {
        $this->nome = $nome;
        $this->anoLancamento = $anoLancamento;
        $this->genero = $genero;
        $this->notas = [];
    }

    public function avalia(float $nota): void {
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
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

    public function duracaoEmMinutos(): int {
        return 0;
    }
}