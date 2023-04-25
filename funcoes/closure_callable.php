<div class="titulo">Closure and Callable</div>

<?php 
    $soma1 = function ($a, $b) {
        return $a + $b;
    };

    function soma2($a, $b) {
        return $a + $b;
    };

    echo $soma1(5,10) . '<br>';
    echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';
    
    echo soma2(5,10) . '<br>';
    echo (is_callable(soma2(5,10)) ? 'Sim' : 'Não') . '<br>';

?>