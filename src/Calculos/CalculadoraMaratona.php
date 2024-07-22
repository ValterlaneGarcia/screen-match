<?php
namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Titulo;

class CalculadoraMaratona {
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int {
        return $this->duracaoMaratona;
    }
}