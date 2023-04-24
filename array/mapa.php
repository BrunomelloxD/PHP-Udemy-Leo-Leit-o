<div class="titulo">Mapa Array</div>

<?php 
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 75.6,
    );

    print_r($dados);

    echo $dados[0];
    var_dump($dados[0]);
    echo $dados["idade"];
    echo '<br>' . $dados["cor"];
    echo '<br>' . $dados["peso"] . '<br>';

    $list = array(
        'a',
        'cinco' => 'b',
        'c',
    );

    print_r($list);
    echo '<br>';
    
    $list[] = '1';
    echo print_r($list);

    $list['vinte'] = 'j';

    echo print_r($list);
?>