<?php

    require __DIR__ . "/src/Modelo/Filme.php";
    require __DIR__ . "/src/funcoes.php";

    echo "Bem-vindo(a) ao screen match!\n";

    $nomeFilme = "Top Gun - Maverick";

    $anoLancamento = 2022;

    $quantidadeDeNotas = $argc -1;
    $notas = [];
    
   for ($contador = 1; $contador < $argc; $contador++) {
        $notas[] = (float) $argv[$contador];
   }

    $notaFilme = array_sum($notas) / $quantidadeDeNotas;
    $planoPrime = true;

    $incluidoNoPlano = incluindoNoPlano($planoPrime, $anoLancamento);

    echo "Nome do filme:" . $nomeFilme . "\n";
    echo "ano de lançamento:" . $anoLancamento . "\n";
    echo "Nota do filme é:" . $notaFilme . "\n";

   exibeMensagemLancamento($anoLancamento);

     switch ($nomeFilme) {
        case "Top Gun - Maverick":
            echo "Ação";
        break;
        case "Thor Ragnarok" :
            echo "Heroi";
        break;
        case "Watchmen" :
            echo "Poderes";
        break;
    }

    $filme = criaFilme(
        "Thor: Ragnarok"
        , 2021
        , 7.8
        , "super-heroi");

    echo $filme->anoLancamento;

    var_dump($notas);
    sort($notas);
    var_dump($notas);
    $menorNota = min($notas);
    var_dump($menorNota);

    var_dump($filme->nome);
    $posicaoDoisPontos = strpos($filme->nome, ':');
    var_dump($posicaoDoisPontos);

    var_dump(substr($filme->nome, 0, $posicaoDoisPontos));

    $filmeComoStringJson = json_encode($filme);
    file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);