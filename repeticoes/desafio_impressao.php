<div class="titulo">Desafio impressao</div>

<?php 
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF',
    ];

    for($indice = 0;$indice < count($array);$indice++) {
        if($indice % 2 === 1) {
            continue;
        }
        echo $array[$indice] . '<br>';
    }

    echo '<hr>';

    foreach($array as $indice => $value) {
        if($indice % 2 === 1) {
            continue;
        }
        echo $array[$indice] . '<br>';
    }
?>