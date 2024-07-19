<?php 

class CalculadoraMaratona {
    private int $duracaomaratona;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaomaratona += $titulo->duracaoEmMinutos();
    }

    public function duracao(): int {
        return $this->duracaomaratona;
    }
}
