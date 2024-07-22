<?php 
namespace ScreenMatch\Modelo;

trait ComAvaliacao {
    private array $notas = [];

    public function avalia(float $nota): void {

        if ($nota < 0 || $nota > 10) {
            throw new \InvalidArgumentException('Nota precisa ser entre 0 e 10');
        }
        $this->notas[] = $nota;
    }

    public function media(): float {
        $somaNotas = array_sum($this->notas);
        $quantidadeDeNotas = count($this->notas);

        return $somaNotas / $quantidadeDeNotas;
    }
}