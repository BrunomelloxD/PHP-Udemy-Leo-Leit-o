<div class="titulo">While / Do While</div>

<?php 
    const VALOR_LIMITE = 5;
    $contador = 0;
    
    while($contador < VALOR_LIMITE) {
        echo "while $contador <br>";
        $contador++;
    }

    echo '<hr>';

    $newContador = 0;

    do {
        echo "Do while $newContador <br>";
        $newContador++;
    }
    while($newContador < VALOR_LIMITE);
?>