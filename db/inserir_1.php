<div class="titulo">Inserir Registro #01</div>

<?php 
    require_once "conexao.php";

    $sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario) 
    VALUES(
        'xDxD',
        '1995-08-29',
        'xDxD@gmail.com',
        'http://xDXD.xD.com',
        1,
        900.87
    )";

    $conexao = novaConexao();
    $resultado = $conexao -> query($sql);

    if($resultado) {
        echo "Sucesso :)";
    } else {
        echo "Error: " . $conexao->error;
    }

    $conexao->close();
?>