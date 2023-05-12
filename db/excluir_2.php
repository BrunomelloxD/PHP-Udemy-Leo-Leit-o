<!-- Importando Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="titulo">Excluir Registro #2</div>

<?php 
    // Desabilitando warnings do PHP
    error_reporting(E_ALL ^ E_WARNING); 

    $count = 0;
    
    // echo __DIR__;

    require_once "conexao.php";

    $conexao = novaConexao();
    $registros = [];

    if($_GET['excluir']) {
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $sql = "SELECT id, nome, nascimento, email FROM cadastro";
    $resultado = $conexao->query($sql);

    $count = 1;
    if($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;    
        }
    } else if ($conexao->error) {
        echo "Error: " . $conexao->error;
    }

    $conexao->close();
?>

<table class="table table-hover table-striped">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td><?= $registro['email'] ?></td>
            <td>
                <?= $registro['nascimento'] ?>
            </td>
            <td>
                <a href="/php/PHP-Udemy-Leo-Leit-o/exercicio.php?dir=db&file=excluir_2&excluir=<?= $registro['id'] ?>"
                    class="btn btn-danger btn-sm">
                    Excluir
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
table>* {
    font-size: 1rem;
}
</style>