<div class="titulo">Array multidimensionais</div>

<?php 
    $dados = [
        'pessoa01' => [
            'nome' => 'Roberto',
            'idade' => 26,
            'naturalidade' => 'São Paulo'
        ],
        'pessoa02' => [
            'nome' => 'Maria',
            'idade' => 25,
            'naturilidade' => 'Bahia'
        ],
    ];

    print_r($dados);
    echo '<br>' . $dados['pessoa01']['idade'];
    echo '<br>' . $dados['pessoa02']['idade'];

    $dados['pessoa03'] = [
        'nome' => 'Florinda',
        'idade' => 30,
        'naturalidade' => 'Minas Gerais'
    ];

    echo '<br><br>';
    print_r($dados);
    echo '<br>' . $dados['pessoa03']['idade'];

    echo '<br><br>';
    $dados['pessoa03']['Vizinho'] = 'xDxDxD';
    print_r($dados);

    unset($dados['pessoa02']);
    echo '<br><br>';
    print_r($dados);
    var_dump($dados['pessoas02'])
?>