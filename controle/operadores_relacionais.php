<div class="titulo">Operadores relacionais</div>

<?php 
    var_dump(1 == 1);
    var_dump(1 === 1);
    var_dump(1 > 1);
    var_dump(1 >= 1);
    var_dump(1 != 1);
    var_dump(1 < 1);
    var_dump(1 <= 1);

    var_dump(1 == '1');
    var_dump(1 === '1');
    var_dump(1 > '1');
    var_dump(1 >= '1');
    var_dump(1 != '1');
    var_dump(1 < '1');
    var_dump(1 <= '1');

    echo "<p>Relacionais no If/Else</p><hr>";

    $idade = 15;

    if($idade < 18) {
        echo 'Menor de idade';
    } else if ($idade < 65) {
        echo 'Adulto<br>';
    } else {
        echo 'Terceira idade';
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3);
    var_dump(5 <=> 5);
    var_dump(1 <=> 3);
?>

<style>
p {
    margin-bottom: -10px;
}

hr {
    margin-top: 0px;
}
</style>