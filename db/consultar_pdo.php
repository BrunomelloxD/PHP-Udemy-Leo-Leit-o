<div class="titulo">PDO: Consultar</div>

<?php 
    require_once "conexao_pdo.php";

    $conexao = novaConexao();

    $sql = "SELECT * FROM cadastro";
    // fetch() = retorna apenas o primeiro registro
    // fetchAll() = retorna todas os registros
    // PDO::FETCH_NUM
    $resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    print_r($resultado);

    echo '<hr>';

    $sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";

    $stmt = $conexao->prepare($sql);

    // PDO:: PARAM_INT informa que o ':qtde', 2 é do tipo inteiro, se não irá passar como string 
    $stmt->bindValue(':qtde', 2, PDO:: PARAM_INT);
    $stmt->bindValue(':inicio', 3, PDO:: PARAM_INT);

    if($stmt->execute()) {
        $resultado = $stmt->fetchAll();
        print_r($resultado);
    } else {
        echo "Código: " . $stmt->errorCode() . "<br>";
        print_r($stmt->errorInfo());
    }

    echo "<hr>";

    $sql = "SELECT * FROM cadastro WHERE id = :id";
    $stmt= $conexao->prepare($sql);
    // $stmt->bindValue(':id', 15, PDO:: PARAM_INT);
    // if($stmt->execute([15])) 
    // if($stmt->execute()) 
    if($stmt->execute([':id' => 7])) {
        $resultado = $stmt->fetch();
        print_r($resultado);
    } else {
        echo "Código: " . $stmt->errorCode() . "<br>";
        print_r($stmt->errorInfo());
    };

    // $conexao->close();
?>