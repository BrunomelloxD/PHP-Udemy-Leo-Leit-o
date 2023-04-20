<div class="titulo">Valor VS Referência</div>

<?php
    echo "Atribuindo variável por valor: <br>";

    $variavel = "Valor inicial";
    echo $variavel;

    // Atribuindo variável por valor (dois espaços na memória seram alocados para um mesmo valor em duas variáveis diferentes)
    $variavelValor = $variavel;
    echo '<br>';
    echo $variavelValor;

    // Atribuição por referência

    echo "<br><br> Atribuição por referência:";

    echo '<br>';
    $variavelReferencia = &$variavel;
    echo $variavelReferencia;
    echo "<br> $variavel";

    $variavelReferencia = 'mesma referência';

    echo "<br> $variavel <br>";
    echo "$variavelReferencia";

?>