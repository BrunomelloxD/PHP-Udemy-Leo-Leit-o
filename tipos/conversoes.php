<div class="titulos">Conversões PHP</div>

<?php 
    echo is_int(PHP_INT_MAX);

    // Int para float
    echo '<br';
    var_dump(PHP_INT_MAX + 1);
    
    echo '<br>';
    var_dump(1 + 1.0);

    echo '<br>';
    var_dump((float) 3);

    // Float para int
    echo 'Float para int';
    var_dump((int) 2.8);

    echo '<br>';
    var_dump((intval(2.8, 10)));

    echo '<br>';
    var_dump((int) round(2.8));

    // Operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2");

    echo '<br>';
    var_dump("3" + 2);
    
    echo '<br>';
    var_dump("3" . 2);

    echo '<br>';
    echo is_string("3" . 2);

    echo '<br>';
    echo is_string("3" + 2);

    // var_dump(1 + "cinco");
    var_dump(1 + "5 cinco")
?>