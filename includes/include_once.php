<div class="titulo">Include Once</div>

<?php 
    include('include_once_arquivo.php');
    // require('include_once_arquivo.php');

    echo "Valor da variável={$variavel} <br>";
    $variavel = "Variável alterada";
    echo "Valor da variável={$variavel} <br>"
?>