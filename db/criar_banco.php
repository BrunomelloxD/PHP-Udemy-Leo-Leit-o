<div class="titulo">Criar banco</div>

<?php 
    require_once 'conexao.php';

    $conexao = novaConexao(null);
    $sql = 'CREATE DATABASE curso_php';

    $conexao->query($sql);
    $conexao->close();
?>