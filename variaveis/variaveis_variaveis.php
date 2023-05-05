<div class="titulo">Variáveis variáveis</div>

<?php 
    $a = 'ValorA';
    $$a = 'ValorAA';

    echo "$a {$$a} <br>";

    $epa =  'opa';
    $opa = 'vish';
    echo "$epa {$$epa}"
?>