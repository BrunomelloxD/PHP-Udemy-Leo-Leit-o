<div class="titulo">Anonimas</div>

<?php 
    $soma = function ($a, $b) {
        return $a + $b;
    };

    echo $soma(1,2);

    echo '<hr>';

    function executar($a, $b, $op, Callable $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado <br>";
    }

    executar(2, 3, '+', $soma);

    $multiplicacao = function($a, $b) {
        return $a * $b;
    };

    executar(2, 3, '*', $multiplicacao);

    function divisao($a, $b) {
        return $a / $b;
    };

    executar(2, 3, '/', 'divisao');
?>