<div class="titulo">Desafio FOR</div>

<!-- 
#
##
###
####
#####
 -->

<?php 
    $impressao = '';

    for($increment = 1; $increment <= 5; $increment++) {
        $impressao .= '#';
        echo $impressao . '<br>';
    }

    echo '<hr>';

    for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .= '#') {
        echo $impressao2 . '<br>';
    }
?>