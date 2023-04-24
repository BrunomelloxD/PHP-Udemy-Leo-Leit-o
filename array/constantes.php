<div class="titulo">Constantes</div>

<?php 
    const FRUTAS = [
        'laranja',
        'abacaxi'
    ];

    // FRUTAS[0] = 'banana';
    // FRUTAS[] = 'banana';
    echo FRUTAS[0];

    const CARROS = [
        'fiat' => 'uno',
        'ford' => 'fiesta',
    ];

    echo '<br>' . CARROS['fiat'];
?>