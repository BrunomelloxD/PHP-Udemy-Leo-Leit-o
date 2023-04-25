<div class="titulo">Usando tipos</div>

<?php 
    function somar1($a, $b) {
        echo "<span>Somando $a + $b: </span>";
        return $a + $b;
    }

    echo somar1(1,2) . '<br>';
    echo somar1(1.7,2.5) . '<br>';

    echo '<hr>';

    function somar2(float $a, float $b) {
        echo "<span>Somando $a + $b: </span>";
        return $a + $b;
    }

    echo somar2(2,3) . '<br>';
    echo somar2(2.5,3.3) . '<br>';

    echo '<hr>';
    function somar3($a, $b): int {
        echo "<span>Somando $a + $b: </span>";
        return $a + $b;
    }

    echo somar3(2,3) . '<br>';
    echo somar3(2.5,3.3) . '<br>';
?>