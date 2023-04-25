<div class="titulo">Escopo</div>

<?php 
    function imprimirMensagem($param) {
        return "Olá $param <br>";
    }

    echo imprimirMensagem('Mundo');

    $variavel = 1;
    function trocarValor() {
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes da função: $variavel <br>";
    trocarValor();
    echo "Depois da função: $variavel"
?>