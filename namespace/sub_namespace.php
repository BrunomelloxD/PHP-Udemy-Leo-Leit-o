<?php 
    namespace App;
?>

<div class="titulo">Sub-Namespaces</div>

<?php 
    echo __NAMESPACE__ . '<br>';
    const constante = 123;
    // echo contante . '<br>';

    namespace App\Principal;
    echo __NAMESPACE__ . '<br>';
    const constante = 456;

    namespace App\Principal\Especifico;
    echo __NAMESPACE__ . '<br>';
    const constante = 789;

    // echo contante . '<br>';
    echo constant('\\' . __NAMESPACE__ . '\constante') . '<br>';

    echo "<br>Acessando as constante em cada Namespace: <br>";
    echo \App\constante . '<br>';
    echo \App\Principal\constante . '<br>';
    echo \App\Principal\Especifico\constante . '<br>';
?>