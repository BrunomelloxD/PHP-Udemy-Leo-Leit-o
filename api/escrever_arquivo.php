<div class="titulo">Escrever Arquivo</div>

<?php 
    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Valor inicial\n");

    $str = "Segunda linha\n";
    fwrite($arquivo, $str);
    fclose($arquivo);
    
    $arquivo = fopen('teste.txt', 'w');
    fwrite($arquivo, "Novo conteúdo\n");
    fclose($arquivo);

    $arquivo = fopen('teste.txt', 'a');
    fwrite($arquivo, "Com novos valores\n");
    fwrite($arquivo, "Adicionado em um segundo momento\n");
    fclose($arquivo);
    
    $arquivo = fopen('teste.txt', 'x');
    fwrite($arquivo, "Arquivo novo!\n");
    fclose($arquivo);
?>