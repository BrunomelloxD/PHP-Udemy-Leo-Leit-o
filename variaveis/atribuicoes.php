<div class="titulo">Atribuições</div>

<?php 
    $titulo = 'Atribuições';
    
    $numero = 10;
    echo '<br>', $numero;

    $numero = $numero - 1;
    echo '<br>', $numero;

    $numero = $numero - 3;
    echo '<br>', $numero;

    $numero = $numero + 1.5;
    echo '<br>', $numero;

    $numero--;
    echo '<br>', $numero;

    $numero++;
    echo '<br>', $numero;

    // $variavelInexistente = 'Valor existente';
    echo '<br>' . $variavelInexistente; 

    $valor = $variavelInexistente ?? 'Default';
    echo '<br>' . $valor;
?>