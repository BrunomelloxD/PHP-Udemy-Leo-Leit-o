<div class="titulo">Include Função</div>

<?php 
    echo "Carregando arquivo: include_arquivo<br>";

    function carregarArquivo() {
        include('include_arquivo.php');

        echo $variavel . '<br>';
        echo soma(2,5) . '!<br>';
    }

    echo 'Novamente no arquivo include_funcao<br>';
    // echo soma(1,8);
    carregarArquivo();

    echo "Variável = '{$variavel}'"
?>