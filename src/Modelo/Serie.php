<?php

class serie extends Titulo {
    
    private int $temporadas;
    private int $episodioPorTemporadas;
    private int $minutosPorEpisodio;


    public function __construct(string $nome, int $anoLancamento, string $genero, int $temporadas, int $episodioPorTemporadas, int $minutosPorEpisodio  )
    {
        
        $this->temporadas = $temporadas;
        $this->episodioPorTemporadas = $episodioPorTemporadas;
        $this->minutosPorEpisodio = $minutosPorEpisodio;

        parent::__construct($nome, $anoLancamento, $genero);
    }


    public function temporadas(): int {
        return $this->temporadas;
    }

    public function episodioPorTemporadas(): int {
        return $this->episodioPorTemporadas;
    }

    public function minutosPorEpisodio(): int {
        return $this->minutosPorEpisodio;
    }

   public function duracaoEmMinutos(): int {
        return $this->temporadas * $this->episodioPorTemporadas * $this->minutosPorEpisodio;
    }

}