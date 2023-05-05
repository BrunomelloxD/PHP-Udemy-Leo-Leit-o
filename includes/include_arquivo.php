<?php 
    echo "Carregado: include_arquivo<br>";

    $variavel = "Estou definida";

    if(!function_exists('soma')){
        function soma(float $a,float $b) {
            return $a + $b;
        }
    }
?>