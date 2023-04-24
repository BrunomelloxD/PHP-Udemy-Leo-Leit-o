<div class="titulo">Desafio Sorteio</div>

<?php 
    $nome = ['Elza', 'Rapunzel', 'Branca de neve', 'Cinderela'];

    $indice = array_rand($nome);
    echo "<div center><h1>$nome[$indice]</h1></div>";
?>

<style>
[center] {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>