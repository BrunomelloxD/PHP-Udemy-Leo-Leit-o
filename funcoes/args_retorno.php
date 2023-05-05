<div class="titulo">Argumentos e retorno</div>

<?php 
    function obterMensagem() {
        return 'Seja bem vindo';
    }

    $mensage = obterMensagem();
    echo $mensage . '<br>';
    function handleGetMensageWithName($name) {
        return "Wellcome $name";
    }

    $responseName = handleGetMensageWithName('Bruno');
    echo $responseName . '<br>';

    function handleSum($numberOne, $numberTwo) {
        $response = $numberOne + $numberTwo;
        return $response;
    };

    $responseSum = handleSum(10,320);
    echo $responseSum . '<br>';

    function handleGetIDontNowxD($name, $age){
        $name = 'Jéssica';
        $response = "Olá $name você tem $age anos?";
        return $response;
    }

    $name = 'Bruno';
    $age = 24;

    $responseIDontNow = handleGetIDontNowxD($name, $age);
    echo $responseIDontNow . '<br>';
    
?>