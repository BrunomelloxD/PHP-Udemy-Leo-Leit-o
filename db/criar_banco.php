<div class="titulo">Criar banco</div>

<?php 
    require_once 'conexao.php';

    $conexao = novaConexao(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

    $resultado = $conexao->query($sql);

    if($resultado) {
        echo "
            <div class='alert alert-danger' role='alert'>
                Success to connect to database! ✔️
            </div>
        ";
    } else {
        echo "
            <script>
                alert('Erro to connect to database! ❎ ' . $conexao->error)
            </script>
        ";
        $conexao->close();
    };
    
    $conexao->close();
?>