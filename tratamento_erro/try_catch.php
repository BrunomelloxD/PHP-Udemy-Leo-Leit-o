<div class="titulo">Try/Catch</div>

<?php 
    // echo 7 / 0;
    // intdiv(7,0)

    try {
        echo intdiv(7, 0);
    } catch (Error $e) {
        echo "Teve um erro aqui #1 <br>";
    };

    try {
        throw new Exception('Um erro muito estranho aconteceu!');
        echo intdiv(7,0);
    } catch (DivisionByZeroError $err) {
        echo 'Divisão por zero' . '<br>';
    } catch(Throwable $err) {
        echo 'Erro encontrado: ' . $e -> getMessage() . '<br>';
    } finally {
        echo 'Sempre executado! <br>';
    }

    echo "Execução continua normalmente! <br>";
?>