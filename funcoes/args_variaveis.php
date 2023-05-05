<div class="titulo">Argumentos variaveis</div>

<?php 
    function sum($numerOnu, $numerTwo) {
        return $numerOnu + $numerTwo;
    };

    echo sum(4, 5). '<br>';

    function sumComplete(...$numbers) {
        $sum = 0;

        foreach($numbers as $resp) {
            $sum += $resp;
        }
        
        return $sum;
    };

    echo sumComplete(1,2,3,4,5) . '<br>';

    $array = [
        6,
        7,
        8
    ];
    
    echo sumComplete(...$array) . '<br>';

    echo '<hr>';

    function menbers($titular, ...$dependentes) {
        echo "Titular: $titular <br>";
        if($dependentes) {
            foreach($dependentes as $dep) {
                echo "Dependente: $dep <br>";
            }
        }
    }

    echo menbers('bruno', 'lucas', 'lucimar', 'valdir', 'valdinei');
    echo menbers('bruno');
?>