<div class="titulo">Laço For</div>

<?php 
    for($count = 1; $count <= 5; $count++) {
        echo "Vamos contar até 5: $count <br>";
    }

    echo '<hr>';

    for(; $count <= 10; $count++) {
        echo "TESTE01: $count <br>";
    }

    echo '<hr>';

    for(; $count <= 15; $count++) {
        echo "TESTE02: $count <br>";
    }

    echo '<hr>';

    $array = [
        1 => 'domingo',
        'segunda',
        'terça',
        'quarta',
        'quinta',
        'sexta',
        'sábado',
    ];
    
    print_r($array);

    echo '<br><br>';

    for($i = 1; $i <= count($array); $i++) {
        echo $array[$i] . '<br>';
    }

    echo '<hr>';

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

    for($i = 0; $i < count($matrix); $i++) {
        for ($j = 0; $j < count($matrix[$i]); $j++) {
            echo "{$matrix[$i][$j]}";
        };
        echo '<br>';
    }

?>