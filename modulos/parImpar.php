<?php
    /***********************************************************************
     * Objetivo: Arquivo com funções de separação de números pares e ímpares
     * Autor: Florbela 
     * Data: 24/02/2022
     * Versão: 1.0
    ************************************************************************/

    //Estamos sem front! :) - Realizando teste de mesa
    //Realizando teste, para ver se a função 'numerosPares()' está certa.
    $resultadoPares = numerosPares(5, 50);
    echo('<pre>');
    print_r($resultadoPares);
    echo('</pre>');

    echo('--------------------------------------------------------------');

    //Realizando teste, para ver se a função 'numerosImpares()' está certa.
    $resultadoImpares = numerosImpares(5, 50);
    echo('<pre>');
    print_r($resultadoImpares);
    echo('</pre>');

    echo('--------------------------------------------------------------');

    //Realizando teste, para ver se a função 'numerosParesImpares()' está certa.
    $resultadoParesImpares = numerosParesImpares(1, 15);
    echo('<pre>');
    print_r($resultadoParesImpares);
    echo('</pre>');

    //Função para separar números pares
    function numerosPares($numeroInicial, $numeroFinal) {
        //Recebendo dados de argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;

        $pares = array();
        $contPar = (int) 0;

        //Repetição para separar os números pares
        while ($numInicial <= $numFinal) {
            //Valida se o número corrente é par
            if($numInicial % 2 == 0) {
                $pares[$contPar] = $numInicial;
                $contPar++;
            }
            $numInicial++;
        }
        return $pares;
    }

    //Função para separar números ímpares
    function numerosImpares($numeroInicial, $numeroFinal) {
        //Recebendo dados de argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;

        $impares = array();
        $contImpar = (int) 0;

        //Repetição para separar os números ímpares
        while ($numInicial <= $numFinal) {
            //Valida se o número corrente é par
            if($numInicial % 2 == 1) {
                $impares[$contImpar] = $numInicial;
                $contImpar++;
            }
            $numInicial++;
        }
        return $impares;
    }

    //Função para retornar os números pares e ímpares
    function numerosParesImpares($numeroInicial, $numeroFinal) {
        //Recebendo dados de argumentos da função
        $numInicial = (int) $numeroInicial;
        $numFinal = (int) $numeroFinal;

        //Declaração dos arrays (pares e ímpares) e seus contadores (índices)
        $pares = array();
        $impares = array();

        //Chama as funções de pares e ímpares para separar os números
        $pares = numerosPares($numInicial, $numFinal);
        $impares = numerosImpares($numInicial, $numFinal);

        $paresImpares = array(
            "listaPares" => $pares,
            "listaImpares" => $impares
        );

        return $paresImpares;
    }
?>