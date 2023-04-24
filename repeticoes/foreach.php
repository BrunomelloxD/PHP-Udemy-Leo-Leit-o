<div class="titulo">FOREACH</div>

<?php 
    $array = [
        1 => 'domingo',
        'segunda',
        'terça',
        'quarta',
        'quinta',
        'sexta',
        'sábado',
    ];

    foreach($array as $valor) {
        echo $valor . '<br>';
    };

    foreach($array as $indice => $valor) {
        echo "$indice: $valor <br>";
    }

    $matrix = [
        [
            'a',
            'b',
            'c',
            'd',
            'e'
        ],
        [
            'a',
            'e',
            'i',
            'o',
            'u'
        ]
    ];

    foreach($matrix as $linha) {
        foreach($linha as $value) {
            echo $value;
        }
        echo '<br>';
    }

    $numeros = [1,2,3,4,5];

    foreach ($numeros as &$dobrar) {
        $dobrar *= 2;
        echo $dobrar . '<br>';
    }

?>