<div class="titulo">Argumento padrão</div>

<?php 
    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente' ) {
        return "Bem vindo, $nome $sobrenome <br>";
    }

    echo saudacao();
    echo saudacao(NULL);
    echo saudacao(NULL, NULL);
    echo saudacao('Mestre', 'supremo');

    echo '<hr>';
    function anotarPedido($comida, $bebida = 'Água') {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida";
    }

    anotarPedido('Hamburguer');

    echo '<hr>';
    function anotarPedido2($bebida = 'Água', $comida) {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida";
    }

    anotarPedido2('Coca', 'Hamburguer');
?>