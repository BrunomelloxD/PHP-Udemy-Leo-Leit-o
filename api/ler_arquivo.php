<div class="titulo">Ler Arquivo</div>

<?php 
    $arquivo = fopen('teste.txt', 'r');
    echo fread($arquivo, 10);
    echo '<br>';
    echo fread($arquivo, 10);
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    $fileSize = filesize('teste.txt');
    echo $fileSize . '<br>';
    echo fread($arquivo, $fileSize );
    fclose($arquivo);

    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r');
    echo fgets($arquivo) . '<br>';
    echo fgets($arquivo) . '<br>';
    echo fgets($arquivo) . '<br>';
    echo var_dump(fgets($arquivo)) . '<br>';
    fclose($arquivo);

    echo '<hr>';
    // Lendo linha por linha
    $arquivo = fopen('teste.txt', 'r');
    
    // feof = END OF FILE
    while(!feof($arquivo)) {
        echo fgets($arquivo) . '<br>';
    }
    fclose($arquivo);

    echo '<hr>';
    
    // Lendo caractere por caractere
    $arquivo = fopen('teste.txt', 'r');
    
    while(!feof($arquivo)) {
        echo fgetc($arquivo);
    }
    echo '<br>';
    fclose($arquivo);
    
    echo '<hr>';

    $arquivo = fopen('teste.txt', 'r+');
    echo fgets($arquivo) . '<br>';
    echo fgets($arquivo) . '<br>';
    fwrite($arquivo, "\nAdicionado durante a leitura");
    fclose($arquivo);
?>