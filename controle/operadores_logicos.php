<div class="titulo">Operadores lógicos</div>

<?php 
    echo '<p>V ou F</p>';
    var_dump(true);
    var_dump(!true);

    echo "<p>Tabela verdade do And</p><hr>";

    var_dump(true && true);
    var_dump(true && false);

    echo "<p>Tabela verdade do Or</p><hr>";

    var_dump(true || true);
    var_dump(true || false);

    echo "<p>Tabela verdade do XOR</p><hr>";

    var_dump(true xor true);
    var_dump(true xor false);

    echo "<p class='divisao'>Exemplo</p><hr>";
    $idade = 62;
    $sexo = "F";
    echo '<br>';

    if($idade >= 60 && $sexo === 'F') {
        echo 'Pode se aposentar';
    } else if ($idade >= 65 && $sexo === 'M') {
        echo 'Pose se aposenter';
    } else {
        echo 'Vai ter que trabalhar mais um pouco';
    }

?>

<style>
p {
    font-weight: bold;
}

hr {
    margin: 0px;
}
</style>