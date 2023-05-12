<div class="titulo">PDO: Alterar</div>

<?php 
    require_once "conexao_pdo.php";

    $sql = "UPDATE cadastro SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ? WHERE id = ?";

    $conexao = novaConexao();
    $stmt = $conexao->prepare($sql);

    $resultado = $stmt->execute([
        'Gui',
        '1980-12-12',
        'gui@gui.com',
        'https://openai.com/',
        1,
        12000,
        7
    ]);

    if ($resultado) {
        echo "Success!";
    } else {
        print_r($stmt->errorInfo());
    }
?>