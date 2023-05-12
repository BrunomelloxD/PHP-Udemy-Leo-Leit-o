<!-- Importando Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<div class="titulo">Consultar Registros</div>

<?php 
    require_once "conexao.php";

    $sql = "SELECT id, nome, nascimento, email FROM cadastro";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    $registros = [];

    if($resultado->num_rows > 0) {
        while($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif($conexao->error) {
        echo "Error: ".$conexao->error;
    }

    // print_r($registros);

    $conexao->close();
?>

<table class="table table-sm table-hover table-stripe table-bordered">
    <thead>
        <th>ID</th>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro) : ?>
        <tr>
            <td><?= $registro['id'] ?></td>
            <td><?= $registro['nome'] ?></td>
            <td>
                <!-- 
                    Recebe a data como string e converte para formato de data com 
                    o "strtotime" e após isso formata a hora com date('d/m/y') 
                -->
                <?= date('d/m/Y', strtotime($registro['nascimento'])) ?>
            </td>
            <td><?= $registro['email'] ?></td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
table>* {
    font-size: 1rem;
}
</style>