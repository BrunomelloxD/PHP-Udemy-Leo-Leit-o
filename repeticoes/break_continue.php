<div class="titulo">Break & Continue</div>

<?php 
    $cont = 10;

    for(;;){
        echo "$cont <br>";
        $cont++;
        if($cont > 20) {
            break;
        }
    }

    echo '<br><hr>';

    for(;;) {
        $cont++;
        if($cont % 2 === 1) {
            continue;
        };
        echo $cont . '<br>';
        if($cont >= 30) {
            break;
        }
    };

    echo '<br><hr>';

    $array = [1,2,3,4,5,6];

    foreach($array as $response) {
        if($response ===  5) break;
        if($response % 2 === 0) continue;
        
        echo $response . '<br>';
    }

    echo 'Fim!';
    
?>