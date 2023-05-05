<div class="titulo">Tipo String</div>

<?php 
    echo 'Eu sou uma string';
    echo '<br>';
    
    var_dump('Eu também');
    echo '<br>';

    // Concatenação
    echo "Nós também" . " somos";
    echo "<br>", "Também aceito", " virgulas";

    echo '<br>';
    echo "'Teste'" . '"Teste' . '\'Teste\'' . "\"Teste" . "\\";

    echo '<br>';
    print ("Também existe a função print");

    echo '<br>';
    print "Também existe a função print";

    // Algumas funções

    echo '<br>', strtoupper('maximizado');
    echo '<br>', strtolower('MINIMIZADO');
    echo '<br>', ucfirst('Somente a primeira letra');
    echo '<br>', ucwords('Todas as palavras');
    echo '<br>', strlen('Quantas letras?');
    echo '<br>', strlen('Eu também');
    echo '<br>', mb_strlen('Eu também', "utf-8");
    echo '<br>', substr('Só uma parte mesmo', 7, 6); // parte
    echo '<br>', str_replace('isso', 'aquilo', 'Troca isso');

?>