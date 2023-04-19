<div class="titulo">Tipo booleano</div>

<?php 
    echo true;
    echo '<br>';
    
    echo false;
    echo '<br>';

    var_dump(true);
    echo '<br>';

    var_dump(false);
    echo '<br>';

    var_dump('false');
    echo '<br>';

    echo is_bool(false);
    echo '<br>';

    echo is_bool('false');
    echo '<br>';

    echo "<p>Regras:</p>";
    echo "<br>" . var_dump((bool) 0); // apenas zero é false

    echo '<br>';
    var_dump((bool) 20);

    echo '<br>';
    var_dump((bool) -1);

    echo '<br>';
    var_dump((bool) 0.0);

    echo '<br>';
    var_dump((bool) 0.0000000000001);

    echo '<br>';
    var_dump((bool) '');
    
    echo '<br>';
    var_dump((bool) ' ');

    echo '<br>';
    var_dump((bool) '0');

    echo '<br>';
    var_dump((bool) '00');
?>