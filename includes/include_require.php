<div class="titulo">Include vs Require</div>

<?php 
    echo 'Usando include em um arquivo inexistente<br>';
    include ('arquivo_inexistente.php');
    echo 'Usando include em um arquivo inexistente<br>';
    
    require ('arquivo_inexistente.php');
    echo 'Usando require em um arquivo inexistente<br>';
?>