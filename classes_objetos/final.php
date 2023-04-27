<div class="titulo">Final</div>

<?php 
    abstract class Abstrata {
        abstract public function metodo1();
        public final function metodo2() {
            echo 'Não vou mudar! <br>';
        }
    }

    class Classe extends Abstrata {
        public function metodo1() {
            echo 'Executando o método 1';
        }

        // public function metodo2() {
        //     echo 'Extendo o método 2';
        // }
    }

    $classe = new Classe();
    $classe -> metodo1();
    // $classe -> metodo2();

    final class Unica {
        public $att = 'Valor';
    }

    $unica = new Unica();
    echo '<br>' . $unica->att;

    // class Duplicata extends Unica {
    //     public $att2;
    // }
?>